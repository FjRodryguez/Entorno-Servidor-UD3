<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Iterativas 08</h1>

</div>
<!-- Content Row -->

<div class="row">
    <?php
    if(isset($data['resultado'])){
    ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Datos asignaturas</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            Asignatura
                        </th>
                        <th>
                            Media
                        </th>
                        <th>
                            Suspensos
                        </th>
                        <th>
                            Aprobados
                        </th>
                        <th>Nota más alta</th>
                        <th>Nota mínima</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($data['resultado'] as $asignatura => $datos){
                        ?>
                        <tr>
                            <td><?php echo $asignatura ?></td>
                            <td><?php echo (is_numeric($datos['media'])) ? number_format($datos['media'], 2, ',') : $datos['media']; ?></td>
                            <td><?php echo $datos['suspensos'] ?></td>
                            <td><?php echo $datos['aprobados'] ?></td>
                            <td><?php echo $datos['max']['alumno'] ?>: <?php echo $datos['max']['nota'] ?></td>
                            <td><?php echo $datos['min']['alumno'] ?>: <?php echo $datos['min']['nota'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-success">
            <?php
            foreach ($data['listados']['apruebanTodo'] as $alumno){?>
                <p><?php echo $alumno?></p>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-warning">
            <?php
            foreach ($data['listados']['hanSuspendido'] as $alumno){?>
                <p><?php echo $alumno?></p>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-danger">
            <?php
            foreach ($data['listados']['noPromocionan'] as $alumno){?>
                <p><?php echo $alumno?></p>
                <?php
            }
            ?>
        </div>
    </div>
        <?php
    }
    ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Datos asignaturas</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!--<form action="./?sec=formulario" method="post">                   -->
                <form method="post" action="./?sec=iterativas08">
                    <!--<input type="hidden" name="sec" value="iterativas01" />-->
                    <div class="mb-3">
                        <label for="texto">Datos a analizar:</label>
                        <textarea class="form-control" name="texto" id="texto" rows="10" placeholder="Inserte el json a analizar"><?php echo isset($data['input']['texto']) ? $data['input']['texto'] : ''; ?></textarea>
                        <p class="text-danger small"><?php echo isset($data['errores']['texto']) ? $data['errores']['texto'] : ''; ?></p>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
