<?php
//aritmeetilised operaatorid
$x = 8;
$y = 2;
$liitm = $x + $y; //fikseeritakse valem
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
  <thead>
    <tr>
      <td>Operaator</td>
      <td>Nimetus</td>
      <td>Näide</td>
      <td>Tulemus</td>
    </tr>
</thead>

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
$vormindatud = sprintf('Vastuse: %0.3f', $k);
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
echo "<br>";

$celcius = 15;
$fahrenheit = (9/5) * $celcius + 32;
$tulemus = sprintf('Celcius %0.2f kraadi on %0.2f Fahrenheit kraadi. ', $celcius , $fahrenheit);
echo $tulemus;
echo "<br>";
echo "<br>";

//ringi raadius

$r = 10;
$d = 20;
$C = 2 * pi() * $r;
$pindala = pi() * $r * $r;
echo "<br>";

$ümbermõõt = sprintf('Ringi ümbermõõt on %d cm.', $C);
echo "<br>";
$rpindala = sprintf('Ringi pindala on %d cm.', $pindala);

echo $ümbermõõt;
echo $rpindala;

?>