<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Iterativas 02</h1>

</div>

<!-- Content Row -->
<?php if (isset($data['ordenados'])) { ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success">
                <p>Valores ordenados: <?php echo implode(",", $data['ordenados']) ?></p>
            </div>
        </div>
    </div>
    <?php
}
?>
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ordenar números</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3 col-12">
                        <label for="textarea">Inserte una cadena de texto formada por número separados por comas</label>
                        <textarea class="form-control" id="numeros" name="numeros"
                                  rows="3"><?php echo $data['input_numeros'] ?? ''; ?></textarea>
                        <p class="text-danger small"><?php echo $data['errors']['numeros'] ?? ''; ?></p>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>