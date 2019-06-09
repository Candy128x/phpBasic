<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);


// -> To start session..
session_start(); 


// -> Set values in session
$_SESSION['user_name'] = 'Ganesh';
$_SESSION['user_location'] = 'Mumbai';


// -> Fetch Session Value..
echo 'Value of user_name = ' . $_SESSION['user_name'];


// -> Get Session ID
echo '<br/><br/>--Session-ID--<br/>';
var_dump(session_id());


echo '<br/><br/>';
var_dump($_SESSION);
echo '<br/><br/>';
print_r($_SESSION);


// -> Remove all session variavble
session_unset();
// unset($_SESSION);


// -> Destroy all session variable
// session_destroy();


echo '<br/><br/>Value of user_name = ' . $_SESSION['user_name'];


/* output:
Value of user_name = Ganesh

--Session-ID--
string(26) "ct6q5a0m9rdgnpd7puspi6mppu"

array(2) { ["user_name"]=> string(6) "Ganesh" ["user_location"]=> string(6) "Mumbai" }

Array ( [user_name] => Ganesh [user_location] => Mumbai )
Notice: Undefined index: user_name in C:\xampp\htdocs\0MyWorks\php\phpBasic\Concept\session.php on line 40


Value of user_name = 
*/

?>