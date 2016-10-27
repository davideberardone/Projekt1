<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
