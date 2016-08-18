<?php
$url1 = "http://169.254.169.254/latest/meta-data/local-ipv4";
$url2 = "http://169.254.169.254/latest/meta-data/"; 
$ch1 = curl_init();
 
curl_setopt($ch1, CURLOPT_URL, $url1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$output1 = curl_exec($ch1);
 
curl_close($ch1);
$ch2 = curl_init();
 
curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$output2 = curl_exec($ch2);
 
curl_close($ch12;
 
echo $output1;
echo $output2;
?>