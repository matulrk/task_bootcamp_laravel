<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new animal("shaun");
$kodok = new frog("buduk");
$sungokong = new Ape("kera sakti");

echo $sheep->name; // "shaun"
echo '<br>';
echo $sheep->legs; // 2
echo '<br>';
echo $sheep->cold_blooded; // false
echo '<br>';

echo $kodok->name;
echo '<br>';
echo $kodok->get_jump(); // "hop hop"
echo '<br>';

echo $sungokong->name;
echo '<br>';
echo $sungokong->get_yell(); // "Auooo"
echo '<br>';
?>