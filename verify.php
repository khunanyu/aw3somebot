<?php
$access_token = '1c7ekQDkUMJeg3hD7qvDSm1jerEFTYGe8zUtWGELPCmhlWh0AawQQZ8tHOhhq5weWJefIdd7+hmH5CylGys9q46uRDr0tX3EMeotwz6D7ePKOY8wPnZpMGQlp6gLyJJnSwXV8tQlIZBGToTcxyrk1wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>