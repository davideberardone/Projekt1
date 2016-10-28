<!DOCTYPE html>
<html>
  <head>
    <title>Primzahlen</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

<?php

for ($i=1; $i < 1000; $i++)
{

  for ($x=2; $x <= $i; $x++)
  {
    if ($i % $x == 0)
    {
      if ($i == $x)
      {
      echo '<p>'.$i.'</p>';
      }
      break;

    }


  }

}

?>



</html>
