<!DOCTYPE html>
<html>
  <head>
    <title>Gerade & Ungerade</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
  </head>
  <body>



<?php
echo '<table width="100%">';
echo '<tr>';
for ($i=0; $i < 1000; $i++) {

if($i % 2 == 0)
{
  echo '</tr>';
  echo '<tr>';
  echo '<td>'.$i.'</td>';

}
else {
  echo '<td>'.$i.'</td>';
}


}

echo '</table>';

 ?>
</body>
</html>
