<?php
  $username= "admin";
  $password = "qwerty";

  if($username=="admin" AND  $password=="qwert"){
    echo "Nama dan password sesuai, hak akses di berikan...";
  }
else
if($username=="admin" AND  $password!="qwert"){
    echo "Nama sesuai, password tidak sesuai!";
}
else
if($username!="admin" AND  $password!="qwert"){
    echo "Nama tidak sesuai, password  sesuai!";
}
else{
echo "nama dan password tidak sesuai!";
}
?>