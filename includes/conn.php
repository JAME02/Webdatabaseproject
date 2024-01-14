<?php
$host ="localhost";
$user ="root";
$pwd ="";
$db = "dbproject";
$conn = mysqli_connect($host,$user,$pwd,$db);
if (!$conn)
{
    echo "error connection";
}
mysqli_set_charset($conn,"utf8");
?>
