<?php  
	#CONDITIONALS and COMPARISON
/*
	==
	===
	>
	<
	<=
	>=
	!=
	!==

*/

 // $num=42;
 // if ($num==5) {
 // 	echo '5 passed';
 // }elseif ($num>5) {
 // 	echo 'congrats';
 // }
 // else{
 // 	echo 'did not pass';
 // }

	#nesting if statements

	$num=7;
	//  if ($num>4) {
	// 	if ($num<10) {
	// // 		echo "$num passed";
	// 	}
	// }
/*
	LOGICAl OPERATORS
	and &&
	or ||
	xor 
	
*/

if ($num>4 OR $num<10) {
	echo "$num passed <br>";
}



//switches
 $favColor='pink';

 switch($favColor){
 	case 'red';
		echo 'Your favorite color is red';
 		break;

 	case 'blue';
 		echo 'Your favorite color is blue';
 		break;

 	case 'green';
 		echo 'Your favorite color is green';
 		break;

 	default:
		echo 'Your favorite color is something else';
 		break;



 }

 ?>


