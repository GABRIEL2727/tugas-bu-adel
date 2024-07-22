<?php
  $siswa = [
           "kelas_x" => ["santi","yanto","reza"]
           "kelas_xi" => ["tia","siska","nova"]
           "kelas_xii" => ["robert","rudi","alex"]
];

echo $siswa["kelas_xi"][0]; //tia
echo "<br>";
echo $siswa["kelas_xii"][0]; //alex
echo "<br>";
echo $siswa["kelas_x"][0]; //yanto

echo "<pre>";
print_r($siswa);
echo "<?pre>";

//hasil

tia 
alex 
yanto 

array

( 
    [kelas_x] => array
    (
        [0] => santi
        [1] => yanto
        [2] => reza
    )
    [kelas_xi] => array
    (
        [0] => tia
        [1] => siska
        [2] => nova
    )
    [kelas_x] => array
    (
        [0] => robert
        [1] => rudi
        [2] => alex
    )
)
