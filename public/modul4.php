<?php 
#Oppgave 1
echo "<br> Oppgave 1<br>";

$oppgave1[0] = "Jens"; 
$oppgave1[3] = "Arne";
$oppgave1[5] = "Olav";
$oppgave1[7] = "Kristian";
$oppgave1[8] = "John";
$oppgave1[15] = "Daniel";

//bruker en foreach løkke for å printe ut verdiene i matrisen og indeksen til verdiene.
//Bruker man en løkke med iterator vil den printe ut tomme verdier på indeks 1,2,4,6 osv.
foreach ($oppgave1 as $value){
    print_r($value . " --> " . array_search($value, $oppgave1));
    echo "<br>";
}

#Oppgave 2
echo "<br> Oppgave 2 <br>";
for($i=0; $i<=9; $i++){
    $matrise[$i] = "svart";
    print_r($matrise[$i] . " --> " . $i);
    echo("<br>");
}
echo("<br>");
for($i=0; $i<=9; $i++){
    $matrise[$i] = "gul";
    print_r($matrise[$i] . " --> " . $i);
    echo("<br>");
}
echo("<br>");
for($i=0; $i<=9; $i++){
    $n = $i + 10;
    $matrise[$n] = $matrise[$i];
    unset($matrise[$i]);
    print_r($matrise[$n] . " --> " . $n);
    echo("<br>");
}

#Oppgave 3

echo "<br> Oppgave 3 <br>";
?>