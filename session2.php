<!DOCTYPE html>
<html>
  <head>
    <title>Session</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
<?php
// Start Session
session_start();


$_SESSION['Farbe'] = 'rot';
$_SESSION['Laenge'] = '21cm';
$_SESSION['Breite'] = '6cm';

echo 'Der Gegenstand ist ' . $_SESSION['Farbe'] . ', ' . $_SESSION['Laenge'] . ' lang
 und ' . $_SESSION['Breite'] . ' breit.';
?>
<h3><a href='./session.php'>Session 1</a></h3>

</html>
