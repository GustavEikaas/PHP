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
 <!--
Man kan enkelt vise brukeren hvilke felt som ikke er fylt ut i et skjema, med å bruke required i Input linjen.
Jeg velger å gjøre det i PHP, i tilfelle oppgavebeskrivelsen var vag.

  -->
<br><h1>Oppgave 4</h1></br>
<p> Alle feltene er obligatoriske </p>
<form method="post" attribute="post" action="/modul4.php">
    <p> Fornavn</p>
<input type = "text" name = "fname" placeholder = "Fornavn" > <!-- Kunne bare satt inn required etter "Fornavn"  -->
    <p> Etternavn</p>
<input type = "text" name = "lname" placeholder = "Etternavn" > 
    <p> Addresse </p>
<input type="text" name = "address" placeholder = "Hundremeterskogen" >
    <p>Telefon </p>
<input type="number" name = "phone" placeholder = "123456789" >
    <p>E-post </p>
<input type="email" name = "email" placeholder = "Ola.Nordmann@test.no" >
    <p>Fødselsdato </p>
<input type="date" name="bdate" >
    <p>Kjønn </p>
<label for="gender"></label>
<select id="gender" name="gender" >
  <option value="Mann">Mann</option>
  <option value="Kvinne">Kvinne</option>
  <option value="Annet">Annet</option>
</select>
    <p>Interesser</p>
<input type="text" name="interests" >
    <p>Kursaktiviteter</p>
<input type="text" name="activities" >
    <p>Rolle </p>
<input type="text" name="rolle" >
<input type="submit" value="Send inn">
</form>


<?php
if(empty($_POST['fname']) ){
    echo("Navn er ikke fylt ut<br>");
}else{
    $fname_check = true;
}
if(empty($_POST['lname']) ){
    echo("Etternavn er ikke fylt ut<br>");
}else{
    $lname_check = true;
}
if(empty($_POST['address']) ){
    echo("Addresse er ikke fylt ut<br>");
}else{
    $address_check = true;
}
if(empty($_POST['phone']) ){
    echo("Telefon er ikke fylt ut<br>");
}else{
    $phone_check = true;
}
if(empty($_POST['email']) ){
    echo("E-mail er ikke fylt ut<br>");
}else{
    $email_check = true;
}
if(empty($_POST['bdate']) || ctype_digit ( $_POST['bdate']) ){
    echo("Fødselsdato er ikke fylt ut<br>");
}else{
    $bdate_check = true;
}
if(empty($_POST['gender']) ){
    echo("Kjønn er ikke fylt ut<br>");
}else{
    $gender_check = true;
}
if(empty($_POST['interests']) ){
    echo("Interesser er ikke fylt ut<br>");
}else{
    $interests_check = true;
}
if(empty($_POST['activities']) ){
    echo("Aktiviteter er ikke fylt ut<br>");
}else{
    $activities_check = true;
}
if(empty($_POST['rolle']) ){
    echo("Rolle er ikke fylt ut<br>");
}else{
    $role_check = true;
}
#Sjekker om alle feltene er fylt ut
if($fname_check && $lname_check && $address_check && $phone_check && $email_check && $bdate_check && $gender_check &&  $interests_check && $activities_check && $role_check){
$fname_add = $_POST["fname"];
$lname_add = $_POST["lname"];
$address_add = $_POST["address"];
$phone_add = $_POST["phone"];
$email_add = $_POST["email"];
$bdate_add = $_POST["bdate"];
$gender_add = $_POST["gender"];
$interests_add = $_POST["interests"];
$activities_add = $_POST["activities"];
$roles_add = $_POST["rolle"];

$fname = array();
$lname = array();
$address = array();
$phone = array();
$email = array();
$bdate = array();
$gender = array();
$interests = array();
$activities = array();
$roles = array();

array_push($fname,$fname_add);
array_push($lname,$lname_add);
array_push($address,$address_add);
array_push($phone,$phone_add);
array_push($email,$email_add);
array_push($bdate,$bdate_add);
array_push($gender,$gender_add);
array_push($interests,$interests_add);
array_push($activities,$activities_add);
array_push($roles,$roles_add);


echo("Nytt medlem registrert");
?>
<table border="1">
        <tr>
            <th>Navn</th>
            <th>Etternavn</th>
            <th>Addresse</th>
            <th>Telefon</th>
            <th>E-post</th>
            <th>Fødselsdato</th>
            <th>Kjønn</th>
            <th>Interesser</th>
            <th>Kursaktiviteter</th>
            <th>Rolle</th>
        </tr>
        <tr>
            <td><?php echo $fname[0]; ?></td>
            <td><?php echo $lname[0]; ?></td>
            <td><?php echo $address[0]; ?></td>
            <td><?php echo $phone[0]; ?></td>
            <td><?php echo $email[0]; ?></td>
            <td><?php echo $bdate[0]; ?></td>
            <td><?php echo $gender[0]; ?></td>
            <td><?php echo $interests[0]; ?></td>
            <td><?php echo $activities[0]; ?></td>
            <td><?php echo $roles[0]; ?></td>
            
        </tr>
</table>
<?php
}
?>
<br><h1>Oppgave 5</h1></br>

