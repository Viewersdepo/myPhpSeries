<?php 
	#loops

	/*types of loops
for
while
do...while
foreach
	*/

#For Loop
#@params-init, condition, inc
/*for ($i=0; $i <= 10; $i++) { 
	echo 'Number '.$i;
	echo '<br>';
}

#While loop
# @parameters-condition
$i=0;
while($i<10){
	echo $i;
	echo '<br>';
	$i++;
}
*/


#Do...while
# @params-condition

$i=0;

do{
	echo $i;
	echo '<br>';
	$i++;
}

while ($i<10); 
	

#foreach
// $people = array('Brad', 'Jose', 'William' );
// foreach($people as $plu){
// 	echo $plu;
// 	echo '<br>';
//}

$people = array('Brad' => 'brad@gmail.com', 'Jose' =>'jose@gmail.com', 'William'=>'william@gmail.com' );
foreach($people as $plu => $email){
	echo $plu.': '.$email;
	echo '<br>';
	}