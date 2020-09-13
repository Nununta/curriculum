<?php
$countries = ["Japan","America","China","Korea"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
echo "<br>";
var_dump ($countries);

$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
echo $fruits["apple"];
var_dump ($fruits);
echo "<br>";
$fruits[3] = "もも";
$fruits["peach"] = "もも";
var_dump ($fruits);
?>

