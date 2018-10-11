<?php
//$light1=$_REQUEST("light1");
$fan=filter_input(INPUT_GET, 'fan');
$myfile = fopen("fan.txt", "w") ;
fwrite($myfile, $fan);
fclose($myfile);
?>