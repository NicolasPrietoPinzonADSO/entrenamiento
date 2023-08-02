<?php
require_once('../config/config.php');
//Incluimos la clase conexion a la base de datos
require_once('../libs/Database.php');
// Incluimos la clase usuario
require_once('../model/datos.php');

$database = new Database();
//Llamamos el metodo conexion que es quien nos retorna la conexion a la base de datos
$connection = $database->getConnection();
//Creamos la instancia del modelo usuario y pasamos la conexion a la base de datos
$model = new datos($connection);


if(isset($_POST['user'])){
    $user = ($_POST['user']);
    $token = bin2hex(random_bytes(16));

    $model->setUsername($user);
    $model->setToken($token);
}
$model->addDatosUser();