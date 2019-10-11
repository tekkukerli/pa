<?php
$x = 3;
$y = 2;
var_dump($x == $y);
echo '<hr>';

$varv = 'punane';
if($varv){  //kontrollob kas muutujale on väärtus omistatud
    echo 'Värv on lisatud!';
}
echo '<hr>';
$varv = '';
if(!$varv){
    echo 'Muutujal pole väärtust!';
}
echo '<hr>';
$arv = 7;
$jaak = $arv%2;

if($jaak == 0){
    echo 'Arv on paaris';
} else {
    echo 'Arv on paaritu';
}
echo '<hr>';


//defineeri arv
$arv = -9;
if($arv > 0) {
    echo $arv. ' on positiivne';
}   else if($arv < 0) {
    echo $arv. ' on negatiivne';
}   else { //kui arv ei ole > kui 0
    echo $arv.' on 0';
}
echo '<hr>';

//kompaktkuju
$user = 'admin';
echo $user == 'admin' ? 'Tere admin' : 'Tere külaline';
echo '<hr>';

//ÜLESANNE 4.1

$arv1 = 10;
$arv2 = 5;
$tehe = $arv1 / $arv2;

if($arv2 == 0) {
  echo 'Nulliga ei saa jagada<br>';
} else {
  echo $arv1.' / '.$arv2.' = '.$tehe.'<br>';
}
echo '<hr>';

//4.3
$arv1 = 4;
$arv2 = 5;

if ($arv1 < $arv2) {
    echo $arv1.' on väiksem kui '.$arv2.'<br>';
} else if ($arv1 > $arv2) {
    echo $arv1.' on suurem kui '.$arv2.'<br>';
} else {
    echo 'Arvud on võrdsed';
}

//4.4

$hetkeAasta = 2019;
$synniAasta = 2001;
$vanus = $hetkeAasta - $synniAasta;
$jaak = $vanus % 5;

if($jaak == 0) {
  echo 'Sel aastal on juubel!<br>';
} else {
  echo 'Veel juubelit ei ole<br>';
}




?>
