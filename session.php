<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
<?php
// Start Session, Variablen löschen
session_start();
$_SESSION = array();

$_SESSION['Farbe'] = 'rot';
$_SESSION['Laenge'] = '21cm';
$_SESSION['Breite'] = '6cm';

echo 'Der Gegenstand ist ' . $_SESSION['Farbe'] . ', ' . $_SESSION['Laenge'] . ' lang
 und ' . $_SESSION['Breite'] . ' breit.';
?>
<h3><a href='./session2.php'>Session 2</a></h3>

</html>
