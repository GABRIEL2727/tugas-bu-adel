<?php
$assoc = [
    "satu" => 10000,
    "dua" => "duniailkom",
    4 => "belajar php",
    10000 => "jadi programmer"
];

$assoc["baru"] = "data baru";
$assoc[99] = "sembilan puluh sembilan";

$assoc[] = "ini akan pakai index berapa?";
$assoc[] = 123456;

echo "<pre>";
print_r($assoc);
echo "</pre>";


Array
(
    [satu] => 10000
    [dua] => duniailkom
    [4] => belajar php
    [10000] => jadi programmer
    [baru] => data baru
    [99] => sembilan puluh sembilan
    [10001] => ini akan pakai index berapa?
    [10002] => 123456
)

?>