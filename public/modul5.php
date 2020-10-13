<html>
<body>


<h1> Oppgave 1 </h1>
<form method="get" attribute="get" action="/modul5.php">
    <p> Etternavn</p>
<input type = "text" name = "lname" > 
<input type="submit" value="Send inn">
</form>

<?php
$etternavn = $_GET["lname"];


$etternavn = strtolower($etternavn);
$etternavn = ucfirst($etternavn);

echo $etternavn;
echo "<br>Lengden på etternavnet er: " . strlen($etternavn);
?>

<h1> Oppgave 2 </h1>
<?php
$passord_gen = $_GET["lname"];

$pass = hash("SHA256", $passord_gen, FALSE);

$clipped = substr($pass,0,7);
if(strpbrk($clipped, '1234567890') == false){
$clipped = substr($clipped,0,6);
$clipped = $clipped . rand(0,9);
}
$clipped = $clipped . chr(rand(65,90));

echo $clipped;


?>
<h1> Oppgave 3 </h1>
<?php
$etternavn2 = $_GET["lname"];
$etternavn2 = strip_tags($etternavn2);
echo $etternavn2;
?>

<h1> Oppgave 4 </h1>
<form method="get" attribute="get" action="/modul5.php">
<p>Fødselsdato </p>
<input type="date" name="bdate" >
<input type="submit" value="Regn ut alder">
</form>

<?php
$in_date = $_GET["bdate"];

$bdate = date_create($in_date);
$date_now = date_create(date('Y-m-d'));

$interval = date_diff($bdate, $date_now);

$years = $interval->format('%y');
$months = $interval->format('%m');
$days = $interval->format('%d');

$days = $days + ($months * 30);
if($bdate < $date_now){
echo ($years . " år " . $days . " dager");
}else{
    echo ("Velg en dato som er tidligere enn dagens dato");
}
?>

<h1> Oppgave 5 </h1>

<?php
$to = 'gustav.eikaas@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
 'From' => 'test123@example.com',
 'Reply-To' => 'test123@example.com',
 'Cc' => 'cc@example.com',
 'X-Mailer' => 'PHP/' . phpversion()
);
var_dump(mail($to, $subject, $message, $headers));
?>


</body>
</html>
