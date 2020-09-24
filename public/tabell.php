<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Enkel test med tabell</title>
    </head>
<?php 
    $navn = "Gustav";
    $alder = 18; 
?>
    <table border="1">
        <tr>
            <th>Navn</th>
            <th>Alder</th>
        </tr>
        <tr>
            <td><?php echo$navn; ?></td>
            <td><?php echo $alder; ?></td>
        </tr>
</table>
<body>

</body>
</html>