<?php 
/*
camel case- myFunction()
Lower case - my_function()
Pascal case -MyFunction()
*/

//Create a simple function
// function simpleFunction(){
	// echo 'Hello World <br>';
//}
//Run simple function
// simpleFunction();


// function sayHello($name){
// 	echo "Hello $name<br>";
// }

// sayHello('Joe');
// sayHello('Amaka');

// sayHello('Gold');
//return value
function addNumber($num1, $num2){
	return $num1+$num2;
}

//echo addNumber(2,4);


//by reference
$myNum=10;
function addFive($num){
	$num += 5;
}
function addTen(&$num){
	$num+=10;
}
addFive($myNum);
echo "value: $myNum <br>";


addTen($myNum);

echo "Value: $myNum";

  ?>