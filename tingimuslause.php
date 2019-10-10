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

?>
