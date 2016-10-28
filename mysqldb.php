<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<h2>SELECT * FROM test WHERE erg < 15</h2>
<?php

include('connect_mysqldb.php');
include('./Functions/mysqltable.php');

// SELECT & WHERE
$abfrage = 'SELECT * FROM test WHERE erg < 15';
$result = $conn->query($abfrage);
mySqldbTable();
//
?>

<br><br><br><h2>SELECT * FROM test ORDER BY reg ASC</h2>

<?php
// ORDER BY
$abfrage = 'SELECT * FROM test ORDER BY reg ASC';
$result = $conn->query($abfrage);
mySqldbTable();
//
?>

<br><br><br><h2>SELECT * FROM test ORDER BY reg ASC LIMIT 2, 3</h2>

<?php
// LIMIT
$abfrage = 'SELECT * FROM test ORDER BY reg ASC LIMIT 2, 3';
$result = $conn->query($abfrage);
mySqldbTable();
//
?>

</html>
