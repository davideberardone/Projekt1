<!DOCTYPE html>
<html>
    <meta charset="utf-8">

<?php


function mySqldbTable()
{
  global $mysqli, $result;

  while ($table = $result->fetch_object())
  {
    print_r($table);
    echo '<br>';
  }

}
?>

</html>
