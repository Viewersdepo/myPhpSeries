<?php
	$path='/dir0/dir1/myfile.php';
	$file='file1.txt';

	//Return filename
	//echo basename($path);

	//Return filename without extension
	//echo basename($path, '.php');

	//Return the dir name from path
	//echo dirname($path);

	//check if file exists
	//echo file_exists($file);

	//Get abs path
	//echo realpath($file);

	// Check to see if file 
	//echo is_file($file);

	//check if file is writable
	//echo is_writable($file);

	//Check if file is readable
	//echo is_readable($file);

	//Get file size
	//echo filesize($file);

	//Create a directory
	//mkdir('testing');

	//Remove a directory if empty
	//rmdir('testing');

	//copy file
	//echo copy('file1.txt', 'file2.txt');

	//rename a file
	//rename('file2.txt', 'myfile.txt');

	//Delete file
	//unlink('myfile.txt');

	//write from file to string
	//echo file_get_contents($file);

	//write/replace string to the file 
	//echo file_put_contents($file, 'Goodbye you');

	//add strings to a file
	/*$current= file_get_contents($file);

	$current.=' Goodbye World';

	file_put_contents($file, $current);
	

	//open file for reading
	$handle= fopen($file, 'r');
	$data=fread($handle, filesize($file));
	echo $data;
	*/

	//Open file for writing
	$handle=fopen('file2.txt', 'w');
	$txt= "John Doe\n";
	fwrite($handle, $txt);
	$txt="Steve Smith \n";
	fwrite($handle, $txt);
	fclose($handle);




?>