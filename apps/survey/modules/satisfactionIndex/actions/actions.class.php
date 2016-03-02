<?php

/**
 * satisfactionIndex actions.
 *
 * @package    qualityRecords
 * @subpackage satisfactionIndex
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class satisfactionIndexActions extends SnappsActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
	if ($this->getRequest()->getMethod() == sfRequest::POST):
		$batchNumber = HrLib::randomID(10);
		foreach($_POST as $vars => $val ):
			$questionaireID = 0;
			if (substr($vars, 0, 6 ) == 'input_') :
				$questionaireID = substr($vars, 6 );
			endif;
			if ($questionaireID > 0 && $_POST['input_' . $questionaireID] ):
				$r = new HrEmployeeSatisfactionSurvey();
				$r->setQuestionaireId($questionaireID);
				$r->setRating($_POST['input_' . $questionaireID]);
				$r->setRecommendation($_POST['recommend_' . $questionaireID]);
				$r->setDateCreated(DateUtils::DUNow());
				$r->setCreatedBy('RANDOM USER');
				$r->setDateModified(DateUtils::DUNow());
				$r->setModifiedBy('RANDOM USER');
				$r->setBatchNumber($batchNumber);
				$r->save();
			endif;
		endforeach;
		$this->redirect('satisfactionIndex/showSurvey?batch=' . $batchNumber);
	endif;
  }
  
  public function executeShowSurvey()
  {
//   	var_dump($this->_G('batch'));
//   	exit();
  	 $rec = HrEmployeeSatisfactionSurveyPeer::GetDataByBatch($this->_G('batch'));
  	 foreach($rec as $r):
  	 	$this->_S('input_' . $r->getQuestionaireId(), $r->getRating());
  	 	$this->_S('recommend_' . $r->getQuestionaireId(), $r->getRecommendation());
  	 endforeach;
  	 $this->setTemplate('index');
  }
  
  public function executeSurveySummary()
  {
  	//---------- generate random rating from 4-5;
//   	 $c = new Criteria();
//   	 $rs = HrEmployeeSatisfactionSurveyPeer::doSelect($c);
//   	 foreach($rs as $r):
//   	 	if (rand(1,5) == 5) :
// 	  	 	$r->setRating(rand(5,5));
// 	  	 	$r->save();
// 	  	endif;
//   	 endforeach;
  }
  
}
