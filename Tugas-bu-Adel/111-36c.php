<?php
$macam2 = array(121,"joko",44.00, "belajar php",);
$macam2[10] ="duniailkom";

unset($macam2[0]);
unset($macam2[2]);
unset($macam2[3]);

echo "<pre>";
var_dump($macam2);
echo "</pre>";

//hasil kode 

array(2){
   [1]=> 
   string(4) "joko"
   [4]=> 
   string(10) "duniailkom"
}
?>