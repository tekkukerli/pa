<?php
// tsükkel *
for ($kordArv = 1; $kordArv < 11; $kordArv++) {
    echo $kordArv.'. ';
    echo '*';
    echo '<br>';
}
echo '<hr>';

//paarisarvude kuvamine
for ($nr = 1; $nr < 11; $nr++) {
    $jaak = $nr % 2;
    if ($jaak == 0){ //jääk võrdub null, seega jagub, seega paaris arv
        echo $nr.'<br>';
    }
}
echo '<hr>';

//paaritute arvude kuvamine
for ($nr = 1; $nr < 11; $nr++) {
    $jaak = $nr % 2;
    if ($jaak != 0){ //kui jääk ei võrdu null, ei jagu, ei ole paaris
        echo $nr.'<br>';
    }
}

echo '<hr>';

//tärniruut
for($reaNr = 1; $reaNr < 6; $reaNr++) {
    echo $reaNr;
     //tsükkel tsüklis
    for($veeruNr = 1; $veeruNr < 7; $veeruNr++) {
        echo '*';
    }
    echo '<br>';
}
echo '<hr>';

// kasvav *
for($reaNr = 1; $reaNr < 6; $reaNr++) {
    echo $reaNr;
    //tsükkel tsüklis
    for($veeruNr = 1; $veeruNr <= $reaNr; $veeruNr++) {
        echo '*';
    }
    echo '<br>';
}
echo '<hr>';

//ÜLESANNE 6.1  diagonaal

// ridade ja veergude max
$ridadeArv = 7;
$veergudeArv = 7;
// ridade määramine ja vahetus
for($reaNr = 1; $reaNr <= $ridadeArv; $reaNr++){
    echo $reaNr;
    // veergude määramine ja vahetus
    for($veeruNr = 1; $veeruNr <= $reaNr; $veeruNr++){
        if($veeruNr != $reaNr){
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        } else {
            echo '*';
        }
    }
    echo '<br>';
}
echo '<hr>';

//PI ARVUTAMINE
/*
$kord = 1;
$kordMax = 1000;
$summa = 0;

while($kord <= $kordMax) {
    $element = 1 / (2 * $kord -1);
    $jaak1 = $kord % 2;
    if($jaak1 == 0) {
        $summa = $summa - $element; {
        } else {
          $summa = $summa + $element;
        }
        $kord ++;
    }
    $pi = $summa * 4;
    echo $pi.'<br>';
}
*/
//ÜL 6.2
$i=5; //read 5
$j=5; //veerud 5

for($i=1;$i<=5;$i++) {
    for($j=1;$j<=$i;$j++) {
        echo $j;
    }
    echo '<br />';
}

echo '<hr>';

//ÜL 6.4









?>
