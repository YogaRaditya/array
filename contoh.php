<?php
$cars = array("ferrary","lamborgini aventador","mercedez bezn");
$negara = ["Singapura", "Indonesia", "Jepang"];
$kota = array("Bandung", "Solo", "Jakarta");

// //menampilkan array
echo "I like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ",";
echo"<br>";
var_dump($negara);
echo"<br>";
print_r($kota);

//lest code menulis Array
var_dump($kota);
$kota[] = "Bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);

?>