<!DOCTYPE html>
<html>
    <meta charset="utf-8">


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
