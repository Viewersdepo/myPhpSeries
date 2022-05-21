<?php  
	#substr()
	#Returns a portion of a string
	//$output = substr('Hello', 1, 3);
	//echo $output;

	//$output = substr('Hello', -2);
	//echo $output;
	
	#strlen()
	#Returns the length of the string
	//$output = strlen('Hello World');
	//echo $output;
	
	#strpos()
	# Finds the position of the first occurence of a sub string
	//$output = strpos('Hello World', 'o');
	 //echo $output;

	# strrpos()
	# Finds the position of the last occurence of a sub string
	
	//$output= strrpos('Hello World', 'o');

	//echo $output;

	# trim()
	# strips whitespace
	
	//$text= 'Hello world          ';
	//var_dump($text);

	//$trimmed = trim($text);
	//var_dump($trimmed);

	# strtoupper
	# Makes everything uppercase
	
	//$output= strtoupper('Hello World');
	//echo $output;
	
	# strtolower
	# Makes everything lowercase

	//$output= strtolower('Hello World');
	//echo $output;

	# ucwords
	# Capitalize every word
	//$output= ucwords('hello world');
	//echo $output;
	
	# str_replace()
	# Replace all occurences of a search string with a replacement
	
	//$text= 'Hello World';
	//$output=str_replace('World', 'Everyone', $text);
	//echo $output;

	# is_string
 	# if string
	
	//$val ='22';
	//$output=is_string($val);
	//`1echo $output;

	/*$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0' );
	foreach ($values as $value) {
		if (is_string($value)) {
			echo "{$value} is a string<br>";
		}
	}*/

	# gzcompress()
	# compress a string

	$string = "bhfiuWGBUWG JEFHIUGFIUEGH WEHBUWGHUW WUHWIUHIU hfieuhr eurhiuehiu ueriehiuerh euiurihiu ruiwruiuw uru8iuiw  uriu8ywiu weuiwuwruw uuiweiururuhu uiewui weuiwuy wuuuwiw ueriwuruwy wyuiwyuiw uyuywy u4y5uiwr8uuiw wuy5i5w85r wu5iw  58uy uw5yiw uw8guw8 u4w8 845 87u528 uuou3484u 28u8 8 u8 8 48u84 8u2 8u5j8 85u yu2588wu 248u4w83u84wu 89u4w55nu545  54u2iu82j8 5u2iu582 84 28u832u 8wu482u2 u4iu2u uuiu28ui w4uui2u2 u4wi2i ui2 yu2uy2  2uy2 iu3 u yu3 uyu2yu uy38yu uyuwyuyw34uy4uw yu3wyuy34wuy 34uyuiyuiyq u3yuyu2 uyuyu2 ";

		$compressed= gzcompress($string);
		//echo $compressed;

		# gzuncompress
		# to uncompress

		$original= gzuncompress($compressed);
		echo $original;
?>