<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <main>
        <section class="container ">
            <div class="row justify-content-center mt-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h1 class="card-title text-center text-white">Registro Usuario</h1>
                        </div>
                        <div class="card-body">
                            <form action="../controller/profileController.php" method="post">
                                <div>
                                    <label>Nombre </label>
                                    <input type="text" class="form-control mt-2 w-75" name="user">
                                </div>
                                <div>
                                    <label>Apellido</label>
                                    <input type="text" class="form-control mt-2 w-75" name="apellido">
                                </div>
                                <div>
                                    <label>Email</label>
                                    <input type="text" class="form-control mt-2 w-75" name="email">
                                </div>
                                <div>
                                    <label>Pone</label>
                                    <input type="text" class="form-control mt-2 w-75" name="pone">
                                </div>
                                <input type="submit" value="Enviar" id="enviar" name="enviar"
                                    class="btn btn-primary mt-4 w-100">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>