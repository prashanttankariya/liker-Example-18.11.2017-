<?php
	
		include 'db.php';
		

			

			function time_ago($timestamp)
			{

				$time_ago = strtotime($timestamp);
				$current_time = time();
				// differtime
				$time_difference = $current_time - $time_ago;
				//echo $current_time."<br />";

				// fetch total seconds from both time stamps
				$seconds = $time_difference;
				//echo $seconds;
				// set minutes
				$minutes = round($time_difference /60); // value 60 is seconds

				// set hour
				$hours   = round($time_difference / 3600); // value 3600 is 60 minutes * 60 Secs

				// set days
				$days    = round($time_difference / 86400); // 86400 = 24 * 60 *60;

				//set weeks
				$weeks   = round($time_difference / 604800); // 7*24*60*60;


				// set months 
				$months  = round($time_difference / 2419200); // ((365+365+365+365+366)/5 /12 )*12*60

				$years   = round($time_difference / 29030400); // 

/// now in time ago method ------------------------------------------

				if ($seconds <=60) {
					
					return "just now";
				}
				elseif ($minutes <=60) {
					
					if ($minutes == 1) {
						
						return "One Minute Ago";
					}
					else{
						return "$minutes Ago";
					}
				}
				elseif ($hours <=24) {
					
					if ($hours == 1) {
						
						return "an hour ago" ;
					}
					else{

						return "$hours hours ago" ;
					}
				}
				elseif ($days <=7) {
					
					if ($days == 1) {
						
						return "yesterday" ;
					}
					else{

						return "$days Days ago" ;
					}
				}

				elseif ($weeks <=4.3) {// 4.3 = 52/12
					
					if ($weeks == 1) {
						
						return "one Week ago" ;
					}
					else{

						return "$weeks Weeks ago" ;
					}
				}

				elseif ($months <=12) {
					
					if ($months == 1) {
						
						return "a month Ago" ;
					}
					else{

						return "$months Months ago" ;
					}
				}

				else{
					
					if ($years == 1) {
						
						return "one year ago" ;
					}
					else{

						return "$years Days ago" ;
					}
				}

			}// time ago function ends
			
		
		// output the function

		

///////////////////////////////////////////////////////////
		
	

			echo time_ago($tmp);



?>