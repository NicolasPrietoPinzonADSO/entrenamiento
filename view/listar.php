<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('../config/config.php');
    //Incluimos la clase conexion a la base de datos
    require_once('../libs/Database.php');
    // Incluimos la clase usuario
    require_once('../model/datos.php');
    $database = new Database();
    $connection = $database->getConnection();
    $model = new datos($connection);
    $users = $model->mostrar();
    ?>

    <table>
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Email
                </th>
                <th>
                    Teléfono
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['nombre']; ?></td>
                    <td><?php echo $user['apellido']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
