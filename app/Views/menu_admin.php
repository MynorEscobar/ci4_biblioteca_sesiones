<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
</head>
<body>
    <h1>Menu de Administracion</h1>
    <p>
        bienvenido <?=session()->get('usuario')?>

    </p>
    
    <a href="<?=base_url('listar_empleados')?>">Empleados</a>
    <br>
    <a href="<?=base_url('listar_prestamos')?>">Prestamos</a>
    <br>
    <a href="<?=base_url('listar_prestamos2')?>">Prestamos Ejemplo 2</a>

    <br>
    <a href="<?=base_url('cerrar_sesion');?>">Cerrar sesión</a>

</body>
</html>