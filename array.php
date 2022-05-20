<?php
#array- variable that holds multiple values
/*
-indexed
-Associative
-Multi-dimensional
*/

//Indexed
$people = array('Kelvin', 'Jeremy', 'Sarah');
echo $people[1];

$ids=array(23,55,12);
echo $ids[1];

$cars=['honda', 'toyota', 'ford'];
$cars[]='chevy';
echo count($cars);
echo $cars[3];


print_r($cars);

var_dump($cars);


//Associate arrays
$people=array('Brad'=>35, 'Jose'=>32, 'William'=>37);
echo $people['Brad'];
$people['Jill']=42;
echo $people['Jill'];
$ids =[22=>'Brad', 32=>'Jose', 44=>'William'];
echo $ids[22];

var_dump($people);
print_r($people);


//Multi-dimensional
$cars=array(

array('honda', 20, 10),
array('toyota', 30, 60),
array('ford', 50, 30)
);
echo $cars[2][1];