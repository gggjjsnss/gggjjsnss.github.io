<?php
 
$url = 'http://example.com'; // 目标URL
$pseudoIp = '123.123.123.123'; // 伪造的IP地址
 
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Forwarded-For: ' . $pseudoIp)); // 设置伪造的IP地址
 
$response = curl_exec($ch);
 
curl_close($ch);
 
echo $response;
