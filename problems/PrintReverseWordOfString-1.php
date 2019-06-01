<?php

//phpinfo();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);


$largeStr = "Hello Developer Programer coder";
echo "<br><br>Orignal String: <br>";
echo($largeStr);

$strExplode = explode(' ', $largeStr);

$revStr = '';
foreach($strExplode as $rev){
    $revStr .= strrev($rev) . " ";
}

echo "<br><br>Reverse Word of String: <br>";
echo($revStr);


exit(PHP_EOL . PHP_EOL . '<font color="red"><br><br>--END-OF-CODE--<br>--EXIT--</font>');


/* op:
Orignal String: 
Hello Developer Programer coder

Reverse Word of String: 
olleH repoleveD remargorP redoc 
*/

?>