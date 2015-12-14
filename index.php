<?php
echo "<h1>Method 'file_get_content' goes to API and get string of</h1>";
echo "<br />";
echo "<br />";
$getcontent = file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx");

echo "<pre>";
echo $getcontent;
echo "</pre>";

echo "<br />";
echo "<br />";
echo "<h1>Method 'json_decode' goes to 'file_get_content' and convert String as JSON</h1>";

$bitcointoyou =  json_decode(file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx"));

echo "<pre>";
print_r($bitcointoyou);
echo "</pre>";

?>
