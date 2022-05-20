<?php

 //dates
//  echo date('d '); //day
//  echo date('m '); //month
//  echo date('Y '); //year
//  echo date('l <br>'); //day of the week
//  echo date('y/m/d ');
//  echo date('h ');//hour
//  echo date('i ');//minute
//  echo date('s'); //seconds
//  echo date('a'); //AM or PM

  //set time zone
// date_default_timezone_set('America/New_York');
//  echo date('y:m:d:l:h:i:sa');

/*
	unix timestamp is a long integer containing the number of seconds between the Unix Epoch(January 1 1970 00:00:00 GMT) and the time specified

*/

// $timeStamp=mktime(10, 14,54, 9, 10, 1981);
 //echo $timeStamp;

 //echo date('m/d/Y h:i:sa', $timeStamp);

 $timeStamp2= strtotime('7:00pm march 22 2016');
 $timeStamp3=strtotime('tomorrow');
 $timeStamp4=strtotime('next Sunday');
 $timeStamp5=strtotime('+2 Days');

 //echo $timeStamp2;
 echo date('l/d/m/Y h:i:sa', $timeStamp5);
 
  ?>