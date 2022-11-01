<?php

include('bd.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>TableSecond</title>
</head>

<body>
    <table>
        <h1>My Table</h1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Address</td>
        </tr>
        <?php
        $select = mysqli_query($bd, "SELECT * FROM `tablesecond`");
        $mylanguage = mysqli_fetch_assoc($select);
        do { ?>

            <tr>
                <td><?= $mylanguage['id'] ?></td>
                <td><?= $mylanguage['Name'] ?></td>
                <td><?= $mylanguage['Email'] ?></td>
                <td><?= $mylanguage['Gender'] ?></td>
                <td><?= $mylanguage['Address'] ?></td>
            </tr>
        <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>


    </table>

    <button>
        Export
    </button>
</body>

</html>