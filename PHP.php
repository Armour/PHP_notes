<?php
	print_r($x)
	//returns the value of variables.

	var_dump($x);  
	//returns the data type and value of variables.

	trim(str)	// returns a string with whitespace stripped from the beginning and end of str.
	ltrim(str)	// returns a string with whitespace stripped from the beginning of str.
	rtrim(str)	// returns a string with whitespace stripped from the end of str.  

	strtolower(str)	//Returns string with all alphabetic characters converted to lowercase.
	strtoupper(str) //Returns string with all alphabetic characters converted to uppercase.

	ucfirst(str)	//Returns a string with the first character of str capitalized, if that character is alphabetic.
	ucwords(str)	//Returns a string with the first character of each word in str capitalized, if that character is alphabetic.
	lcfirst(str)    ///Returns a string with the first character of str not capitalized, if that character is alphabetic.

	strlen("Hello world!"); 
	//returns the length of a string, in characters.

	mixed str_word_count ( string $string [, int $format = 0 [, string $charlist ]] )
	//Specify the return value of this function. The current supported values are:
	//0 - returns the number of words found
	//1 - returns an array containing all the words found inside the string
	//2 - returns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself
		
	strpos("Hello world!","world"); 
	//search for a specified character or text within a string.
	//If no match is found, it will return FALSE.
	//The position of the string "world" in the example above is 6. 
	//The reason why it is 6 (and not 7) is that the first character position in the string is 0, and not 1.

	string strip_tags(string $str [, string $allowable_tags ])
	//This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given str. It uses the same tag stripping state machine as the fgetss() function.
	
	string str_shuffle(string $str)
	//Randomly shuffles a string.

	strcmp(str1, str2)	//Note that this comparison is case sensitive.
	strcasecmp(str1, str2)	//Binary safe case-insensitive string comparison.
	//Both returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.

	array explode($delimiter , $string [, int $limit ])
	//Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.

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

	number array_sum(array $array)
	//returns the sum of values in an array.

	array array_unique(array $array [, int $sort_flags = SORT_STRING ])
	//Removes duplicate values from an array

	bool in_array(mixed $needle, array $haystack [, bool $strict = FALSE ])
	//Searches haystack for needle using loose comparison unless strict is set.

	mixed array_search(mixed $needle, array $haystack [, bool $strict = false ])
	//Searches the array for a given value and returns the corresponding key if successful

	array array_merge(array $array1 [, array $... ])
	//Merge one or more arrays

	bool array_walk (array &$array, callable $callback [, mixed $userdata = NULL ])
	//Apply a user function to every member of an array

	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	sort($age) //- sort arrays in ascending order
	rsort($age) //- sort arrays in descending order
	asort($age) //- sort associative arrays in ascending order, according to the value
	ksort($age) //- sort associative arrays in ascending order, according to the key
	arsort($age) //- sort associative arrays in descending order, according to the value
	krsort($age) //- sort associative arrays in descending order, according to the key

	htmlentities(str)	
	htmlspecialchars(str)
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
			error_log("Error: [$errno] $errstr",1,"someone@example.com","From: webmaster@example.com");
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
	filter_has_var()	//- Checks if a variable of a specified input type exist

	Using Filter Callback:
		function convertSpace($string)
		{
			return str_replace("_", " ", $string);
		}
		$string = "Peter_is_a_great_guy!";
		echo filter_var($string, FILTER_CALLBACK, array("options"=>"convertSpace"));


	$con=mysqli_connect("example.com","peter","abc123","my_db");	// Create connection	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();	// Check connection
	}
	$sql="...";  // SQL sth
	$result = mysqli_query($con,$sql);	// Execute query
	$row = mysqli_fetch_array($result));	//Get the select results
	mysqli_close($con);		// Close the connection 

	$my_db = new mysqli('example.com','peter','abc123','my_db');	// Create connection
	$sql = "...";   // SQL sth
	$result = $my_db->query($sql);   // Execute query
	while ($row = $result->fetch_assoc()){   //Get the select results
		echo.....
	}
	$result->close();
	$my_db->close();   // Close the connection 

	$conn=odbc_connect('northwind','','');	//creates a connection to a DSN called northwind, with no username and no password
	$sql="...";	// SQL sth
	$rs=odbc_exec($conn,$sql);	//execute sql
	odbc_fetch_row($rs)	//used to return records from the result-set.
						// This function returns true if it is able to return rows, otherwise false.
	$compname=odbc_result($rs,1);	//The code line below returns the value of the first field from the record:
	$compname=odbc_result($rs,"CompanyName");	//The code line below returns the value of a field called "CompanyName":
	odbc_close($conn);	// used to close an ODBC connection.

	header('location: http://www.example.com/elsewhere.html');	//	redorection

	if ($_SERVER['HTTPS']!=='on')
	{
			die("Must be a secure connection.");
	}		//SSL avoid going to a web which was not encrypted. 

	array_flip($array)	//returns an array in flip order, i.e. keys from array become values and values from array become keys.
	
	$a = <<< mark 	   
	sth here
	sth here
	mark;
	echo "$a";			//<<< Identifier tell the PHP parser that you are writing a heredoc now

	printf(<<< mark
		%s is %d years old.
		mark
		,"Fred",35);    
?>