<?php
//aritmeetilised operaatorid
//muutujate defineerimine
$x = 8;
$y = 2;
//aritmeetilised operaatorid
$liitm = $x + $y;   //fikseeritakse valem
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;

echo "Vastused: $liitm, $lahut, $korru, $jagam, $jaak<br>"; //vastuste kuvamine
echo "<br>";

//tabeli väljastamine
echo
"<!doctype html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<title>Document</title>
<style>
    table, th, td {
        border: 1px solid black;
        padding: 1rem;
        text-align: center;
        border-collapse: collapse;
    }
    thead {
        background: orange;
    }
</style>
</head>


<table>
 <!-- tabeli päis -->
  <thead>
    <tr>
      <th>Operaator</th>
      <th>Nimetus</th>
      <th>Näide</th>
      <th>Tulemus</th>
    </tr>
</thead>
  <!-- tabeli keha -->
<tbody>
  <tr>
    <td>x + y</td>
    <td>Liitmine</td>
    <td>".$x." + ".$y."</td>
    <td>".$liitm."</td>
  </tr>
  <tr>
    <td>x - y</td>
    <td>Lahutamine</td>
    <td>".$x." - ".$y."</td>
    <td>".$lahut."</td>
  </tr>
  <tr>
    <td>x * y</td>
    <td>Korrutamine</td>
    <td>".$x." * ".$y."</td>
    <td>".$korru."</td>
  </tr>
  <tr>
    <td>x / y</td>
    <td>Jagamine</td>
    <td>".$x." / ".$y."</td>
    <td>".$jagam."</td>
  </tr>
  <tr>
    <td rowspan='2' >x % y</td>
    <td rowspan='2' >Jääk</td>
    <td>".$x." % ".$y."</td>
    <td>".$jaak."</td>
  </tr>
  <tr>
    <td>5 % 2</td>  
    <td>".(5 % 2)."</td>  <!--jooksvalt arvutab-->
  </tr>
</tbody>
</table>
</html>";


//muutuja väärtuste vormindamine
$nimi = 'Mari';
printf('Tere %s', $nimi);
echo "<br>";

//muutuja väärtuste vormindamine, vanus tekstina
$nimi = 'Mari';
$vanus = 27;
printf('%s on %s aastane.', $nimi, $vanus);
echo "<br>";

//muutuja väärtuste vormindamine, vanus arvuna esitatult
$nimi = 'Mari';
$vanus = 27;
printf('%s on %d aastane.', $nimi, $vanus);
echo "<br>";

$i = 7.26;
$j = 2.369;
$k = $i / $j;
printf('Vastus: %0.3f', $k);
echo "<br>";

$i = 7.26;
$j = 2.369;
$k = $i / $j;
$vormindatud = sprintf('Vastus: %0.3f', $k);
echo $vormindatud;
echo "<br>";
echo "<br>";

//Ülesanne 2 Kerli 07.10.2019

$x = 9;
$y = 3;
$liitm = $x + $y; //fikseeritakse valem
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;

echo "Vastused: $liitm, $lahut, $korru, $jagam, $jaak<br>"; //vastuste kuvamine
echo "<br>";
echo "<br>";

//temperatuuri arvutamine
//defineeri muutujad ja omista väärtused
$celcius = 15;
$fahrenheit = (9/5) * $celcius + 32;
//väljasta tulemus täpsusega 2 kohta pärast koma
printf('Celcius %.2d kraadi on %.2f Fahrenheit kraadi. ', $celcius , $fahrenheit);

echo "<br>";
echo "<br>";

//ringi raadius

//omista väärtused
$r = 5;
//arvutame ümbermõõt ja pindala
$C = pi() * ($r * 2);
$pindala = pi() * ($r * $r);
echo "<br>";
//väljastamine
printf('Ringi ümbermõõt on %d cm. ', $C); //%d ümardatud täisarvuni
echo "<br>";
printf('Ringi pindala on %.2f cm.', $pindala); //.2f komakohad 2 tk

?>