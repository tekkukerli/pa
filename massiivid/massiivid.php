<?php
/*
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
ksort($hinded);
var_dump($hinded);
echo "<hr>";
asort($hinded);
var_dump($hinded);
echo "<hr>";
echo $hinded['kehv'];
echo "<hr>";

foreach($hinded as $hinnang => $hinne){
    echo "<li>Hinne: $hinne ($hinnang)</li>";
}
echo "<hr>";
array_push($nimed, 'ahmed', 'ahti');
$nimed[0] = 'kerli';
array_unshift($nimed, 'pille');
//eemalda viimane väärtus
array_pop($nimed);
//eemalda esimene väärtus
array_shift($nimed);
//eemaldatud väärtuse massiivi lisamine
echo "Eemaldati: ".$nimi;
echo "<hr>";
var_dump($nimed);
echo "<hr>";
echo count($nimed);
echo "<hr>";

//sorteerimine
sort($nimed);
var_dump($nimed);
echo "<hr>";

//nimekirja sassiajamine
shuffle($nimed);
var_dump($nimed);


//mitmemõõtmelised massiivid
$riigid = array(
    'Eesti'=>array('pealinn'=>'Tallinn','rahvaarv'=>1340000),
    'Austria'=>array('pealinn'=>'Viin','rahvaarv'=>8356700),
    'Belgia'=>array('pealinn'=>'Brüssel','rahvaarv'=>10827500)
);

var_dump($riigid);
echo "<hr>";

echo $riigid['Eesti']['pealinn'];
echo "<hr>";

foreach ($riigid as $riik=>$andmed){
    echo "$riik - ";
    foreach($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
}
echo "<hr>";

//ül 5
//õppeained
$aine = array('kunst', 'matemaatika', 'ajalugu', 'bioloogia', 'geograafia');
sort($aine);
var_dump($aine);
echo "<hr>";

//pallivise
$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);

echo count($nimed);
echo "<hr>";

$average = array_sum($pallivisked) / count($pallivisked);
echo $average;
echo "<hr>";

echo max($pallivisked);
echo "<hr>";
*/

$tulemused = array('Martin'=>33, 'Hardi'=>32, 'Juhan'=>27, 'Tiina'=>11, 'Sirje'=>15, 'Kaie'=>28);

$nimi = array_search(max($tulemused), $tulemused);
echo $nimi;
echo "<hr>";









//raamatud
/*
$raamatud = array(
    'Helmelõimed elulõngal'=>array('autor'=>'Karl Puhvel','žanr'=>'biograafia','aasta'=>'2013'),
    'Mari lood'=>array('autor'=>'Mari Maasikas','žanr'=>'luule','aasta'=>'2017'),
    'Kassid'=>array('autor'=>'Juhan Saabas','žanr'=>'lastekirjandus','aasta'=>'1997')
);
ksort($raamatud);
var_dump($raamatud);
echo "<hr>";
echo count($raamatud);
*/
?>