<?php

$arr = [];

//Adicionando valores
print_r ($arr);
echo "<br>";

$arr[0] = 10;

print_r ($arr);
echo "<br>";

$arr[1] = 15;

print_r ($arr);
echo "<br>";

$arr[5] = 20;

print_r ($arr);
echo "<br>";

//Modificando valores
$arr[1] += 55;


print_r ($arr);
echo "<br>";

$arrAssoc = [];

print_r ($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";

print_r ($arrAssoc);
echo "<br>";

$arrAssoc["aviao"] = "boeing";

print_r ($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "Ferrari";

print_r ($arrAssoc);
echo "<br>";
?>