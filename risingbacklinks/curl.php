<?php

$ch = curl_init("http://risingbacklinks.com/backlink.aspx");
$fp = fopen("risingbacklinks.php", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
header("Location:risingbacklinks.php");
?>