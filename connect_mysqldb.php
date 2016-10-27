<!DOCTYPE html>
<html>
    <meta charset="utf-8">


<?php

$MYSQL_HOST = "127.0.0.1";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "helloDB";


$conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}










//print_r($conn);

//$sql = $conn->query("SHOW DATABASES");
//while($row = $sql->fetch_object())
//{
//  echo $row->Database.'<br>';
//}

?>



</html>
