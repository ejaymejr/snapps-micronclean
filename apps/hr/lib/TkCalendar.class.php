<?php

class TkCalendar
{
    protected $monthBaseURL;

//    var $dthol = array();
//    var $namehol = array();
    var $holiday = array('date'=>array(), 'desc'=>array(), 'id'=>array());
    var $weekno = array('day'=>array(),   'date'=>array(), 'week'=>array());
    var $wrktmp = array('index'=>array(), 'date'=>array(), 'no_hours'=>array());
    var $leave  = array('date'=>array(),  'leave_type'=>array());
    var $id = '';
    var $fyear = '';         //fiscal year
    var $actual = array();
    var $otList = ''; //overtime lists
    var $utList = ''; //undertime lists


    function __construct($cyear, $hol = false){
        $this->fyear = $cyear;
        $this->setWkOnSunday($cyear);
        if (($hol) || (!$this->holiday))                       // load holiday details automatically
        {
            $holinfo = HrHolidayPeer::getDateHolByDate($cyear);   //get holiday
            $this->setHolidays($holinfo['dates_hol'], $holinfo['holname'], $holinfo['id']);              //set holiday
        }
        
    }

    function __destruct(){
        unset( $this->holiday );
        unset( $weekno );
        unset( $wrktmp );
        unset( $leave  );
        unset( $id );
        unset( $fyear );
    }

    public function MonthlyCalendar($curdt){
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        //<td height='20' colspan='8' background='/cityhall/images/monthBg.gif'><div align='center'>
        $cal =  "
		<table width='195' border='0' cellpadding='1' cellspacing='1'>
		  <tr>

		    <td height='20' colspan='8' class='tk-bgimgmon'><div align='center'>		    
		    <strong>".DateUtils::DUFormat('F', $cdate)."  ".DateUtils::DUFormat('Y', $cdate)."</strong></div></td>
		  </tr>
		  <tr>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center'><span class='tk-style1'><span class='tk-style2'><span class='tk-style4'><span class='tk-style6'><span class='tk-style6'></span></span></span></span></span> &nbsp;</div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>S</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>M</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>T</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>W</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>T</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>F</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>S</div>
		    </div></td>
		  </tr>";

        $wk = $this->getweeks($cdate);
        $z=0;
        $cellinfo = array();
        $ydt = DateUtils::AddDate($cdate, -1);

        for ($x=0; $x<$wk; $x++) {
            //<tr><td width='50' height='44' bgcolor='#000033'><div align='center' class='tk-style32'>".$zwk++."</div></td>
            $cal = $cal . "
		  	<tr>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>W".$this->getWeekNoByDate(DateUtils::AddDate($ydt, 1))."</div>
		    </div></td>
	    	";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                	
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }

                //$cellinfo = $this->processdetail($ydt, $dtrs);
                //$mess = $mess. $cellinfo['mess'] . '<br>';
                //<td width='25' height='20' bgcolor='".$this->getBgColors($cdate, $ydt)."' ><div align='center' color='ff00ff'>
                $cal = $cal . "
	        <td width='25' height='20' ".$this->getBgColors($cdate, $ydt)." ><div align='center' color='ff00ff'>
		      <div align='center'><font color='".$this->getFgColors($cdate,  $ydt)."'>".$dt."</font></div>
		    </div></td>
	        ";

                $z= ($ydt >= $cdate)? $z+1 : $z ;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
        	
        $cal = $cal .  "</table>";
        return $cal;
    }

