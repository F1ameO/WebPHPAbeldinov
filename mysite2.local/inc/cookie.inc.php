<?php
$visitCounter = (isset ($_COOKIE["visitCounter"])) ? $_COOKIE["visitCounter"] : 0;
$visitCounter++;
setcookie("visitCounter", $visitCounter, time()+4);
echo "Пользователь посещал страницу $visitCounter раз";

echo "</br>";

$counter = $_COOKIE["counter"]; 
if (!isSet($counter)) 
$counter = date('Y-m-d H:i:s'); 
else 
$counter = $counter; 
echo "Последний раз вы заходили $counter";
echo "</br>";
?>