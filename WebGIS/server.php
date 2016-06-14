<?php
//设置页面内容是html编码格式是utf-8
//header("Content-Type: text/plain;charset=utf-8"); 
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 
//header("Content-Type: text/xml;charset=utf-8"); 
//header("Content-Type: text/html;charset=utf-8"); 
//header("Content-Type: application/javascript;charset=utf-8"); 

	$result = '{"success":true,"title":"测试标题", "msg":"测试内容测试内容测试内容测试内容"}';

    echo $result;


?>