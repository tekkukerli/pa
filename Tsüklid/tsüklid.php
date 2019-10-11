<?php


for ($kordArv = 1; $kordArv < 10; $kordArv++) {
    echo $kordArv.'. ';
    echo '*';
    echo '<br>';
}
echo '<hr>';

//paarisarvude kuvamine
for ($nr = 1; $nr < 11; $nr++) {
    $jaak = $nr % 2;
    if ($jaak == 0){
        echo $nr.'<br>';
    }
}
echo '<hr>';

//paaritute arvude kuvamine
for ($nr = 1; $nr < 11; $nr++) {
    $jaak = $nr % 2;
    if ($jaak != 0){
        echo $nr.'<br>';
    }
}
echo '<hr>';



?>
