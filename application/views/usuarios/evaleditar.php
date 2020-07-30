
<?php
$db = new mysqli('localhost','root','','biblioteca_g9');
if($db->connect_errno)
{
    die("Error al conectar : ".$db->connect_error);
}


$usua_id = $_POST['usua_id'];
$usua_login = $_POST['usua_login'];
$usua_password = $_POST['usua_password'];
$usua_codigo = $_POST['usua_codigo'];
$usua_nombres = $_POST['usua_nombres'];
$usua_apellidos = $_POST['usua_apellidos'];
$usua_direccion = $_POST['usua_direecion'];
$usua_email = $_POST['usua_email'];
$usua_telefono = $_POST['usua_telefono'];
$esadmin = $_POST['usua_esadmin'];

$result = $db->query("UPDATE persona SET usua_login='{$usua_login}', usua_password='{$usua_password}', usua_codigo='{$usua_codigo}',  usua_nombres='{$usua_nombres}', usua_apellidos='{$usua_apellidos}', usua_direccion='{$usua_direccion}', usua_email='{$usua_email}', usua_telefono='{$usua_telefono}' WHERE usua_id='{$usua_id}'");

if(!$result){
    die("Error al consultar: ".$db->error);
}

header("location:lista.php");

?>
