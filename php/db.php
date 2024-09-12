<?php
$server='localhost';
$user='root';
$password='';
$port= 3306;
$dbname="nuevo";

$sql = mysqli_connect($server,$user,$password,$dbname,$port);

if(!$sql){
    die("la conexion ha fallado". mysqli_connect_error());
}
?>