<h1> Oppgave 1 </h1>
<form method="post" attribute="post" action="/modul3.php">
    <p> Navn</p>
<input type = "text" name = "navn" placeholder = "Ola nordmann"> 
    <p> alder </p>
<input type="number" name = "alder" placeholder = "18">
<input type="submit" value="Send inn">
</form>

<?php
$navn = $_POST["navn"];
$alder = $_POST["alder"];

if(!empty($_POST["navn"]) && !empty($_POST["alder"]) ){
    if($alder >= 18){
        echo "Navnet ditt er " . $navn . " og alderen din er " . $alder . ", du er myndig";
    } else {
        echo "Navnet ditt er " . $navn . " og alderen din er " . $alder . ", du er ikke myndig.";
    }
    
    
    switch ($alder) {
        case $alder >=13 && $alder <= 19 :
          echo "<br>Du er en tenåring" ;
          break;
        case $alder >=20 && $alder <=25:
            echo "<br>Du er mellom 20 og 25" ;
          break;
        case $alder >=26 && $alder <=30:
            echo "<br>Du er mellom 26 og 30" ;
          break;
        
    }
    
} else{
    echo "Woops du glemte å fylle inn begge feltene";
}

?>
<h2> <br> Oppgave 2 </h2>
<?php
$count = null;
for ($i = 0; $i <= 9; $i++) {
    $count += $i;
    echo $i . "<br>";
}
echo "«Juhuu,  ferdig  å  telle!Summen  av  tallene  ble " .  $count;


?>


<h2> <br> Oppgave 3 </h2>
<form method="post" attribute="post" action="/modul3.php">
    <p> Tall 1</p>
<input type = "number" id = "first" name = "first"> 
    <p> Tall 2 </p>
<input type="text" id = "second" name = "second">
<input type="submit" value="Regn ut">
</form>

<?php
$tall1 = $_POST["first"];
$tall2= $_POST["second"];

for($i = 0; $i <= 10; $i++) {
$sum = $tall1 + $tall2;
$snitt = $sum / 2;
$diff = $tall1 - $tall2;
echo "Summen av " . $tall1++ . " og " . $tall2  . " er " .  $sum . ", Gjennomsnittet er " . $snitt . ", Differansen er " . $diff;
echo "<br>";
}
?>


<h2> <br> Oppgave 4 </h2>

<form method="post" attribute="post" action="/modul3.php">
    <p> Navn</p>
<input type = "text" id = "navn" name = "navn"> 
    <p> Addresse </p>
    <input type = "text" id = "addresse" name = "addresse"> 
    <p> Telefon </p>
<input type="number" id = "telefon" name = "telefon">
<input type="submit" value="Send inn">
</form>


<?php
if(!empty($_POST['navn']) ){
    $navn = true;
}else{
    echo "Feltet navn er ikke fylt ut <br>";}
    
if(!empty($_POST['addresse']) ){
    $addresse = true;
}else{
    echo "Feltet addresse er ikke fylt ut <br>";}

if(!empty($_POST['telefon']) ){
    $telefon = true;   
}else{    
    echo "Feltet telefon er ikke fylt ut <br>";}

if($navn && $addresse && $telefon){
    echo "alt ok!";
}

?>

<h2> <br> Oppgave 5 </h2>
<?php

$fornavn = "Gustav";


date_default_timezone_set('Europe/Berlin');
$time = date('H:i:s');
echo "Klokken er " . $time;
echo "<br>";



$Timecheck = new DateTime($time);


switch ($Timecheck) {
    case $Timecheck >= new DateTime('06:00:00')  && $Timecheck <= new DateTime('08:59:59'):
        $velkommen = "God morgen ";
        break;
        case $Timecheck >= new DateTime('09:00:00')  && $Timecheck <= new DateTime('11:59:59'):
            $velkommen = "God formiddag ";
             break;
             case $Timecheck >= new DateTime('12:00:00')  && $Timecheck <= new DateTime('17:59:59'):
                $velkommen = "God ettermiddag ";
                 break;
                 case $Timecheck >= new DateTime('18:00:00')  && $Timecheck <= new DateTime('23:59:59'):
                    $velkommen = "God kveld ";
                     break;
                     case $Timecheck >= new DateTime('00:00:00')  && $Timecheck <= new DateTime('05:59:59'):
                        $velkommen = "God natt ";
                         break;
    default:
        echo "error";
        break;
}





$velkommen = $velkommen . $fornavn . "!";
echo $velkommen;
?>





