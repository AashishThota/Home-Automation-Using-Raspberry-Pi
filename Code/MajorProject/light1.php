<?php
//$light1=$_REQUEST("light1");
$light1=filter_input(INPUT_GET, 'light1');
$myfile = fopen("light1.txt", "w") ;
fwrite($myfile, $light1);
fclose($myfile);
?>