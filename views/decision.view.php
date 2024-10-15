<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej1']; ?></h6>
            </div>
            <div class="card-body">
                <p>Número 1: <?php echo $data['ej1_x']; ?>.</p>
                <p>Número 2: <?php echo $data['ej1_y']; ?>.</p>
                <p><?php echo $data['ej1_resultado'] ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej2']; ?></h6>
            </div>
            <div class="card-body">
                <p>Número 1: <?php echo $data['ej2_n1']; ?>.</p>
                <p>Número 2: <?php echo $data['ej2_n2']; ?>.</p>
                <p>Número 3: <?php echo $data['ej2_n3']; ?>.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej3']; ?></h6>
            </div>
            <div class="card-body">
                <p>Segundos totales: <?php echo $data['ej3_input']; ?>.</p>
                <p>Días: <?php echo $data['dias']; ?>.</p>
                <p>Horas: <?php echo $data['horas']; ?>.</p>
                <p>Minutos: <?php echo $data['minutos']; ?>.</p>
                <p>Segundos: <?php echo $data['segundos']; ?>.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej4']; ?></h6>
            </div>
            <div class="card-body">
                <div class="12"><p class="text-<?php echo $data['es_bisiesto'] ? 'success' : 'danger'; ?>"><?php echo $data['año']; ?></p></div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej5']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                if ($data['mayor_media']){
                    ?>
                    <div class="col-6">
                        <div class="alert alert-success">
                            <p class="">Felicidades, tienes un salario por encima de la media.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="alert alert-success">
                            <p class="">Felicidades, tienes un salario por encima de la media.</p>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej6']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">Nota: <?php echo number_format(num: $data['nota'], decimals: 2, decimal_separator: ','); ?></div>
                    <div class="col-6"><p class="text-<?php echo $data['color_nota']; ?>"><?php echo ucfirst($data['texto_nota']); ?></p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej7']; ?></h6>
            </div>
            <div class="card-body">
                <p><?php echo $data["mensaje"];?></p>
            </div>
        </div>
    </div>
</div>





