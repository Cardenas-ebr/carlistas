<?php
include 'db.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$consulta = "SELECT * FROM crear WHERE usuario = '$usuario'";


$result = mysqli_query($sql, $consulta);

if(mysqli_num_rows($result) > 0){
    $crear = mysqli_fetch_assoc($result);
    if($password === $crear['contraseña']){
        echo("iniciar sesion");
    }else{
        echo("Contraseña incorrecta");
    }
}else{
    echo("usuario no existe");
}


?>