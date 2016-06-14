<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/heweather/weather/free?city=beijing';
    $header = array(
        'apikey: 8b668b9b6c253c30efda8b79bd06258a',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    var_dump(json_decode($res));
?>