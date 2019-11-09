<?php
/*
	PHP - Funktsioonid
	Kerli Tekku
	Tartu Kutsehariduskeskus
	08.11.2019
*/
/*
function tervita(){
    return "Tere kylaline";
}
echo tervita();


function tervita($nimi="Kylaline"){
    return "Tere $nimi";
}
echo tervita("Kerli");


function tervita($nimi="Kylaline"){
    return "Tere $nimi";
}
echo tervita();


function tervita($enimi="Hea", $pnimi="Kylaline"){
    return "Tere $enimi $pnimi";
}
echo tervita();
echo "<br>";
echo tervita("Kerli", "Tekku");
echo "<br>";
echo tervita("Imre", "Tard");
*/


//Matemaatilised funktsioonid
/*
echo min(11,21,32,43,54);
echo "<br>";
echo max(11,21,32,43,54);
echo "<br>";
$arvud = array(11,21,32,43,54,60);
echo max($arvud);
echo "<br>";
$arvud1 = array(11,21,32,43,54);
$arvud2 = array(60,72,42,34,45);
echo max(max($arvud1), max($arvud2));

$arv = 3.456;

echo round($arv);
echo "<br>";
echo round($arv,2);
echo "<br>";
echo ceil($arv);
echo "<br>";
echo floor($arv);
echo rand(); //juhuslik arv
echo "<br>";
echo mt_rand();  //suurem juhuslik arv
echo "<br>";
echo rand(1,10);  //vahemikus juhuslik arv
echo "<br>";
echo pow(5,2);  //astendamine
echo "<br>";
echo pow(5,3);
echo "<br>";
echo sqrt(9); //ruutjuur
echo "<br>";
echo pi();  //pi
echo "<br>";
echo cos(0.8);
echo "<br>";
echo deg2rad(30);
*/

//Ül 7
//jagamine
function jaga($arv, $arv1){
    if ($arv1 < 1){
        return "Arv ei tohi olla väiksem kui 1";
    } else {
        return $arv / $arv1;
    }
}
echo jaga (60,3);
echo "<br>";
echo jaga (60,0);
echo "<br>";

//täringumäng

function roll(){
    return rand(1,6);
}
echo roll();
echo "<br>";

//kolmnurk
function arvuta ($a, $b){
    $c = round(sqrt(pow($a,2) + pow($b,2)));
    return "Kolmas külg on " .$c.".";
}
echo arvuta(5,3);



?>