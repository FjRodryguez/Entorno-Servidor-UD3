<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej1']; ?></h6>
            </div>
            <div class="card-body">
                El cuadrado del número <?php echo $data['ej1_x']; ?> es <?php echo $data['ej1_y']; ?>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej2']; ?></h6>
            </div>
            <div class="card-body">
                El precio hora es <?php echo $data['precio_hora_ej2']; ?>€, se han trabajado <?php echo $data['numero_horas_ej2']; ?> horas por lo que se pagarán <?php echo $data['total_ej2']; ?>€
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej3']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">Área del rectańgulo: <?php echo $data['area_ej3']; ?></div>
                    <div class="col-12">Perímetro del rectángulo: <?php echo $data['perimetro_ej3']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej4']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">Alumna/o: <?php echo $data['nombre']; ?></div>
                    <div class="col-6">Edad: <?php echo $data['edad']; ?></div>
                    <div class="col-12">Nota media: <?php echo $data['nota_media']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej5']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">Precio noche alta: <?php echo $data['precion_alta']; ?>€</div>
                    <div class="col-6">Precio noche baja: <?php echo $data['precion_baja']; ?>€</div>
                    <div class="col-6">Noches alta: <?php echo $data['noches_alta']; ?></div>
                    <div class="col-6">Noches baja: <?php echo $data['noches_baja']; ?></div>
                    <div class="col-12">Total: <?php echo $data['total_ej5']; ?>€</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej6']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">Área del círculo: <?php echo number_format(num: $data['area_ej6'], decimals: 2, decimal_separator: ',', thousands_separator: '.'); ?></div>
                    <div class="col-12">Perímetro del círculo: <?php echo number_format(num: $data['perimetro_ej6'], decimals: 2, decimal_separator: ',', thousands_separator: '.'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej7']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">Km/h: <?php echo number_format(num: $data['kmh'], decimals: 2, decimal_separator: ',', thousands_separator: '.'); ?></div>
                    <div class="col-6">m/s: <?php echo number_format(num: $data['ms'], decimals: 2, decimal_separator: ',', thousands_separator: '.'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej8']; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">Número: <?php echo $data['num_ej8'];?></div>
                    <div class="col-4">Centenas: <?php echo $data['centena']; ?>€</div>
                    <div class="col-4">Decenas: <?php echo $data['decena']; ?>€</div>
                    <div class="col-4">Unidades: <?php echo $data['unidades']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej9']; ?></h6>
            </div>
            <div class="card-body">
                <p>La cadena de texto '<?php echo $data['texto']; ?>' está formada por <?php echo $data['caracteres']; ?> caracteres y <?php echo $data['palabras']; ?> palabras</p>
            </div>
        </div>
    </div>
</div>