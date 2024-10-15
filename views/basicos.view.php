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
                El cuadrado del número <?php echo $data['ej1_x']; ?> es <?php echo $data['ej1_y']; ?>
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
                El precio hora es <?php echo $data['ej2_precio_hora']; ?>, se han trabajado <?php echo $data['ej2_horas_trabajadas']; ?> horas por lo que se pagarán <?php echo $data['ej2_resultado']; ?> €.
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
                La base es <?php echo $data['ej3_base']; ?> y la altura es <?php echo $data['ej3_altura']; ?>, su área es <?php echo $data['ej3_area']; ?>.
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
                El nombre del alumno es <?php echo $data['ej4_nombre']; ?> tiene <?php echo $data['ej4_edad']; ?> años y su nota media es un <?php echo $data['ej4_nota_media']; ?>.
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
                <p>Precio por noche en temporada baja: <?php echo $data['ej5_precio_noche_temp_baja']; ?>.</p>
                <p>Precio por noche temporada alta es de <?php echo $data['ej5_precio_noche_temp_alta']; ?>.</p>
                <p>Número de noches temporada baja: <?php echo $data['ej5_noches_temp_baja']; ?>.</p>
                <p>Número de noches temporada alta: <?php echo $data['ej5_noches_temp_alta']; ?>.</p>
                <p>Precio total: <?php echo $data['ej5_total']; ?>.</p>

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
                <p>Radio: <?php echo $data['ej6_radio']; ?>.</p>
                <p>Área: <?php echo number_format($data['ej6_area'], decimals: 2, decimal_separator: ',', thousands_separator: ','); ?>.</p>
                <p>Perímetro: <?php echo number_format($data['ej6_perimetro'], decimals: 2, decimal_separator: ',', thousands_separator: '.'); ?>.</p>

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
                <p>Kilómetros/hora: <?php echo $data['ej7_kilometros_hora']; ?>.</p>
                <p>Metros/segundos: <?php echo number_format($data['ej7_metros_segundo'], decimals: 2, decimal_separator: ',', thousands_separator: '.'); ?>.</p>

            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej8']; ?></h6>
            </div>
            <div class="card-body">
                <p>Número: <?php echo $data['ej8_numero']; ?>.</p>
                <p>Centenas: <?php echo intval($data['ej8_centenas']); ?>.</p>
                <p>Decenas: <?php echo intval($data['ej8_decenas']); ?>.</p>
                <p>Unidades: <?php echo intval($data['ej8_unidades']); ?>.</p>

            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej9']; ?></h6>
            </div>
            <div class="card-body">
                <p>Cadena: <?php echo $data['ej9_cadena']; ?>.</p>
                <p>Caracteres: <?php echo $data['ej9_caracteres']; ?>.</p>
                <p>Palabras: <?php echo $data['ej9_palabras']; ?>.</p>

            </div>
        </div>
    </div>
</div>




