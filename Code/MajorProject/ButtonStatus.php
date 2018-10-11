<?php
$myfile = fopen("light1.txt", "r") ;
$l1=fread($myfile,filesize("light1.txt"));
fclose($myfile);
$myfile1 = fopen("fan.txt", "r") ;
$f=fread($myfile,filesize("fan.txt"));
fclose($myfile);

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

