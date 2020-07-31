<?php

require "animal.php";
$sheep = new Animal("shaun");
echo $sheep -> name;
echo "<br>" . $sheep -> leg;
echo $sheep -> cold_blooded; // false

// index.php
require "frog.php";
echo $sungokong = new Ape("kera sakti");
echo $sungokong->yell() // "Auooo"

echo $kodok = new Frog("buduk");
echo $kodok->jump() ; // "hop hop"

?>