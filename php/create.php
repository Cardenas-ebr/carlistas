<?php
 include 'db.php';

$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$grado = $_POST['grado'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$password = $_POST['contraseña'];

$consulta ="INSERT INTO crear(primer_nombre, segundo_nombre, primer_apellido,segundo_apellido, grado, email, telefono, usuario,contraseña ) VALUES ('$primer_nombre', '$segundo_nombre','$primer_apellido','$segundo_apellido','$grado','$email','$telefono','$usuario','$password')";

if(mysqli_query($sql,$consulta)){
    echo"persona insertada en la base de datos";
}else {
    mysqli_close($sql);
}
?>