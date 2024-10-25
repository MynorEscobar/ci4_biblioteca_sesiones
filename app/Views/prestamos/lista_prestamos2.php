<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista prestamos 2</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Prestamos</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No. prestamo</th>
                    <th>Código Libro</th>
                    <th>Título</th>
                    <th>Fecha prestamo</th>
                    <th>Fecha devolución</th>
                    <th>Nombre estudiante</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //cargar los datos de la busqueda
                    foreach($datosPrestamos as $datos):
                    ?>
                    <tr>
                        <td><?=$datos['numero_prestamo']; ?></td>
                        <td><?=$datos['codigo_libro']; ?></td>
                        <td><?=$datos['titulo']; ?></td>
                        <td><?=$datos['fecha_prestamo']; ?></td>
                        <td><?=$datos['fecha_devolucion']; ?></td>
                        <td><?=$datos['estudiante_nombre']; ?></td>
                        <td>Actualizar / eliminar</td>
                    </tr>
                    <?php
                    endforeach;
                ?>

            </tbody>
        </table>

    </div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>