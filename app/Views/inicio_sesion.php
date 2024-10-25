<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio de sesión</title>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-4 offset-4">
                <h1>Inicio de sesión</h1>

                <?php
                /*verificar si la session existe, se crea cuando los datos del usuario son incorrectos, retornando
                    a nuevamente a esta página  
                */
                if (session('mensaje')) {
                    echo session('mensaje');
                }
                ?>

                <form action="<?= base_url('iniciar_sesion') ?>" method="post">
                    <div class="mb-3">
                        <label for="txtUsuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Ingrese usuario">
                    </div>
                    <div class="mb-3">
                        <label for="txtContra" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="txtContra" name="txtContra" placeholder="Ingrese contraseña">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-outline-primary" id="btnIniciar" name="btnIniciar" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>



    </div>


</body>

</html>