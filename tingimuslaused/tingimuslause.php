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


//defineeri arv positiivne-negatiivne
$arv = -9;
//kontrollime kas arv on positiivne (>0)

if($arv > 0) {
    //kui arv on suurem kui 0
    echo $arv. ' on positiivne';
}   else if($arv < 0) {
    // kui arv on väiksem kui 0
    echo $arv. ' on negatiivne';
}   else { //kui arv ei ole suurem kui 0 ega väiksem kui 0
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

//kontrollime kas jagaja on 0
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

//käesolev aasta
$hetkeAasta = 2019;
//kasutaja sisestatud sünniaasta
$synniAasta = 2001;
//aastate vahe- kasutaja vanus
$vanus = $hetkeAasta - $synniAasta;
echo 'Oled '.$vanus.' aastat vana<br>';

//kontrollime kas vanus jagub 5ga, leiame jagamise jäägi
$jaak = $vanus % 5;

//kui jääk on 0 - vanus jagub 5-ga
if($jaak == 0) {
  echo 'Sel aastal on juubel!<br>';
} else {
  echo 'Veel juubelit ei ole<br>';
}
echo '<hr>';

//4.5 arvamismäng

$arvatav = 8; //äraarvatav number
$pakutud = 5; //kasutaja pakutud number

//võrdlemine
if ($pakutud == $arvatav) { //kui arvas õigesti
    echo 'Arvasid ära!';
} else { //arvud EI OLE võrdsed
    // kui arvude vahe on väiksem kui 5 siis ütleme lähedal
    //negatiivsed arvud teisendame vahemiku leidmiseks positiivseks
    $vahemik = abs($pakutud - $arvatav);
    if ($vahemik <= 5) {
        //ütleme et tulemus on lähedal
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

//kontrollime kas on eestlane
if ($r = 'eestlane') {
    echo 'Rahvus korras<br>';
    //kui oled eestlane, kontollime vanust
    if ($v >= 18) {
        echo 'Vanus sobib<br>';
        //kui on piisavalt vana, kontrollime haridust
        if ($h = 'pohiharidus' or $h = 'kutseharidus' or $h = 'korgharidus' or $h = 'keskharidus') {
            //kui haridus on sobilik
            echo 'Haridus sobiv. Oled vastu võetud';
        } else {
            echo 'Ei ole sobiv haridus';
        }
    } else { //kui vanus ei sobinud
        echo 'Oled liiga noor';
    }
} else { //kui ei olnud eestlane
    echo 'Sa ei ole eestlane';
}
echo '<hr>';

//täringud

//defineerime muutujad
$number = rand(1, 7);

//switch kontrollimiseks
switch($number) {
    case 1: echo 'Number on 1';
    break;
    case 2: echo 'Number on 2';
    break;
    case 3: echo 'Number on 3';
    break;
    case 4: echo 'Number on 4';
    break;
    case 5: echo 'Number on 5';
    break;
    case 6: echo 'Number on 6';
    break;
    default: echo 'midagi läks valesti';
    break;
}
echo 'Sellega täringuvise on tehtud';
echo '<hr>';

//operaatorid
$x = 3;
$y = 2;

// loogilised operaatorid
var_dump($x == $y);
echo '<hr>';
var_dump($x != $y);
echo '<hr>';
var_dump($x < $y);
echo '<hr>';
var_dump($x > $y);
echo '<hr>';
var_dump($x <= $y);
echo '<hr>';
var_dump($x >= $y);
echo '<hr>';

?>