<?php
$fname2[0] = "Arne";
$lname2[0] = "Olufsen";
$address2[0] = "Hundremeterskogen";
$phone2[0] = 1881;
$email2[0] = "Arne.olufsen@test.no";
$bdate2[0] = "2020-01-01";
$gender2[0] = "Mann";
$interests2[0] = "Fisking";
$activities2[0] = "Dansing";
$roles2[0] = "Leder";

?>

<form method="post" attribute="post" action="/modul4.php">
    <p> Fornavn</p>
<input type = "text" name = "fname2" value = <?php echo($fname2[0]); ?>  >
    <p> Etternavn</p>
<input type = "text" name = "lname2" value = <?php echo($lname2[0]); ?> > 
    <p> Addresse </p>
<input type="text" name = "address2" value = <?php echo($address2[0]); ?> >
    <p>Telefon </p>
<input type="number" name = "phone2" value = <?php echo($phone2[0]); ?> >
    <p>E-post </p>
<input type="email" name = "email2" value = <?php echo($email2[0]); ?> >
    <p>Fødselsdato </p>
<input type="date" name="bdate2" value = <?php echo($bdate2[0]); ?>>
    <p>Kjønn </p>
<label for="gender"></label>
<select id="gender" name="gender2" value = <?php echo($gender2[0]); ?>>
  <option value="Mann">Mann</option>
  <option value="Kvinne">Kvinne</option>
  <option value="Annet">Annet</option>
</select>
    <p>Interesser</p>
<input type="text" name="interests2" value = <?php echo($interests2[0]); ?> >
    <p>Kursaktiviteter</p>
<input type="text" name="activities2" value = <?php echo($activities2[0]); ?> >
    <p>Rolle </p>
<input type="text" name="role2" value = <?php echo($roles2[0]); ?> >
<input type="submit" value="Endre verdier">
</form>

<?php


if(!empty($_POST["fname2"]) && $fname2[0] != $_POST["fname2"]){
    $fname2[0] = $_POST["fname2"];
    echo("<br>Fornavn endret<br>");
} else if(empty($_POST["fname2"])) {
    echo "Du glemte å fylle inn fornavn";
}
if(!empty($_POST["lname2"])&& $lname2[0] != $_POST["lname2"]){
    $lname2[0] = $_POST["lname2"];
    echo("<br>Etternavn endret<br>");
}
if(!empty($_POST["address2"])&& $address2[0] != $_POST["address2"]){
    $address2[0] = $_POST["address2"];
    echo("<br>Addresse endret<br>");
}
if(!empty($_POST["phone2"])&& $phone2[0] != $_POST["phone2"]){
    $phone2[0] = $_POST["phone2"];
    echo("<br>Nummer endret<br>");
}
if(!empty($_POST["email2"])&& $email2[0] != $_POST["email2"]){
    $email2[0] = $_POST["email2"];
    echo("<br>Email endret<br>");
}
if(!empty($_POST["bdate2"])&& $bdate2[0] != $_POST["bdate2"]){
    $bdate2[0] = $_POST["bdate2"];
    echo("<br>Dato endret<br>");
}
if(!empty($_POST["gender2"])&&  $gender2[0] != $_POST["gender2"]){
    $gender2[0] = $_POST["gender2"];
    echo("<br>Kjønn endret<br>");
}
if(!empty($_POST["interests2"])&& $interests2[0] != $_POST["interests2"]){
    $interests2[0] = $_POST["interests2"];
    echo("<br>Interesse endret<br>");
}
if(!empty($_POST["activities2"])&&  $activities2[0] != $_POST["activities2"]){
    $activities2[0] = $_POST["activities2"];
    echo("<br>Aktivitet endret<br>");
}
if(!empty($_POST["role2"])&&  $roles2[0] != $_POST["role2"]){
    $roles2[0] = $_POST["role2"];
    echo("<br>Rolle endret<br>");
}


?>
<table border="1">
        <tr>
            <th>Navn</th>
            <th>Etternavn</th>
            <th>Addresse</th>
            <th>Telefon</th>
            <th>E-post</th>
            <th>Fødselsdato</th>
            <th>Kjønn</th>
            <th>Interesser</th>
            <th>Kursaktiviteter</th>
            <th>Rolle</th>
        </tr>
        <tr>
            <td><?php echo $fname2[0]; ?></td>
            <td><?php echo $lname2[0]; ?></td>
            <td><?php echo $address2[0]; ?></td>
            <td><?php echo $phone2[0]; ?></td>
            <td><?php echo $email2[0]; ?></td>
            <td><?php echo $bdate2[0]; ?></td>
            <td><?php echo $gender2[0]; ?></td>
            <td><?php echo $interests2[0]; ?></td>
            <td><?php echo $activities2[0]; ?></td>
            <td><?php echo $roles2[0]; ?></td>
            
        </tr>
</table>
