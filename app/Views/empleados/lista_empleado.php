<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">

    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Empleados</title>
</head>

<body>

    <?php
    if (session()->has('usuario')) {
        echo "La sesión 'usuario' está activa.";
        echo "<br>bienvenido: ". session()->get('usuario');
        echo "<br>codigo de usuario: ". session()->get('codigo');
        echo "<br>";
        ?>
        <a href="<?=base_url('cerrar_sesion');?>">Cerrar sesión</a>
        <?php
    } else { ?>
        <script>
            window.location.href = "<?= base_url('/') ?>";
        </script>
    <?php
    }
    ?>


    <div class="contenedor">
        <h1>Empleados</h1>
        <a href="<?= base_url('ver_formulario_nuevo_empleado') ?>">
            <span class="material-icons">person_add</span>
        </a>
        <input type="button" name="imprimir" value="Imprimir" onclick="window.print();">

        <?php
        //print_r($empleados);
        ?>
        <table id="dataTable">
            <thead>
                <tr class="encabezado_tabla">
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $no_fila = 0;
                foreach ($misEmpleados as $datos):
                    $no_fila = $no_fila + 1; //$no_fila++;
                    if ($no_fila % 2 == 0) {
                        echo "<tr class='fila_par'>";
                    } else {
                        echo "<tr class='fila_impar'>";
                    }
                ?>
                    <!-- <tr> este elemento lo creare en las condicionantes para cambiar color -->
                    <td><?php echo $datos['codigo_empleado']; ?></td>
                    <td><?= $datos['nombre']; ?></td>
                    <td><?= $datos['apellido']; ?></td>
                    <td><?= $datos['direccion']; ?></td>
                    <td><?= $datos['email']; ?></td>
                    <td>
                        <a href="<?= base_url('frm_modificar_empleado/' . $datos['codigo_empleado']) ?>">
                            <span class="material-icons">edit</span>Actualizar
                        </a>

                        <a href="<?= base_url('eliminar_empleado/' . $datos['codigo_empleado']) ?>">
                            <span class="material-icons">delete</span>Eliminar
                        </a>
                    </td>
                    </tr>
                <?php
                endforeach;

                ?>

            </tbody>
        </table>

        <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
        <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>

    </div>
</body>

</html>