    public function WrkTmpCalendar($curdt){
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));

        $hrs = implode("," , $this->wrktmp['no_hours']);

        $headerTitle = DateUtils::DUFormat('F Y', $cdate);
        $cdt = DateUtils::DUFormat('Y-m-01', $cdate);
        $headerLink = ($this->monthBaseURL)? link_to($headerTitle, $this->monthBaseURL, array('query_string' => 'id='.$this->id.'&cdt=' . $cdt  )) : $headerTitle;
        $cal =  "
		<table width='195' border='0' cellpadding='1' cellspacing='1'>
		  <tr>

		    <td height='20' colspan='8' class='tk-bgimgmon'><div align='center'>		    
		    <strong>".$headerLink."</strong></div></td>
		  </tr>
		  <tr>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center'><span class='tk-style1'><span class='tk-style2'><span class='tk-style4'><span class='tk-style6'><span class='tk-style6'></span></span></span></span></span> &nbsp;</div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>S</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>M</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>T</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>W</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>T</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>F</div>
		    </div></td>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>S</div>
		    </div></td>
		  </tr>";

        $wk = $this->getweeks($cdate);
        $z=0;
        $cellinfo = array();
        $ydt = DateUtils::AddDate($cdate, -1);

        for ($x=0; $x<$wk; $x++) {
            //<tr><td width='50' height='44' bgcolor='#000033'><div align='center' class='tk-style32'>".$zwk++."</div></td>
            $cal = $cal . "
		  	<tr>
		    <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
		      <div align='center'>W".$this->getWeekNoByDate(DateUtils::AddDate($ydt, 1))."</div>
		    </div></td>
	    	";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                	
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }

                //$cellinfo = $this->processdetail($ydt, $dtrs);
                //$mess = $mess. $cellinfo['mess'] . '<br>';
                 
                $cal = $cal . "
	        <td width='25' height='20' ".$this->getWrkTmpColors($cdate, $ydt)." ><div align='center' color='ff00ff'>
		      <div align='center'><font color='".$this->getFgColors($cdate,  $ydt)."'>".$dt."</font></div>
		    </div></td>
	        ";

                $z= ($ydt >= $cdate)? $z+1 : $z ;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
        	
        $cal = $cal .  "</table>";
        return $cal;
    }

    public function AttendanceCalendar($curdt){
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));

        $hrs = implode("," , $this->wrktmp['no_hours']);

        $headerTitle = DateUtils::DUFormat('F Y', $cdate);
        $cdt = DateUtils::DUFormat('Y-m-01', $cdate);
        $headerLink = ($this->monthBaseURL)? link_to($headerTitle, $this->monthBaseURL, array('query_string' => 'id='.$this->id.'&cdt=' . $cdt  )) : $headerTitle;
        $cal =  "
        <table width='195' border='0' cellpadding='1' cellspacing='1'>
          <tr>

            <td height='20' colspan='8' class='tk-bgimgmon'><div align='center'>            
            <strong>".$headerLink."</strong></div></td>
          </tr>
          <tr>
            <td width='25' height='20' class='tk-bgimgday'><div align='center'><span class='tk-style1'><span class='tk-style2'><span class='tk-style4'><span class='tk-style6'><span class='tk-style6'></span></span></span></span></span> &nbsp;</div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>S</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>M</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>T</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>W</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>T</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>F</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>S</div>
            </div></td>
          </tr>";

        $wk = $this->getweeks($cdate);
        $z=0;
        $cellinfo = array();
        $ydt = DateUtils::AddDate($cdate, -1);

        for ($x=0; $x<$wk; $x++) {
            //<tr><td width='50' height='44' bgcolor='#000033'><div align='center' class='tk-style32'>".$zwk++."</div></td>
            $cal = $cal . "
            <tr>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>W".$this->getWeekNoByDate(DateUtils::AddDate($ydt, 1))."</div>
            </div></td>
            ";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                 
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }

                //$cellinfo = $this->processdetail($ydt, $dtrs);
                //$mess = $mess. $cellinfo['mess'] . '<br>';

                $cal = $cal . "
                <td width='25' height='20' ".$this->getAttendanceColors($cdate, $ydt)." ><div align='center' color='ff00ff'>
              <div align='center'><font color='".$this->getFgColors($cdate,  $ydt)."'>".$dt."</font></div>
            </div></td>
            ";

                $z= ($ydt >= $cdate)? $z+1 : $z ;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
         
        $cal = $cal .  "</table>";
        return $cal;
    }


    public function isHoliday($cdate, $cday){
        if (DateUtils::DUFormat('F', $cdate) !== DateUtils::DUFormat('F', $cday)){
            return false;
        }
        if (in_array($cday, $this->holiday['date']) ) {
            return true;
        }
        return false;
    }

    protected function isWorking($cday){
        $pos = 0;
        if (in_array($cday, $this->wrktmp['date']) ) {
            $pos = array_search($cday, $this->wrktmp['date']);
            return ($this->wrktmp['no_hours'][$pos]);
        }
        return 0;
    }

    protected function isPresent($cday){
        $pos = 0;
        if (in_array($cday, $this->actual['date']) ) {
            $pos = array_search($cday, $this->actual['date']);
            return ($this->actual['attendance'][$pos]);
        }
        return 0;
    }

    public function isOnLeave($cday){
        $pos = 0;
        if (in_array($cday, $this->actual['date']) ) {
            $pos = array_search($cday, $this->actual['date']);
            return ($this->actual['leave'][$pos]);
        }
        return 0;
    }

    public function isOnEmployeeLeave($cday){
        $pos = 0;
        if (in_array($cday, $this->leave['date']) ) {
            $pos = array_search($cday, $this->actual['date']);
            return ($this->actual['leave'][$pos]);
        }
        return 0;
    }
    
    protected function isDayOff($cday){
        $pos = 0;
        if (in_array($cday, $this->actual['date']) ) {
            $pos = array_search($cday, $this->actual['date']);
            return ($this->actual['dayoff'][$pos]);
        }
        return 0;
    }

    protected function DisplayArray($data){
        foreach($data as $kd=>$vd){
            echo 'key ['.$kd.']: '.$vd.'<br>';
        }
    }

    public function HourCalendar($curdt=null){
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        //.$this->setsdate($cdate, 'F')."  ".$this->setsdate($cdate, 'Y').
        $cal =  "
	<table width='360' border='1' cellpadding='0' cellspacing='0' bordercolor='#0000CC'>
	  <tr>
	    <td height='39' colspan='8' align='center' valign='middle' class='tk-bgimgtmp'><label></label>
	      <div align='center' class='tk-style27'>".DateUtils::DUFormat('F', $cdate)."  ".DateUtils::DUFormat('Y', $cdate)."</div></td>
	  </tr>
	  <tr>
	    <td height='40' bgcolor='#93D6FD'><div align='center' class='tk-style21'> &nbsp;</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>SUN</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>MON</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>TUE</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>WED</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>THU</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>FRI</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>SAT</div></td>
	  </tr>
	  ";
        $wk = $this->getweeks($cdate);
        $z=0;
        $ydt = DateUtils::AddDate($cdate, -1);

        for ($x=0; $x<$wk; $x++) {
            $cal = $cal . "
	    	<tr>
    		<td height='50' align='center' valign='middle' bgcolor='#93D6FD' ><div align='center' class='tk-style28'>
        	W".$this->getWeekNoByDate(DateUtils::AddDate($ydt, 1))."</div></td>
	    	";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                	
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }


                $cal = $cal . "
		    <td width='45' align='left' valign='top' ".$this->getTempBgColors($cdate, $ydt)."><div align='top' class='tk-style6'>
        	<font color='".$this->getTempFgColors($cdate,  $ydt)."'>&nbsp;&nbsp;".$dt."</font></div><div align='center'>
        	<input name='wrk".$z."' type='text' class='tk-style19' size='2' maxlength='2' value = '".$this->isWorking($ydt)."'/>
      		</div></td>
	        ";

                //$z= ($ydt >= $cdate)? $z+1 : $z ;
                $z= $z+1;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
        	
        $cal = $cal .  "</table>";
        return $cal;
    }

    
    public function DtrSummaryCalendar($curdt, $empNo, $dtr){
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        $dailySummary = $this->ConvertDtrtoArray($dtr);
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        //.$this->setsdate($cdate, 'F')."  ".$this->setsdate($cdate, 'Y').
        $cal =  "<table width='100%' border='0' cellpadding='2' cellspacing='2' bgcolor='#DED59A'>
        		 <tr><td>
	<table width='100%' border='0' cellpadding='2' cellspacing='2' bordercolor='#DED59A'>
	  <tr>
	    <td height='60' colspan='8' align='center' valign='middle' class='tk-style30'><label>"
	      .strtoupper(DateUtils::DUFormat('F', $cdate)."  ".DateUtils::DUFormat('Y', $cdate))."</label></td>
	  </tr>
	  <tr>
	    
	     <td height='60' width='12.5%' class='tk-style31'><div align='center' class='tk-style31'>SUN</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>MON</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>TUE</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>WED</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>THU</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>FRI</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>SAT</div></td>
	  </tr>
	  ";
        $wk = $this->getweeks($cdate);
        $z=0;
        $ydt = DateUtils::AddDate($cdate, -1);
		$inMonth = false;
		$detail = '';
		$bgClr = '';
		$sClr = '';
        for ($x=0; $x<$wk; $x++) {
            $cal = $cal . "
	    	<tr>
	    	";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                	
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }
				$detail  = $this->GetDailySummary($ydt, $dailySummary);
				$bgClr   = ((trim($detail['absent'][0]) == 'A') || $detail['late'][0] <> 0 ) ? "tk-style33" : "tk-style33";
				$sClr    = ((trim($detail['absent'][0]) == 'A') || $detail['late'][0] <> 0 ) ? "tk-style35" : "tk-style35";
				$inMonth = ($this->getTempFgColors($cdate,  $ydt) == '#DDDDDD' ? FALSE : TRUE) ; 
                $cal = $cal . "
		    <td height='100' width='14.2%' align='left' valign='top' class='".$bgClr."'>
        	<div class='alignTop alignRight'><span class='".$bgClr."'>". ($inMonth ? $dt . '&nbsp;&nbsp;' : '')."</span></div>
     		<div align='top' class='alignLeft'><span class='".$sClr."'>". ($inMonth ? '&nbsp;&nbsp;&nbsp; late&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '.$detail['late'][0] . ' Hr(s)' : '')."</span></div>   	
     		<div align='top' class='alignLeft'><span class='".$sClr."'>". ($inMonth ? '&nbsp;&nbsp;&nbsp; overtime : '.$detail['overtime'][0] : '')."</span></div>
			<div align='top' class='alignLeft'><span class='".$sClr."'>". ($inMonth ? '&nbsp;&nbsp;&nbsp; required&nbsp; : '.$detail['req'][0] : '')."</span></div>     		
			<div align='top' class='alignLeft'><span class='tk-style11'>&nbsp;&nbsp;&nbsp;". ($inMonth ? $detail['leave'][0] : '')."</span></div>
      		</td>
	        ";
            $z= $z+1;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
        	
        $cal = $cal .  "</table>      		</td></tr>
      		</table>
        ";
        return $cal;
    }
    
    public function ConvertDtrtoArray($dtr)
    {
    	$summ = array('trans_date'=>array(), 'overtime'=>array(), 'undertime'=>array(), 'absent'=>array(), 'req'=>array(), 'leave'=>array());
    	foreach($dtr as $rec)
    	{
    		$summ['trans_date'][] = $rec->getTransDate();
    		$summ['overtime'][]   = $rec->getOvertimes();
    		$summ['undertime'][]  = $rec->getUndertime();
    		$summ['absent'][]     = $rec->getAttendance();
    		$summ['req'][]        = $rec->getNormal();
    		$summ['leave'][]      = strtoupper($rec->getLeaveType());
    	}
    	return $summ;	
    }
    
    public function GetDailySummary($cdate, $summ)
    {
        $pos = 0;
        $det = array('late'=>'', 'absent'=>'', 'overtime'=>'');
        if (in_array($cdate, $summ['trans_date']) ) {
            $pos = array_search($cdate, $summ['trans_date']);
	        $det['late'][]    =$summ['undertime'][$pos];
	        $det['absent'][]  =$summ['absent'][$pos];
	        $det['overtime'][]=$summ['overtime'][$pos];
	        $det['req'][]     =$summ['req'][$pos];
	        $det['leave'][]   =$summ['leave'][$pos];
            return $det;
        }
        $det['late'][]='';
        $det['absent'][]='';
        $det['overtime'][]='';
        $det['req'][]='';
        $det['leave'][]='';
        return $det;
    }
    
    public function FirstWeekTemp($tmp){
        $cal =  "
	<table width='360' border='1' cellpadding='0' cellspacing='0' bordercolor='#0000CC'>
	  <tr>
	    <td height='39' colspan='8' align='center' valign='middle' class='tk-bgimgtmp'><label></label>
	      <div align='center' class='tk-style27'>GENERAL TEMPLATE</div></td>
	  </tr>
	  <tr>
	    <td height='40' bgcolor='#93D6FD'><div align='center' class='tk-style21'> &nbsp;</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>SUN</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>MON</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>TUE</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>WED</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>THU</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>FRI</div></td>
	     <td width='45' bgcolor='#93D6FD'><div align='center' class='tk-style28'>SAT</div></td>
	  </tr>
   	  <tr>
    	 <td height='50' align='center' valign='middle' bgcolor='#93D6FD' >
    	 	<div align='center' class='tk-style28'>W1</div></td>
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk0' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[0]."'/>
      		</div></td>
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk1' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[1]."'/>
      		</div></td>
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk2' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[2]."'/>
      		</div></td>
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk3' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[3]."'/>
      		</div></td>
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk4' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[4]."'/>
      		</div></td>
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk5' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[5]."'/>
      		</div></td>      
		 <td width='45' align='left' valign='top' class='tk-blue'><div align='top' class='tk-style6'>
        	<font color='#DDDDDD'>&nbsp;&nbsp;</font></div><div align='center'>
        	<input name='wrk6' type='text' class='tk-style19' size='2' maxlength='2' value = '".$tmp[6]."'/>
      		</div></td>      				      		      		      		      		      		
	  </tr>
	</table>";
        return $cal;
    }

    public function InitUsingWorkTempNo($wtmpid){
        $vtmp = TkWorktemplateDetailPeer::getWorkTempDetailbyWTID($wtmpid);
        $holinfo = HrHolidayPeer::getDateHolByDate($this->fyear);
        $this->SetHolidays($holinfo['dates_hol'], $holinfo['holname'], $holinfo['id']);
        $this->setWorkTemplate($vtmp);
    }

    //--------------------------------------- GET INFO
    public function getWeeknoDate(){
        return $this->weekno['date'];
    }

    public function getWrkTemplate(){
        return $this->wrktmp;
    }

    public function getweeks($cdate){
        $stdt = date("Y-m-d", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $endt = date("Y-m-d", mktime(0, 0, 0, substr($cdate, 5, 2), DateUtils::DUFormat('t', $stdt), substr($cdate, 0, 4)));
//        $stpos = $this->getWeekNoByDate($stdt);
//        $enpos = $this->getWeekNoByDate($endt);
//        echo $stdt.' -- '.$endt.'<br>' ;
        $stpos = Date('W',strtotime($stdt));
        $enpos = Date('W',strtotime($endt));
//        echo  Date('W');
//        echo $cdate;
//        echo '<br>';
//		echo $stpos.' -- '.$enpos.'--'. ($enpos - $stpos + 1) ;
//		echo 'test';
        return $enpos - $stpos + 1 ;
    }

    public function getweekNumber($cdate){
//    	$stdt = substr($cdate,0, 8) . '01';
//    	$endt = substr($cdate,0, 8) . DateUtils::DUFormat('t', $cdate);
        $stdt = date("Y-m-d", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $endt = date("Y-m-d", mktime(0, 0, 0, substr($cdate, 5, 2), DateUtils::DUFormat('t', $stdt), substr($cdate, 0, 4)));
        $stpos = $this->getWeekNoByDate($stdt);
        $enpos = $this->getWeekNoByDate($endt);
//        echo $stdt.' -- '.$endt.'<br>' ;
//        $stpos = Date('W',strtotime($stdt));
//        $enpos = Date('W',strtotime($endt));
//        echo  Date('W');
//        echo $cdate;
//        echo '<br>';
//		echo $stpos.' -- '.$enpos.'--'. ($enpos - $stpos + 1) ;
//		echo 'test';
        return $enpos - $stpos + 1 ;
    }
    
    public function getTweeks($sdate, $edate){
        $stdt = DateUtils::DUFormat("Y-m-d",$sdate);
        $endt = DateUtils::DUFormat("Y-m-d",$edate);
        $stpos = $this->getWeekNoByDate($stdt);
        $enpos = $this->getWeekNoByDate($endt);
        
//        $stpos = Date('W',$sdate);
//        $enpos = Date('W',$edate);
//        
//        echo $stpos.' -- '.$enpos.'--'. ($enpos - $stpos + 1) ;
//        exit();
        return $enpos - $stpos + 1 ;
    }

    public function getWeekNoByDate($cdate){
        //echo $cdate.'<br>';
        $pos = array_search($cdate, $this->weekno['date']);
        if ( in_array($cdate, $this->weekno['date']) ) {
            return ($this->weekno['week'][$pos]);
        }else{
            return 0;
        }
    }

    public function getDateByWeekNo($wkno){
        //echo $cdate.'<br>';
        $pos = array_search($wkno, $this->weekno['week']);
        if ( in_array($wkno, $this->weekno['week']) ) {
            return ($this->weekno['date'][$pos]);
        }else{
            return 0;
        }
    }

    protected function getBgColors($cdate, $cday){
        if ($this->isHoliday($cdate, $cday)) {
            return "class='tk-gree'"; }
            switch (DateUtils::DUFormat('l', $cday) ) {
                case 'Sunday':
                    return "class='tk-pink'";
                case 'Saturday':
                    return "class='tk-dgra'";
                default:
                    return "class='tk-lgra'";
            }
    }

    protected function getWrkTmpColors($cdate, $cday){
        if ($this->isHoliday($cdate, $cday)) {
            return "class='tk-gree'"; }
            if($this->isWorking($cday)){
                return "class='tk-dgra'";
            }else{
                return "class='tk-lgra'";
            }
    }

    protected function getTempBgColors($cdate, $cday){
        //	if ($this->isHoliday($cdate, $cday)) {
        //			return "class='tk-gree'"; }
        switch (DateUtils::DUFormat('l', $cday) ) {
            default:
                return "class='tk-blue'";
        }
    }

    protected function getTempFgColors($cdate, $cday){
        if (DateUtils::DUFormat('F', $cdate) !== DateUtils::DUFormat('F', $cday)){
            return '#DDDDDD';
        }else{
            return '#000000';
        }
    }

    protected function getFgColors($cdate, $cday){
        if (DateUtils::DUFormat('F', $cdate) !== DateUtils::DUFormat('F', $cday)){
            return '#DDDDDD';
        }else{
            return '#000000';
        }
    }

    public function getHoliday($cdate)
    {
        $pos = 0;
        if (in_array($cdate, $this->holiday['date']) ) {
            $pos = array_search($cdate, $this->holiday['date']);
            return $this->holiday['desc'][$pos];
        }
        return null;
    }

    public function getLeave($cdate)
    {
        $pos = 0;
        if ($this->leave)
        {
            if (in_array($cdate, $this->leave['date']) ) {
                $pos = array_search($cdate, $this->leave['date']);
                //echo $cdate .' ---- '.$pos .'test '.$this->leave['leave_type'][$pos].'<br>';
                return $this->leave['leave_type'][$pos];
            }
        }
        return null;
    }

    protected function getAttendanceColors($cdate, $cday){
        $this->otList[$cday] = $this->OvertimeList($cday);
        //echo $this->OvertimeList($cday);
        if($this->isPresent($cday) == 'P'){
            if ($this->isOnLeave($cday)) {
                return "class='tk-yell'";
            }
            return "class='tk-dgra'";
        }else{
            if ($this->isDayOff($cday) == 'Y') {
                return "class='tk-blue'";
            }
            return "class='tk-pink'";
        }
    }

    public function getNoDaysLeave($dtfrom, $dtto)
    {
        $nodays = 0;
        for($x = 0; DateUtils::AddDate($dtfrom, $x) <= $dtto; $x++)
        {
            $cdate = DateUtils::AddDate($dtfrom, $x);
            if ($this->isWorking($cdate) && (!$this->isHoliday($cdate, $cdate)) )
            {
                $nodays++;
            }
            //echo $cdate .' '.($this->isWorking($cdate) && (!$this->isHoliday($cdate, $cdate)) ) .' '. $nodays. '<br>';
        }
//       	echo $nodays;
//       	exit();
        return $nodays;
    }
    
    //--------------------------------------- SET INFO
    public function SetMonthBaseURL($url, $id) {
        $this->monthBaseURL = $url;
        $this->id = $id;
    }

    public function SetWorkTemplate($wtmp){
        unset($this->wrktmp);
        $this->wrktmp = $wtmp;
    }

    public function SetActualWork($actual){
        unset($this->actual);
        $this->actual = $actual;
    }

    protected function SetWkOnSunday($cyear){
        $x=0;
        $sdate = $cyear.'-01-01';
        $edate = intval($cyear + 1) . '-01-01';
        $sdate = DateUtils::DUFormat('Y-m-d', $sdate);
        $dow = '';
        while ($dow !== 'Saturday'):
        $ndate = DateUtils::AddDate($sdate, $x);
        $dow   = DateUtils::DUFormat('l', $ndate);
        $this->weekno['day'][]  = $x + 1;
        $this->weekno['date'][] = $ndate ;
        $this->weekno['week'][] = 1;
        $x++;
        endwhile;
        $wk = 2;
        $y  = 0;
        while(DateUtils::DUFormat('Y-m-d', $edate) !== DateUtils::DUFormat('Y-m-d', $ndate)):
        $ndate = DateUtils::AddDate($sdate, $x);
        if ($y > 6) {
            $wk = $wk + 1;
            $y = 0;
        }

        $this->weekno['day'][]  = $x + 1;
        $this->weekno['date'][] = $ndate ;
        $this->weekno['week'][] = $wk;
        $y++;
        $x++;
        endwhile;
    }

    public function SetHolidays($dhol, $nhol, $hid=array()){
        unset($this->holiday);
        $this->holiday['date'] = $dhol;
        $this->holiday['desc'] = $nhol;
        $this->holiday['id']   = $hid;
    }

    public function SetLeave($leaves){
        if (!$leaves)
        {
            return;
        }
        $leav= array();
        foreach($leaves['from'] as $kl=>$vl)
        {
            $sdt = $leaves['from'][$kl];
            $edt = $leaves['to'][$kl];
            $y   = DateUtils::DateDiff("d", $sdt, $edt) + 1;
            for ($x=0; $x < $y; $x++)
            {
                $cdate = DateUtils::AddDate($sdt, $x);
                $leav['date'][] = $cdate;
                $leav['leave_type'][] = $leaves['leave_type'][$kl];
                $leav['half_day'][]   = $leaves['half_day'][$kl];
                //                echo $x.'  '.$leav['date'][$x].'  '.$leav['leave_type'][$kl].'  '.$leav['half_day'][$kl].'<br>';
            }
        }
        unset($this->leave);
        $this->leave = $leav;
//                var_dump($this->leave);
//                exit();
    }

    public function setUpdateWrktmp($mtmp, $cdate){
        $wkno = 0;
        $pos  = 0;
        $sdt  = '';
        $wkno = $this->getWeekNoByDate($cdate);
        $sdt  = $this->getDateByWeekNo($wkno);
        $sel  = (DateUtils::DUFormat('m', $cdate) == 1)? DateUtils::DUFormat('w', $cdate) : 0;
        for($x=$sel; $x<count($mtmp); $x++){
            $pos = array_search(DateUtils::AddDate($sdt, $x-$sel),$this->wrktmp['date']);
            $this->wrktmp['no_hours'][$pos] = $mtmp[$x];
            //echo  $x.' --- '.$mtmp[$x].' **'.$this->wrktmp['date'][$pos].': '.$this->wrktmp['no_hours'][$pos].'<br>';
        }
    }

    protected function OvertimeList($cday){
        $pos = 0;
        if (in_array($cday, $this->actual['date']) ) {
            $pos = array_search($cday, $this->actual['date']);
            return ($this->actual['overtime'][$pos] > 0)? $this->actual['overtime'][$pos] : null;  
        }
        return null;
    }

    public function GetOtList()
    {
        var_dump ($this->otList);
        return $this->otList;
    }
    
    public function DisplayActualWorkCalendar($curdt){
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $hrs = implode("," , $this->actual['no_hours']);

        //----------------------- get holiday
        foreach($this->actual['date'] as $kr=>$vr)
        {
            if ($this->actual['holiday'][$kr])
            {
                $this->holiday['date'][] = $vr; 
                $this->holiday['desc'][]   = $this->actual['holiday'][$kr];
            }
        }
///        var_export($this->holiday);
//        exit();
        $headerTitle = DateUtils::DUFormat('F Y', $cdate);
        $cdt = DateUtils::DUFormat('Y-m-01', $cdate);
        $headerLink = ($this->monthBaseURL)? link_to($headerTitle, $this->monthBaseURL, array('query_string' => 'id='.$this->id.'&cdt=' . $cdt  )) : $headerTitle;
        $cal =  "
        <table width='195' border='0' cellpadding='1' cellspacing='1'>
          <tr>

            <td height='20' colspan='8' class='tk-bgimgmon'><div align='center'>            
            <strong>".$headerLink."</strong></div></td>
          </tr>
          <tr>
            <td width='25' height='20' class='tk-bgimgday'><div align='center'><span class='tk-style1'><span class='tk-style2'><span class='tk-style4'><span class='tk-style6'><span class='tk-style6'></span></span></span></span></span> &nbsp;</div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>S</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>M</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>T</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>W</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>T</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>F</div>
            </div></td>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>S</div>
            </div></td>
          </tr>";

        $wk = $this->getweeks($cdate);
        $z=0;
        $cellinfo = array();
        $ydt = DateUtils::AddDate($cdate, -1);

        for ($x=0; $x<$wk; $x++) {
            //<tr><td width='50' height='44' bgcolor='#000033'><div align='center' class='tk-style32'>".$zwk++."</div></td>
            $cal = $cal . "
            <tr>
            <td width='25' height='20' class='tk-bgimgday'><div align='center' class='tk-style7'>
              <div align='center'>W".$this->getWeekNoByDate(DateUtils::AddDate($ydt, 1))."</div>
            </div></td>
            ";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }

                //$cellinfo = $this->processdetail($ydt, $dtrs);
                //$mess = $mess. $cellinfo['mess'] . '<br>';
                 
                $cal = $cal . "
            <td width='25' height='20' ".$this->getBgColors($cdate, $ydt)." ><div align='center' color='ff00ff'>
              <div align='center'><font color='".$this->getFgColors($cdate,  $ydt)."'>".$dt."</font></div>
            </div></td>
            ";

                $z= ($ydt >= $cdate)? $z+1 : $z ;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
            
        $cal = $cal .  "</table>";
        return $cal;
    }

    public function isLeaveHalfDay($cdate)
    {
        $pos = 0;
//        var_dump($this->leave);
//        exit();
        if ($this->leave)
        {
            if (in_array($cdate, $this->leave['date']) ) {
                $pos = array_search($cdate, $this->leave['date']);
                if ($this->leave['leave_type'][$pos] !== 'Leave without Pay')
                {
                //echo $cdate .' ---- '.$pos .'test '.$this->leave['leave_type'][$pos].' : '.$this->leave['half_day'][$pos].'<br>';
                return $this->leave['half_day'][$pos];
                }
            }
        }
        return null;
    }


    public function LeaveApplyCalendar($curdt, $empNo=null, $leaveID){
    	//var_dump($sf_params->get('leaveID'));
    	//var_dump($leaveID);
    	if (!$empNo) $empNo = 'S7602056F';
    	
    	$dtr = TkDtrsummaryPeer::GetDatabyEmployeeNoDateRange($empNo, DateUtils::DUFormat('Y-m-01', $curdt), DateUtils::DUFormat('Y-m-t', $curdt));
    	$dailySummary = array();
    	$isHoliday = '';
    	$isOnLeave = '';
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        if ($empNo):
        	$dtr = TkDtrsummaryPeer::GetActualDatabyEmployeeNoDateRange($empNo, DateUtils::DUFormat('Y-m-01', $curdt), DateUtils::DUFormat('Y-m-t', $curdt));
        	$dailySummary = $this->ConvertDtrtoArray($dtr);
        	//$this->setLeave(HrEmployeeLeavePeer::GetAllDateLeaveType($empNo));
        endif;
        // echo link_to('Print Leave', 'leave/leaveApplyPrint?cdate=' . $sf_params->get('cmonth'.$leaveID).'&empno='.$sf_params->get('employee_no'.$leaveID),'target=_BLANK'); 
        // var_dump($this->leave);
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $monthText = DateUtils::DUFormat('F', $cdate);
        //.$this->setsdate($cdate, 'F')."  ".$this->setsdate($cdate, 'Y').
        $cal =  "<table width='400px' border='0' cellpadding='2' cellspacing='2' bgcolor='#DED59A'>
        		 <tr><td>
	<table width='100%' border='0' cellpadding='2' cellspacing='2' bordercolor='#DED59A'>
	  <tr>
	    <td  height='60' colspan='8' align='center' valign='middle' class='leaveCalendarMonthText'>"
	      .image_tag('/images/hr/calendar/'.strtolower($monthText).'.png','height="30" width="60"').' '
	      .strtoupper($monthText)."  ".DateUtils::DUFormat('Y', $cdate) 
	      .($empNo <> 'S7602056F' ? ' | '. link_to('Print Leave','leave/leaveApplyPrint?cdate=' . $cdate.'&empNo='. $empNo, 'target=_BLANK') : '') 
	      ."</td>
	  </tr>
	  <tr>
	    
	     <td height='60' width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>SUN<br>".image_tag('hr/calendar/sunday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>MON<br>".image_tag('hr/calendar/monday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>TUE<br>".image_tag('hr/calendar/tuesday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>WED<br>".image_tag('hr/calendar/wednesday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>THU<br>".image_tag('hr/calendar/thursday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>FRI<br>".image_tag('hr/calendar/friday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>SAT<br>".image_tag('hr/calendar/saturday.png','height="24" width="42"')."</div></td>
	  </tr>
	  ";
        $wk = $this->getweekNumber($cdate);
//        var_dump($cdate);
//        var_dump($wk);
        
        $z=0;
        $ydt = DateUtils::AddDate($cdate, -1);
		$inMonth = false;
		$detail = '';
		$bgClr = '';
		$sClr = '';
        for ($x=0; $x<$wk; $x++) {
            $cal = $cal . "
	    	<tr>
	    	";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                	
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }
				$detail  = $this->GetDailySummary($ydt, $dailySummary);
				$bgClr   = ((trim($detail['absent'][0]) == 'A') || $detail['late'][0] <> 0 ) ? "tk-style33" : "tk-style33";
				$sClr    = ((trim($detail['absent'][0]) == 'A') || $detail['late'][0] <> 0 ) ? "tk-style35" : "tk-style35";
				$inMonth = ($this->getTempFgColors($cdate,  $ydt) == '#DDDDDD' ? FALSE : TRUE) ; 
				
				$dates = "dates".$leaveID;
				$jsVar = "'dates=' + \$F('".$dates."') "   
						."+ '&cdate=" . $ydt ."'" 
						."+ '&leaveID=" . $leaveID ."'" 
		;
								
				$ajaxLeaveApplied = array(
						'url'		=>'leave/ajaxDateApplied',
						'with'		=> $jsVar,
			//			'update' 	=> 'DIVDatesApplied',
			            'update' 	=> 'calendar_'.$ydt.'_'.$leaveID,
			            'script'    => true,
			            'loading'   => 'stop_remote_pager();',
			            'before'   	=> 'showLoader();',
			            'complete'  => 'hideLoader();formatFormStyle();',
			            'type'      => 'synchronous',			
				); 
				
				$dateButton = link_to ($dt, 'leave/ajaxDateApplied' ,  array('onclick'=>remote_function($ajaxLeaveApplied) . ';return false;') );
				//$dateButton = link_to ($dt, 'leave/ajaxDateCanceled' ,  array('onclick'=>remote_function($ajaxLeaveCancel) . ';return false;') );
				$labels = '';
				$isHoliday = $this->getHoliday($ydt) ?  substr($this->getHoliday($ydt),0,7) : '';
				if ($empNo):
					$isOnLeave =  substr(HrEmployeeLeavePeer::GetAppliedLeave($empNo, $ydt),0,7);
				endif;
				$labels = $isHoliday? $isHoliday: $isOnLeave;
				
				//not clickable if applied or holiday
				if ($labels) $dateButton = $dt;
				if (DateUtils::DUFormat('m', $ydt) <>  DateUtils::DUFormat('m', $curdt)) :
					 $dateButton = '';
					 $labels = '';
				endif;
				
                $cal = $cal . "
			    <td  class='".$bgClr."'>
			    <div id='DIVDatePos'>
			    	<div id='calendar_".$ydt.'_'.$leaveID."'>
				    <ul id='navlist'>
					    <li>
					       ". $dateButton."<br><span class='calendarHolidayText'><center>".$labels."</center></span>
					    </li>
				    </ul>
				    </div>
				    
			    </div>
			    
	      		</td>
	        ";
            $z= $z+1;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
        	
        $cal = $cal .  "</table>      		</td></tr>
      		</table>
        ";
        return $cal;
    }



    public function LeaveDisplayCalendar($curdt, $empNo=null, $leaveID){
    	//var_dump($sf_params->get('leaveID'));
    	//var_dump($leaveID);
    	if (!$empNo) $empNo = 'S7602056F';
    	
    	$dtr = TkDtrsummaryPeer::GetDatabyEmployeeNoDateRange($empNo, DateUtils::DUFormat('Y-m-01', $curdt), DateUtils::DUFormat('Y-m-t', $curdt));
    	$dailySummary = array();
    	$isHoliday = '';
    	$isOnLeave = '';
        if (isset($curdt)) {
            $cdate = $curdt;
        }else{
            $cdate = date('Y-m-d');
        }
        if ($empNo):
        	$dtr = TkDtrsummaryPeer::GetActualDatabyEmployeeNoDateRange($empNo, DateUtils::DUFormat('Y-m-01', $curdt), DateUtils::DUFormat('Y-m-t', $curdt));
        	$dailySummary = $this->ConvertDtrtoArray($dtr);
        	//$empDetail = HrEmployeePeer::GetDatabyEmployeeNo($empNo);
        	//$this->setLeave(HrEmployeeLeavePeer::GetAllDateLeaveType($empNo));
        endif;
        //var_dump($this->leave);
        $dow  = date("l", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $spos = date("w", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
        $monthText = DateUtils::DUFormat('F', $cdate);
        //.$this->setsdate($cdate, 'F')."  ".$this->setsdate($cdate, 'Y').
        $cal =  "<table width='400px' border='0' cellpadding='2' cellspacing='2' bgcolor='#DED59A'>
        		 <tr><td>
	<table width='100%' border='1' cellpadding='0' cellspacing='0' bordercolor='#DED59A'>

	  <tr>
	    <td  height='60' colspan='8' align='center' valign='middle' class='leaveCalendarMonthText'>"
	      .image_tag('/images/hr/calendar/'.strtolower($monthText).'.png','height="30" width="60"').' '
	      .strtoupper($monthText)."  ".DateUtils::DUFormat('Y', $cdate)."</td>
	  </tr>
	  <tr>
	    
	     <td height='60' width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>SUN<br>".image_tag('hr/calendar/sunday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>MON<br>".image_tag('hr/calendar/monday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>TUE<br>".image_tag('hr/calendar/tuesday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>WED<br>".image_tag('hr/calendar/wednesday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>THU<br>".image_tag('hr/calendar/thursday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>FRI<br>".image_tag('hr/calendar/friday.png','height="24" width="42"')."</div></td>
	     <td width='14.2%' class='tk-style31'><div align='center' class='tk-style31'>SAT<br>".image_tag('hr/calendar/saturday.png','height="24" width="42"')."</div></td>
	  </tr>
	  ";
        $wk = $this->getweekNumber($cdate);
//        var_dump($cdate);
//        var_dump($wk);
        
        $z=0;
        $ydt = DateUtils::AddDate($cdate, -1);
		$inMonth = false;
		$detail = '';
		$bgClr = '';
		$sClr = '';
        for ($x=0; $x<$wk; $x++) {
            $cal = $cal . "
	    	<tr>
	    	";
            for ($y=1; $y<=7; $y++) {
                $dt = ($x*7+$y-$spos);
                $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2), $dt, substr($cdate, 0, 4)));
                $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                	
                //---------------- next month date
                if ($dt > date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)))) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
                    $dt = $dt - $ndt;
                }
                //---------------- previous month date
                if ($dt < 1) {
                    $ndt   = date("t", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $mname = date("M", mktime(1, 1, 1, substr($cdate, 5, 2)-1, 1, substr($cdate, 0, 4)));
                    $ydt   = date("Y-m-d", mktime(1, 1, 1, substr($cdate, 5, 2), ($dt), substr($cdate, 0, 4)));
                    $dt = $dt + $ndt;
                }
				$detail  = $this->GetDailySummary($ydt, $dailySummary);
				$bgClr   = ((trim($detail['absent'][0]) == 'A') || $detail['late'][0] <> 0 ) ? "tk-style33" : "tk-style33";
				$sClr    = ((trim($detail['absent'][0]) == 'A') || $detail['late'][0] <> 0 ) ? "tk-style35" : "tk-style35";
				$inMonth = ($this->getTempFgColors($cdate,  $ydt) == '#DDDDDD' ? FALSE : TRUE) ; 
				
				$dates = "dates".$leaveID;
				$jsVar = "'dates=' + \$F('".$dates."') "   
						."+ '&cdate=" . $ydt ."'" 
						."+ '&leaveID=" . $leaveID ."'" 
		;
								
				$ajaxLeaveApplied = array(
						'url'		=>'leave/ajaxDateApplied',
						'with'		=> $jsVar,
			//			'update' 	=> 'DIVDatesApplied',
			            'update' 	=> 'calendar_'.$ydt.'_'.$leaveID,
			            'script'    => true,
			            'loading'   => 'stop_remote_pager();',
			            'before'   	=> 'showLoader();',
			            'complete'  => 'hideLoader();formatFormStyle();',
			            'type'      => 'synchronous',			
				); 
				
				$dateButton = $dt;
				//$dateButton = link_to ($dt, 'leave/ajaxDateCanceled' ,  array('onclick'=>remote_function($ajaxLeaveCancel) . ';return false;') );
				$labels = '';
				$isHoliday = $this->getHoliday($ydt) ?  substr($this->getHoliday($ydt),0,7) : '';
				if ($empNo):
					$isOnLeave =  substr(HrEmployeeLeavePeer::GetAppliedLeave($empNo, $ydt),0,7);
				endif;
				$labels = $isHoliday? $isHoliday: $isOnLeave;
				
				//not clickable if applied or holiday
				if ($labels) $dateButton = $dt;
				if (DateUtils::DUFormat('m', $ydt) <>  DateUtils::DUFormat('m', $curdt)) :
					 $dateButton = '';
					 $labels = '';
				endif;
				
                $cal = $cal . "
			    <td height='50px' width='40px' class='".$bgClr."'>
			    	<div id='calendar_".$ydt.'_'.$leaveID."'>
					    <div class='tile half'>
					       ". $dateButton."<br>".$labels."
					    </div>
				    </div>
			    
	      		</td>
	        ";
            $z= $z+1;
            }
            $cal = $cal . "</tr>";
        } //---------------- end for
        	
        $cal = $cal .  "</table>      		</td></tr>
      		</table>
        ";
        return $cal;
    }













} //class ends here