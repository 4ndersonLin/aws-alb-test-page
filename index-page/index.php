<?php
$url = "http://169.254.169.254/latest/meta-data/local-ipv4";
 
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
 
curl_close($ch);
 
echo $output;
?>