<html>
<body>
<?php
$alder = 18;
$navn = "Gustav";
?>
<h1> Oppgave 1 </h1>
<table border="1">
    <tr>
    <th>Navn </th>
    <th>Alder </th>        
</tr>
    <tr> 
    <td><?php echo $navn; ?> </td>
    <td><?php echo $alder; ?> </td>

    </tr>
</table>

<ul>
    <li>
        <?php echo $navn ?>
    </li>
    <li>
        <?php echo $alder ?>
    </li>
</ul>

<p>Hei mitt navn er <?php echo "$navn"; ?> og jeg er <?php echo "$alder";?> år </p>
<h1> Oppgave 2 </h1>

<form method="post" attribute="post" action="/modul2.php">
    <p> Tall 1</p>
<input type = "number" id = "first" name = "first"> 
    <p> Tall 2 </p>
<input type="number" id = "second" name = "second">
<input type="submit" value="Regn ut">
</form>

<?php
$first = $_POST["first"];
$second= $_POST["second"];
$sum = $first + $second;
$snitt = $sum / 2;
$diff = $first - $second;
echo "Summen av " . $first . " og " . $second  . " er " .  $sum . ", Gjennomsnittet er " . $snitt . ", Differansen er " . $diff;
?>

<h1> Oppgave 3 </h1>

<?php
//number of seconds to convert
$sec = 4400;
$hours = floor(4400 / 3600);
$seconds = $sec % 3600;
$minutes = floor($seconds / 60);
$seconds = $seconds % 60;


echo $sec . " sekunder = " . $hours . " time(r), " . $minutes . " minutter og " . $seconds . " sekunder.";
?>

<h1> Oppgave 4 </h1> 
<?php
$medlem1 = 1234;
$medlem2 = 1235;
echo $medlem1 . " == " . $medlem2 . " ";
if($medlem1 == $medlem2)
echo "True";
else
echo "False";
?>

<h1> Oppgave 5 </h1>
<?php 
$f_name = "Gustav";
$l_name = "Eikaas";
$addr = "Hundremeter skogen"; 
$phone = 1881;
$mail = "mail@mail.com";
$date = "01.01.1956";
$gender = "Mann";
$interests = "PHP <3 ";
$courseactivities = "N/A";
$signup = "28.10.2020";
$status = "Betalt";
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
            <th>Medlem siden:</th>
            <th>Kontigentstatus</th>

        </tr>
        <tr>
            <td><?php echo$f_name; ?></td>
            <td><?php echo $l_name; ?></td>
            <td><?php echo $addr; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $mail; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $interests; ?></td>
            <td><?php echo $courseactivities; ?></td>
            <td><?php echo $signup; ?></td>
            <td><?php echo $status; ?></td>
           
        </tr>


</body>    
</html>
