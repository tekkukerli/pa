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
?>