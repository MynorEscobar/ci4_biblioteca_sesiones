<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar Empleado</h1>

    <form action="<?=base_url('modificarEmpleado')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$empleado['codigo_empleado']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$empleado['nombre']?>">
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" value="<?=$empleado['apellido']?>">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" value="<?=$empleado['direccion']?>">
        <br>
        <label for="txtEmail">Correo Electrónico:</label>
        <input type="text" name="txtEmail" value="<?=$empleado['email']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>