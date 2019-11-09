<?php
$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
$vanused = array(15, 23, 32, 28, 18);

//massiivi sisu kuvaminseks funktsioon var_dump
var_dump($nimed);
echo "<hr>";

//olulise sisu kuvamiseks print_r
print_r($nimed);
echo "<hr>";

//indeksi järgi kuvamine
echo $nimed[0];
echo "<hr>";

//massiivi kõigi elementide väljastamine
foreach($nimed as $nimi){
    echo "$nimi <br>";
}
echo "<hr>";

$hinded = array(
    'kehv' => 2,
    'rahuldav' => 3,
    'hea' => 4,
    'väga hea' => 5
);
echo $hinded['kehv'];
echo "<hr>";

foreach($hinded as $hinnang => $hinne){
    echo "<li>Hinne: $hinne ($hinnang)</li>";
}

?>