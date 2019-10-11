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

//ÜLESANNE 4.2 jagamine

$arv1 = 10;
$arv2 = 5;
$tehe = $arv1 / $arv2;

if($arv2 == 0) {
  echo 'Nulliga ei saa jagada<br>';
} else {
  echo $arv1.' / '.$arv2.' = '.$tehe.'<br>';
}
echo '<hr>';

//4.3 suurem/väiksem
$arv1 = 7;
$arv2 = 7;

if ($arv1 < $arv2) {
    echo $arv1.' on väiksem kui '.$arv2.'<br>';
} else if ($arv1 > $arv2) {
    echo $arv1.' on suurem kui '.$arv2.'<br>';
} else {
    echo 'Arvud on võrdsed';
}
echo '<hr>';

//4.4 juubel

$hetkeAasta = 2019;
$synniAasta = 2001;
$vanus = $hetkeAasta - $synniAasta;
$jaak = $vanus % 5;

if($jaak == 0) {
  echo 'Sel aastal on juubel!<br>';
} else {
  echo 'Veel juubelit ei ole<br>';
}
echo '<hr>';

//4.5 arvamismäng

$arvatav = 8; //äraarvatav number
$pakutud = 1; //kasutaja pakutud number

if ($pakutud == $arvatav) { //kui arvas õigesti
    echo 'Arvasid ära!';
} else {
    $vahemik = abs($pakutud - $arvatav);
    if ($vahemik <= 5) {
        echo 'Veel ei arvanud ära, aga oled lähedal<br>';
    }
    if ($pakutud > $arvatav) {
        echo $pakutud.' on suurem kui ette antud arv';
    }
    if ($pakutud < $arvatav) {
        echo $pakutud.' on väiksem kui ette antud arv';
    }
}


echo '<hr>';

//4.5 sõjavägi

$r = 'venelane';
$v = 19;
$h = 'algharidus';

if ($r = 'eestlane') {
    echo 'Rahvus korras<br>';
    if ($v >= 18) {
        echo 'Vanus sobib<br>';
        if ($h = 'pohiharidus' or $h = 'kutseharidus' or $h = 'korgharidus' or $h = 'keskharidus') {
            echo 'Haridus sobiv. Oled vastu võetud';
        } else {
            echo 'Ei ole sobiv haridus';
        }
    } else {
        echo 'Oled liiga noor';
    }
} else {
    echo 'Sa ei ole eestlane';
}




?>
