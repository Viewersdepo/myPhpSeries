<?php 
	$loggedin= false;
	$arr= [1, 2, 3, 4, 5];
	/*if ($loggedin) {
		echo 'You are logged in';
	} else{
		echo 'You are NOT logged in';
	}
	*/

	//echo ($loggedin) ? 'You are logged in' : 'You are NOT logged in';

	$isRegistered= ($loggedin==true)? true: false;
	//echo $isRegistered;

	$age=7;
	$score=12;

	//echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'): ($age > 10 ?'Horrible':'Average') );



 ?>

 <div>
 	<?php if($loggedin){ ?>
 		<h1>Welcome User</h1>
 	<?php } else { ?>
 		<h1>Welcome Guest</h1>
 	<?php } ?>
 </div>


 <div>
 	<?php if($loggedin): ?>
 		<h1>Welcome User</h1>
 	<?php else: ?>
 		<h1>Welcome Guest</h1>
 	<?php endif;  ?>
 </div>

 <div>
 	<?php foreach($arr as $val):  ?>
 		<?php echo $val; ?>
 	<?php endforeach; ?>
 </div>


 <div>
 	<?php for($i=0; $i<10; $i++): ?>
 		<li><?php echo $i; ?></li>
 	<?php endfor; ?>
 </div>