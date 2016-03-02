<?php 

/*
 * This file is part of the sfPagerNavigation package.
 * (c) 2004-2006 Francois Zaninotto <francois.zaninotto@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @package    sfPagerNavigation
 * @author     Francois Zaninotto <francois.zaninotto@symfony-project.com>
 * @version    SVN: $Id$
 */


/**
 * Includes an AJAX navigation.
 * If you provide a sfPager object, the helper automatically stops the periodical call
 * wen reaching the last page
 *
 * <b>Options:</b>
 * - url - 'module/action' or '@rule' of the AJAX action
 * - update - id of the paginated list
 * - page_name - name of the page request parameter, defaults to 'name'
 * - frequency - number of seconds between each position check, defaults to 1 second
 * - trigger - height in pixels, calculated from the bottom of the page, which triggers the AJAX call
 * ...as well as the usual remote_ helpers options
 *
 * @param  array Ajax options
 * @param  object optional sfPager object of the current pager 
 * @return string XHTML code containing links
 */
function remote_pager($options = array(), $pager = null)
{
  if($pager && ($pager->getNextPage() == $pager->getPage() || $pager->getPage()!= 1))
  {
    return; 
  } 
  
  // name of the page request parameter (default 'page')
  $options['page_name'] = isset($options['page_name']) ? $options['page_name'] : 'page';
  
  // frequency of the scroll check (default 1 second)
  $options['frequency'] = isset($options['frequency']) ? $options['frequency'] : 1; 
  
  // scroll offset (in pixels, from the bottom) triggering the remote call (default 30px)
  $options['trigger']   = isset($options['trigger']) ? $options['trigger'] : '30';

  $options['position']  = isset($options['position']) ? $options['position']  : 'before';
  
  use_helper('Javascript');
  
  //sfContext::getInstance()->getResponse()->addJavascript('/sf/js/prototype/prototype');
  
  $javascript_callback = 'ajax_pager_semaphore = 0; ajax_pager_page++;';  
  if($pager)
  {
    // build in the stop of the PeriodicalExecuter when the pager reaches the last page
    $javascript_callback .= 'if(ajax_pager_page>'.$pager->getLastPage().') { pager_watch.callback = function () {}; };';
  }
  $options['success']   = isset($options['success']) ? $options['success'].$javascript_callback : $javascript_callback;
  $options['query_string']   = isset($options['query_string']) ? $options['query_string'] : '';
  
  return javascript_tag("
  var ajax_pager_semaphore = 0;
  var ajax_pager_page = 2;

  function sf_ajax_next_page()
  {
    if (ajax_pager_semaphore == 0)
    {
      ajax_pager_semaphore = 1;
      new Ajax.Updater(
        '".$options['update']."', 
        '".url_for($options['url']).'?'.$options['query_string'] . '&' . $options['page_name']."='+ajax_pager_page,
        "._options_for_ajax($options)."
      );
    }
  } 

  pager_watch = new PeriodicalExecuter(function() 
  {
     var scrollpos = window.pageYOffset || document.body.scrollTop || document.documentElement.scrollTop;
     var windowsize = window.innerHeight || document.documentElement.clientHeight;
     var testend = document.body.clientHeight - (windowsize + scrollpos);
     
     if ( (testend < ".$options['trigger'].") )
     {
       sf_ajax_next_page();
     }
  }, ".$options['frequency'].");");
  
}

function stop_remote_pager()
{
  use_helper('Javascript');
  
  // until prototype implements a stop() method for the PeriodicalExecuter,
  // the following (almost a hack) is the only simple way to stop it
  
  return javascript_tag("pager_watch.callback = function () {};"); 
}

/**
 * Outputs a regular navigation navigation.
 * It outputs a series of links to the first, previous, next and last page
 * as well as to the 5 pages surrounding the current page.
 *
 * @param  object sfPager object of the current pager 
 * @param  string 'module/action' or '@rule' of the paginated action
 * @return string XHTML code containing links
 */
function pager_navigation($pager, $uri, $options)
{
  $navigation = '';
 
  if ($pager->haveToPaginate())
  {  
    $uri .= (preg_match('/\?/', $uri) ? '&' : '?').'page=';
 
    // First and previous page
    if ($pager->getPage() != 1)
    {
      $navigation .= link_to(image_tag('icons/first.gif', 'align=absmiddle'), $uri.'1',$options).'&nbsp;';
      $navigation .= link_to(image_tag('icons/previous.gif', 'align=absmiddle'), $uri.$pager->getPreviousPage(),$options).'&nbsp;';
    } else {
      $navigation .= image_tag('icons/first-disabled.gif', 'align=absmiddle').'&nbsp;';
      $navigation .= image_tag('icons/previous-disabled.gif', 'align=absmiddle').'&nbsp;';
    }
 
    // Pages one by one
    $links = array();
    foreach ($pager->getLinks() as $page)
    {
      $links[] = link_to_unless($page == $pager->getPage(), $page, $uri.$page,$options);
    }
    $navigation .= join('&nbsp;&nbsp;', $links);
 
    // Next and last page
    if ($pager->getPage() != $pager->getLastPage())
    {
      $navigation .= '&nbsp;'.link_to(image_tag('icons/next.gif', 'align=absmiddle'), $uri.$pager->getNextPage(),$options);
      $navigation .= '&nbsp;'.link_to(image_tag('icons/last.gif', 'align=absmiddle'), $uri.$pager->getLastPage(),$options);
    } else {
      $navigation .= '&nbsp;'.image_tag('icons/next-disabled.gif', 'align=absmiddle');
      $navigation .= '&nbsp;'.image_tag('icons/last-disabled.gif', 'align=absmiddle');
    }
 
  }
  return $navigation;
}



function pager_navigation_remote($pager, $remoteOptions = array(), $options = array())
{
  $navigation = '';
 
  if ($pager->haveToPaginate())
  {  
    //$uri .= (preg_match('/\?/', $uri) ? '&' : '?').'page=';
    
    $remoteOptions['with'] = isset($remoteOptions['with']) ? substr($remoteOptions['with'], 0, strlen($remoteOptions['with']) - 1) : '';
    $remoteOptionsWithOriginal = $remoteOptions['with'];
 
    // First and previous page
    if ($pager->getPage() != 1)
    {
        $remoteOptions['with'] = $remoteOptionsWithOriginal . '&page=' . 1 . "'";
        $navigation .= link_to_remote(image_tag('icons/first.gif', 'align=absmiddle'), $remoteOptions,$options).'&nbsp;';

        $remoteOptions['with'] = $remoteOptionsWithOriginal . '&page=' . $pager->getPreviousPage() . "'";
        $navigation .= link_to_remote(image_tag('icons/previous.gif', 'align=absmiddle'), $remoteOptions,$options).'&nbsp;';
    } else {
        
      $navigation .= image_tag('icons/first-disabled.gif', 'align=absmiddle').'&nbsp;';
      $navigation .= image_tag('icons/previous-disabled.gif', 'align=absmiddle').'&nbsp;';
    }
 
    // Pages one by one
    $links = array();
    foreach ($pager->getLinks() as $page)
    {
        if ($page != $pager->getPage()) {
            $remoteOptions['with'] = $remoteOptionsWithOriginal . '&page=' . $page . "'";
            $links[] = link_to_remote($page, $remoteOptions, $options);
        } else {
            $links[] = $page;
        }   
    }
    $navigation .= join('&nbsp;&nbsp;', $links);


    
    // Next and last page
    if ($pager->getPage() != $pager->getLastPage())
    {
//                var_dump($navigation);
//        echo '<br>im here';
//        exit();
        $remoteOptions['with'] = $remoteOptionsWithOriginal . '&page=' . $pager->getNextPage() . "'";
        $navigation .= '&nbsp;'.link_to_remote(image_tag('icons/next.gif', 'align=absmiddle'), $remoteOptions,$options);
        
        $remoteOptions['with'] = $remoteOptionsWithOriginal . '&page=' . $pager->getLastPage() . "'";
        $navigation .= '&nbsp;'.link_to_remote(image_tag('icons/last.gif', 'align=absmiddle'), $remoteOptions,$options);
    } else {
      $navigation .= '&nbsp;'.image_tag('icons/next-disabled.gif', 'align=absmiddle');
      $navigation .= '&nbsp;'.image_tag('icons/last-disabled.gif', 'align=absmiddle');
    }
 
  }
 
  return $navigation;
}

function pager_navigation_jqueryAjax($pager, $uri, $options, $pagerDivID)
{
	$navigation = '';
	if ($pager->haveToPaginate())
	{
		
		$uri .= (preg_match('/\?/', $uri) ? '&' : '?').'page=';
		$uri = url_for('') . $uri;
		//var_dump($uri);
		// First and previous page
		if ($pager->getPage() != 1)
		{
			$pageID = $pagerDivID .'_' . 'first';
			$opt = array_merge($options, array('id'=>$pageID) );
			$navigation .= link_to(image_tag('icons/first.gif', 'align=absmiddle'), '#', $opt).'&nbsp;' ;
			$navigation .= javascript_tag ("
				$(document).ready(function(){
					$('#".$pagerDivID .'_first'."').on('click', {extraparams: 'isAjax=true', loadUrl: '" . $uri. '1' . "' , update: '#".$pagerDivID."'}, doAjax);
					});
				") ;	
			
			$pageID = $pagerDivID .'_' . 'prev';
			$opt = array_merge($options, array('id'=>$pageID) );
			$navigation .= link_to(image_tag('icons/previous.gif', 'align=absmiddle'), '#', $opt).'&nbsp;';
			$navigation .= javascript_tag ("
				$(document).ready(function(){
					$('#".$pagerDivID .'_prev'."').on('click', {extraparams: 'isAjax=true', loadUrl: '" . $uri. $pager->getPreviousPage() . "' , update: '#".$pagerDivID."'}, doAjax);
					});
				") ;
		} else {
			$navigation .= image_tag('icons/first-disabled.gif', 'align=absmiddle').'&nbsp;';
			$navigation .= image_tag('icons/previous-disabled.gif', 'align=absmiddle').'&nbsp;';
		}
		// Pages one by one
		$links = array();
		foreach ($pager->getLinks() as $page)
		{
			$pageID = $pagerDivID .'_' . $page;
			$opt = array_merge($options, array('id'=>$pageID) );
			$links[] = link_to_unless($page == $pager->getPage(), $page, '#', $opt)
			//$links[] = link_to($page, '#', $opt)
			. javascript_tag ("
				$(document).ready(function(){
					$('#".$pageID."').on('click', {extraparams: 'isAjax=true', loadUrl: '" . $uri.$page . "' , update: '#".$pagerDivID."'}, doAjax);
					});
				") ;
		}
		$navigation .= join('&nbsp;&nbsp;', $links);
		// Next and last page
		if ($pager->getPage() != $pager->getLastPage())
		{
			$pageID = $pagerDivID .'_' . 'next';
			$opt = array_merge($options, array('id'=>$pageID) );
			$navigation .= '&nbsp;'.link_to(image_tag('icons/next.gif', 'align=absmiddle'), '#', $opt);
			$navigation .= javascript_tag ("
				$(document).ready(function(){
					$('#".$pagerDivID .'_next'."').on('click', {extraparams: 'isAjax=true'.$options, loadUrl: '" . $uri. $pager->getNextPage() . "' , update: '#".$pagerDivID."'}, doAjax);
					});
				") ;
			
			$pageID = $pagerDivID .'_' . 'last';
			$opt = array_merge($options, array('id'=>$pageID) );
			$navigation .= '&nbsp;'.link_to(image_tag('icons/last.gif', 'align=absmiddle'), '#', $opt);
			$navigation .= javascript_tag ("
				$(document).ready(function(){
					$('#".$pagerDivID .'_last'."').on('click', {extraparams: 'isAjax=true', loadUrl: '" . $uri. $pager->getLastPage() . "' , update: '#".$pagerDivID."'}, doAjax);
					});
				") ;
		} else {
			$navigation .= '&nbsp;'.image_tag('icons/next-disabled.gif', 'align=absmiddle');
			$navigation .= '&nbsp;'.image_tag('icons/last-disabled.gif', 'align=absmiddle');
		}

	}
	return $navigation;
}
 ?>