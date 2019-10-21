<?php
//variables
$username = "tester";
echo("username is ".$username."<br /><br />");

$password = "tester";
echo("password is ".$password."<br /><br />");
$uPass = $username;
$pw = $password;
$dateLog = date("dmy");
//date to arr
$dateArr = str_split($dateLog);
$aPlus = intval($dateArr[0]) +
    intval($dateArr[1]) + 
    intval($dateArr[2]) + 
    intval($dateArr[3]) + 
    intval($dateArr[4]) + 
    intval($dateArr[5]) + 
    intval($dateArr[6]);
//salt merge
$mergeSalt = $uPass.$dateLog;
$mergeSaltMd5 = md5($mergeSalt);
//function string lengths
$strToLenU = strlen($uPass);
$strToLenD = strlen($dateLog);
//pw md5
$strRotPw = str_rot13($pw);
$md5Pw = md5($strRotPw);
//final Pass
$finalPw = substr($mergeSaltMd5.$md5Pw,$aPlus/2, $aPlus);
echo("Final Password is ".$finalPw."<br />");










?>
