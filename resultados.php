<?php
if (!(isset($_POST) && isset($_POST['search']) && isset($_POST['selectSearch']) && $_POST['selectSearch'] != '')) {
    header("Location:index.php");
}
?>
<?php $title='Resultados';$file='resultados';?>

<?php include_once('includes/header.php'); ?>

<?php
$selectSearch = $_POST['selectSearch'];
$search = $_POST['search'];


$zone = getSomething($tables['zones'], 'ZoneID', $selectSearch);
$post = getPost(null, $selectSearch, trim($search));


$zoneFilter = isset($_POST['zoneFilter']) ? $_POST['zoneFilter']:null;
$eventFilter = isset($_POST['eventFilter']) ? $_POST['eventFilter']:null;
$loungeFilter = isset($_POST['loungeFilter']) ? $_POST['loungeFilter']:null;
$capacityFilter = isset($_POST['capacityFilter']) ? $_POST['capacityFilter']:null;
$promoFilter = isset($_POST['promoFilter']) ? $_POST['promoFilter']:null;

?>

<?php include_once('includes/search.php'); ?>
<div class="container">
    <div class="row">
        <h5 class="textgris">HOME / <?= strtoUpper($zone[0]['Zone']) ?> / <?= $search ?></h5>
        <h3 class="textgris">Encontramos las siguientes opciones:</h3>
        <h6 class="p-2" style="border-top: 3px  solid gray;border-bottom: 3px  solid gray;"><i
                class="bi bi-check-circle"></i> <?= $search ?> (<?= isset($post)?count($post):'0' ?> coincidencias)</h6>
        <br>
        <br>
        <br>
        <div class="col-lg-3 pt-1 pr-2" style="border-top:2px solid gray;">
            <h6><i class="bi bi-funnel-fill" style="color:gray"></i>Filtros</h6>
            <?= getSelect($tables['zones'],'Zone','ASC','ZoneID','Zone',$zoneFilter,'select-filter','UBICACIÓN')?>
            <?= getSelect($tables['events'],'EventType','ASC','EventID','EventType',$eventFilter,'select-filter','TIPO DE EVENTO')?>
            <?= getSelect($tables['lounges'],'Lounge','ASC','LoungeID','Lounge',$loungeFilter,'select-filter','SALONES')?>
            <?php
                $selectArray = [
                    ['value' => '50',
                    'option' => 'Hasta 50 invitados'],
                    ['value' => '100',
                    'option' => '51 a 100 invitados'],
                    ['value' => '200',
                    'option' => '100 a 200 invitados'],
                    ['value' => '300',
                    'option' => 'Más 200 invitados'],
                ]
            ?>
            <?= getSelect(null,null,null,'value','option',$loungeFilter,'select-filter','CAPACIDAD',$selectArray)?>
            <?php
                $selectArray = [
                    ['value' => '10-13',
                    'option' => '10 a 13'],
                    ['value' => '13-17',
                    'option' => '13 a 17'],
                    ['value' => '10-17',
                    'option' => '10 a 17'],
                    ['value' => '08-20',
                    'option' => '08 a 20'],
                ]
            ?>
            <?= getSelect(null,null,null,'value','option',$capacityFilter,'select-filter','HORARIO',$selectArray)?>
            <select class="select-filter">
                <option>PROMOCIONES</option>
                <option value="tortuguitas">Actualmente sin promociones.</option>
            </select>
            <?= getSelect($tables['events'],'EventType','ASC','EventID','EventType',$eventFilter,'select-filter','PROMOCIONES')?>
        </div>
        <div class="col-lg-9" style="padding-left:30px!important;">
            <div class="col-lg-12 row align-items-start borde bloque pb-2">
                <div class="col-lg-8 ">
                    <p><i class="bi bi-geo-alt"></i><strong>Moreno, zona oeste de GBA.</strong></p>
                    <h3>Estancia Los Tordillos </h3>
                    <h6>Desde 1985 que abrimos nuestras puertas para recibir a una clientela sensible a la buena mesa,
                        concretando con éxito sus reuniones sociales, encuentros de negocios, casamientos y reuniones de
                        trabajo.
                    </h6>
                    <button class="btn btn-secondary btn-sm">+</button>
                    <button class="btn btn-secondary btn-sm "> Cotizar</button>
                </div>
                <div class="col-lg-4">
                    <img src="img/estancia_la_linda-quintas_y_estancias-buenos_aires-1209083617_15086_grande.jpg"
                        class=" pt-3" style="width: 100%;height: 200px;">
                </div>
            </div>
            <br>
            <div class="col-lg-12 row align-items-start borde bloque pb-2">
                <div class="col-lg-8">
                    <p><i class="bi bi-geo-alt"></i><strong>Moreno, zona oeste de GBA.</strong></p>
                    <h3>Estancia La salteña </h3>
                    <h6>Desde 1985 que abrimos nuestras puertas para recibir a una clientela sensible a la buena mesa,
                        concretando con éxito sus reuniones sociales, encuentros de negocios, casamientos y reuniones de
                        trabajo.
                    </h6>
                    <button class="btn btn-secondary btn-sm">+</button>
                    <button class="btn btn-secondary btn-sm "> Cotizar</button>

                </div>
                <div class="col-lg-4">
                    <img src="img/estancia_la_linda-quintas_y_estancias-buenos_aires-1220372089_20181_grande.jpg"
                        class=" pt-3" style="width: 100%;height: 200px;">
                </div>
            </div>
            <br>
            <div class="col-lg-12 row align-items-start borde bloque pb-2">
                <div class="col-lg-8">
                    <p><i class="bi bi-geo-alt"></i><strong>Moreno, zona oeste de GBA.</strong></p>
                    <h3>Estancia La Linda </h3>
                    <h6>Desde 1985 que abrimos nuestras puertas para recibir a una clientela sensible a la buena mesa,
                        concretando con éxito sus reuniones sociales, encuentros de negocios, casamientos y reuniones de
                        trabajo.
                    </h6>
                    <button class="btn btn-secondary btn-sm">+</button>
                    <button class="btn btn-secondary btn-sm "> Cotizar</button>

                </div>
                <div class="col-lg-4">
                    <img src="img/estancia_la_linda-quintas_y_estancias-buenos_aires-1480006965_grande.jpg"
                        class=" pt-3" style="width: 100%;height: 200px;">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php'); ?>