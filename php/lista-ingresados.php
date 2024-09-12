<?php
include 'db.php';
$queryingresados = "SELECT * FROM crear";

$resultingresados = mysqli_query($sql,$queryingresados);

$ingresados = [];

while($row = mysqli_fetch_assoc($resultingresados)){
    $ingresados[] = $row;
}

echo json_encode([
'ingresados' => $ingresados
])




?>