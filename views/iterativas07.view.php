<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Iterativas 07</h1>

</div>

<!-- Content Row -->
<?php if (isset($data['win'])) { ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success">
                <p><?php echo implode(", ", $data['resultado'])?></p>
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
                <h6 class="m-0 font-weight-bold text-primary">Bingo</h6>
            </div>
            <div class="card-body">
                <p>Bolas salieron: <?php echo implode(", ", $data['bolasSalieron'])?></p>
                <p>Cartón: <?php echo implode(", ", $data['carton'])?></p>
                <p>Cartón salieron: <?php echo implode(", ", array_intersect($data['carton'], $data['bolasSalieron']))?></p>
            </div>
            <div class="card-footer">
                <div class="col-12">
                    <div class="mb-3">
                        <a href="./?sec=iterativas07" class="btn btn-primary">Sacar bola</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>