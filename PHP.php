<?php
	var_dump($x);  
	//returns the data type and value of variables.

	strlen("Hello world!"); 
	//returns the length of a string, in characters.

	strpos("Hello world!","world"); 
	//search for a specified character or text within a string.
	//If no match is found, it will return FALSE.
	//The position of the string "world" in the example above is 6. 
	//The reason that it is 6 (and not 7),is that the first character position in the string is 0, and not 1.

	define("GREETING", "Welcome to W3Schools.com!", true);
	//it takes three parameters: The first parameter defines the name of the constant, 
	//the second parameter defines the value of the constant, 
	//and the optional third parameter specifies whether the constant name should be case-insensitive. 
	//Default is false.

	switch (n)
	{
		case label1:
		  code to be executed if n=label1;
		  break;
		case label2:
		  code to be executed if n=label2;
		  break;
		case label3:
		  code to be executed if n=label3;
		  break;
		...
		default:
		  code to be executed if n is different from all labels;
	}

	foreach ($array as $value)
	{
		code to be executed;
	}

	$cars=array("Volvo","BMW","Toyota");
	echo count($cars); 
	//used to return the length (the number of elements) of an array.

	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	sort($age) //- sort arrays in ascending order
	rsort($age) //- sort arrays in descending order
	asort($age) //- sort associative arrays in ascending order, according to the value
	ksort($age) //- sort associative arrays in ascending order, according to the key
	arsort($age) //- sort associative arrays in descending order, according to the value
	krsort($age) //- sort associative arrays in descending order, according to the key

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	//The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
	//The htmlspecialchars() function converts special characters to HTML entities.
	//This means that it will replace HTML characters like < and > with &lt; and &gt;. 
	//This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

	
	echo date("Y/m/d"); 	2009/05/11
	echo date("Y.m.d");	 	2009.05.11
	echo date("Y-m-d");		2009-05-11

	mktime(hour,minute,second,month,day,year,is_dst)
	//To go one day in the future we simply add one to the day argument of mktime():
	$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
	echo "Tomorrow is ".date("Y/m/d", $tomorrow);

	include '...'   //include will only produce a warning (E_WARNING) and the script will continue
	require '...'	//require will produce a fatal error (E_COMPILE_ERROR) and stop the script


	$file=fopen("welcome.txt","r");	 //used to open files in PHP.
	fclose($file);	//used to close an open file.
	feof($file);   //checks if the "end-of-file" (EOF) has been reached.
	fgets($file);	//used to read a single line from a file.
					//After a call to this function the file pointer has moved to the next line.
	fgetc($file);	//used to read a single character from a file.
					//After a call to this function the file pointer moves to the next character.

	setcookie(name, value, expire, path, domain);	//used to set a cookie.
	setcookie("user", "Alex Porter", time()+3600);	//The setcookie() function must appear BEFORE the <html> tag.
	setcookie("user", "", time()-3600);	//When deleting a cookie you should assure that the expiration date is in the past.
	print_r($_COOKIE);	// A way to view all cookies
	isset($_COOKIE["user"]);	//find out if a cookie has been set.
	
	session_start();	// The session_start() function must appear BEFORE the <html> tag.
	isset($_SESSION['views'])	// checks if the "views" variable has already been set.
	unset($_SESSION['views'])	// used to free the specified session variable.
	session_destroy();	//completely destroy the session.

	Send an Error Message by E-Mail:
		//error handler function
		function customError($errno, $errstr)
		  {
		  echo "<b>Error:</b> [$errno] $errstr<br>";
		  echo "Webmaster has been notified";
		  error_log("Error: [$errno] $errstr",1,
		  "someone@example.com","From: webmaster@example.com");
		  }

		//set error handler
		set_error_handler("customError",E_USER_WARNING);

		//trigger error
		$test=2;
		if ($test>1)
		  {
		  trigger_error("Value must be 1 or below",E_USER_WARNING);
		  }

	filter_var()	//- Filters a single variable with a specified filter
	filter_var_array()	//- Filter several variables with the same or different filters
	filter_input()	//- Get one input variable and filter it
	filter_input_array()	//- Get several input variables and filter them with the same or different filters

?>