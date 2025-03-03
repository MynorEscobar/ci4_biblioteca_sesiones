<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prestamos</title>
</head>

<body>
    <div class="container-fluid">

    
    <h1>Lista de prestamos</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Prestamo
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Prestamo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--FIN MODAL-->

    <!--Tabla con datos-->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Numero Prestamo</th>
                <th>Codigo de libro</th>
                <th>Titulo del libro</th>
                <th>Fecha prestamo</th>
                <th>Fecha devolución</th>
                <th>Nombre Estudiante</th>
                <th>Nombre Empleado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
               
            foreach($prestamos as $datos):
            ?>
            <tr>
                <td><?=$datos['numero_prestamo']; ?></td>
                <td><?=$datos['codigo_libro']; ?></td>
                <td><?=$datos['titulo']; ?></td>
                <td><?=$datos['fecha_prestamo']; ?></td>
                <td><?=$datos['fecha_devolucion']; ?></td>
                <td><?=$datos['estudiante_nombre']; ?></td>
                <td><?=$datos['empleado_nombre']; ?></td>
                <td>
                    <a href="">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="">
                        <span class="material-icons">delete</span>Eliminar
                    </a> 
                </td>
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