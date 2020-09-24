<?php 
#Oppgave 1
echo "<br><h1>Oppgave 1</h1><br>";

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
echo "<br><h1> Oppgave 2 </h1><br>";
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
$debug = false;
echo "<br><h1> Oppgave 3 </h1><br>";
$Runde=1;
$Deltakere = array("Johanne" => 0, "Frank" => 1, "Jens" => 2, "John" => 3, "Arne" => 4, "Susanne" => 5, "Daniel" => 6, "Jonas" => 7, "Johannes" => 8, "Rune" => 9);


echo("Deltakere:<br>");
foreach($Deltakere as $contestors){
    echo(array_search($contestors,$Deltakere));
    echo("<br>");
}
echo ("<br>");
while(sizeof($Deltakere)>1){
    echo("Runde: " . $Runde);

foreach($Deltakere as $contestors){
    $names = array_search($contestors,$Deltakere);
    $Deltakere[$names] = rand(1,50);
}
?>

<pre><?php if($debug){print_r($Deltakere);}?></pre>

<?php
$lowest = min($Deltakere);
$lowestDrawingPerson = array_search(min($Deltakere),$Deltakere);
echo("Det laveste nummeret trukket var " . $lowest . "<br>");
echo("<b>" . $lowestDrawingPerson . "</b>");

unset($Deltakere[$lowestDrawingPerson]);
while(array_search($lowest, $Deltakere)){
    $duplicate = array_search(min($Deltakere),$Deltakere);
    echo(" , <b>" . $duplicate . "</b>");

unset($Deltakere[$duplicate]);
}
echo(" ble fjernet fra konkurransen<br>");


$Runde++;
}
$winner = array_search(min($Deltakere),$Deltakere);
echo("##############################<br>");
echo("Gratulerer til <b>" . $winner ."</b> for å ha vunnet konkurransen");
echo("<br>##############################");
 
?>

<br><h1>Oppgave 4</h1></br>
<p> Alle feltene er obligatoriske </p>
<form method="post" attribute="post" action="/modul3.php">
    <p> Fornavn</p>
<input type = "text" name = "fname" placeholder = "Fornavn" required> 
    <p> Etternavn</p>
<input type = "text" name = "lname" placeholder = "Etternavn" required> 
    <p> Addresse </p>
<input type="text" name = "address" placeholder = "Hundremeterskogen" required>
    <p>Telefon </p>
<input type="number" name = "phone" placeholder = "123456789" required>
    <p>E-post </p>
<input type="email" name = "address" placeholder = "Ola.Nordmann@test.no" required>
    <p>Fødselsdato </p>
<input type="date" name="bdate" required>
    <p>Kjønn </p>
<label for="gender"></label>
<select id="gender" name="gender" required>
  <option value="Mann">Mann</option>
  <option value="Kvinne">Kvinne</option>
  <option value="Annet">Annet</option>
</select>
    <p>Interesser</p>
<input type="text" name="interests" required>
    <p>Kursaktiviteter</p>
<input type="text" name="Activities" required>
<input type="submit" value="Send inn">
</form>
