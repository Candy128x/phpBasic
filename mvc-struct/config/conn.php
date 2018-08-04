<?php

define('localHost','localhost');
define('userName','root');
define('passWord','');
define('dataBase','UserDB');

$conn = new mysqli(localHost, userName, passWord, dataBase);

if($conn->connect_error)
{
  die("Connection Failed..<br>".$connect_error);
}
//echo "DataBase Connected Successfully..<br>";

?>
