<?php require_once("../../Templates/header.php") ?>

<h1>Empleados</h1>
    <div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="./crear.php" role="button">Agregar Registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Sebastian Bustamante</td>
                        <td>Imagen.jpg</td>
                        <td>CV.pdf</td>
                        <td>Desarrollador Full Stack</td>
                        <td>23/09/2022</td>
                        <td><a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-info" href="../empleados/editar.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>


<?php require_once("../../templates/footer.php") ?>