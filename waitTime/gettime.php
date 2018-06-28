<?php
$day=date("N");
$time=date("g:i a");
$date=date("Y-m-d");
$now=strtotime(date('H:i:s'));

//alex
$rightnow=date('H:i:s');
$mydate = date("Y-m-d H:i:s", $now);
$morningOpen = 800;
$morningClose = 1130;
$afternoonOpen = 1330;
$afternoonClose = 1530;
$theTime = date('Gi');
$specialday = date("md");

		// manipulations
				// $day = 4;
				// $theTime = "1229";
				// $time = "12:29 pm";
				// $now = strtotime(date("12:29:00"));
				// $date = "2018-06-28";
				// $specialday = "0628";


//Get the URL for the lobby data
$url='https://ufl.secure.force.com/lobbymanagement/services/apexrest/UFLobbyStats?lobbyName=0014100001dK0QX';
$file=file_get_contents($url);

//what prints if server doesn't give data
if (is_null($file) OR ($file=='')){print '<center><p><strong>AAC Lobby Wait Time</strong><br />There\'s a problem acquiring<br />the wait time.</center>
	';die;}

	//clean it up. json_decode didn't work
	$strip=stripslashes($file);
	$dubquotes=str_replace('"','',$strip);
	$bracket=str_replace('{','',$dubquotes);
		$values=str_replace('}','',$bracket);

		//break open the fields
		$new=explode(",",$values);
		//Get the number of students in the queue
		$queue=explode(":",$new[0]);
		$students=$queue[1];

		//what's the current wait time in minutes
		$wait=explode(":",$new[1]);
		$waittime=$wait[1];

		$h = floor($waittime / 60).' hours ';
		if ($h=='0 hours '){$h='';}
		if ($h=='1 hours '){$h='1 hour ';}
		if ($h>'2 hours '){$h='2 hours ';}
		if ($h>'3 hours '){$h='3 hours ';}
		$m = $waittime % 60;
		//end wait and minutes->hours conversion

		//Is the lobby closed? If so: true; if open: false
		$closed=explode(":",$new[2]);
		$isclosed=$closed[1];

		//I need to know what status, errorcode, and message are
		$stat=explode(":",$new[3]);$status=$stat[1];
		//i don't know what the error codes are
		$ecode=explode(":",$new[4]);$error=$ecode[1];
		//Get the Message from
		$mess=explode(":",$new[5]);$message=$mess[1];

		//"LOGIC" follows

		// OPEN MESSAGE between 8 and 11:30 and from 1:30-4:30
		if ((($now > strtotime(date('08:00:00'))) AND ($now < strtotime(date('11:30:00')))) OR (($now > strtotime(date('13:30:00'))) AND ($now < strtotime(date('16:30:00'))))){
			if ($students==0){$display='<strong>No students are waiting.</strong><br />Our walk-in hours are 8-11:30 a.m.<br />and 1:30-4:30 p.m.<br />Current time: '.$time;}
			if ($students==1){$display='<strong>'.$students.' student</strong> has been waiting<br /><strong>'.$h.$m.' minutes</strong><br />as of '.$time;}
			if ($students > 1){$display='<strong>'.$students.' students</strong> are waiting to see an advisor.<br />
			The next student in line has been waiting<br /><strong>'.$h.$m.' minutes</strong><br />
			as of '.$time.'.</p>';}
			$lobbyStatus = "open";
			$preholiday = "none";
			$resumeDay = "";
		}

		//CLOSED to walkins before 8 and after 4:30 or between 11:30 and 1:30
		if (
		(($now <= strtotime(date('08:00:00'))) OR ($now >= strtotime(date('16:30:00'))))
		OR
		(($now >= strtotime(date('11:30:00'))) AND ($now <= strtotime(date('13:30:00'))))
		)
		{
			$morningHours = "Morning hours: 8 a.m. to 11:30 a.m.";
			$display='The Lobby is currently closed to walkins.<br /><br />Hour are between 8 a.m. to 11:30 a.m. and 1:30 - 4:30 p.m., M-F. ';
			$lobbyStatus = "closed";
			$preholiday = "none";
			$resumeDay = "";
		}

		//IF LOBBY IS CLOSED MANUALLY
		if ($isclosed=='true'){$display='The lobby is no longer taking new advising<br />sessions. Please try back another time.';}

		//CLOSED if Sunday or Saturday
		if (($day==6) OR ($day==7)){$display='The Lobby is closed on weekends.';}

		$preholidays = array(
			"0703" => array("prefourth", 2),
			"0831" => array("prelabor", 5),
			"0901" => array("prelabor", 6),
			"0902" => array("prelabor", 7),
			"1101" => array("prehomecoming", 4),
			"1109" => array("preveterans", 5),
			"1110" => array("preveterans", 6),
			"1111" => array("preveterans", 7),
			"1121" => array("prethanksgiving", 3),
			"1224" => array("prechristmas", 1),
			"1231" => array("prenewyears", 1)
		);

		foreach ($preholidays as $key => $preholidayName) {

			if ($specialday == $key) {
				$preholiday = "preholiday";

				$dayNumber = date("N");

				if ($preholidayName[1] === 2) {
					$resumeDay = "Thursday";
				}

				if ($preholidayName[1] === 3) {
					$resumeDay = "Friday";
				}

				if ($preholidayName[1] === 4) {
					$resumeDay = "Monday";
				}

				if ($preholidayName[1] >= 5) {
					$resumeDay = "Tuesday";
				}

				if ($preholidayName[1] === 1) {
					$resumeDay = "Tuesday, Jan. 2";
				}



			} //determine that it is a special day
		}

		$holidays = array(
			"0704" => "julyfourth",                    /* 3 */
			"0903" => "laborday",      /* 1 */
			"1102" => "homecoming",                                   /* 5 */
			"1112" => "veteransday",   /* 1 */
		  "1122" => "thanksgiving",                         /* 4 */
		  "1123" => "thanksgiving",                                /* 5 */
			"1224" => "christmas",     /* 1 */
			"1225" => "christmas",             /* 2 */
			"1226" => "christmas",     				        /* 3 */
			"1227" => "christmas",            							 /* 4 */
			"1228" => "christmas",             											/* 5 */
			"0101" => "newyears"             /* 2 */
		);

		foreach ($holidays as $key => $value) {
			if ($specialday == $key) {
				$lobbyStatus = "holiday";
				return $value;
			}
		}

		//print the title and the message
		//print '<center><p><strong>AAC Lobby Wait Time</strong><br /><br />'.$display.'</p></center>';
		?>
