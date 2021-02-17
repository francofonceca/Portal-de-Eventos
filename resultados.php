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

$zoneFilter = isset($_POST['zoneFilter']) && is_numeric($_POST['zoneFilter']) ? $_POST['zoneFilter']:$selectSearch;
$eventFilter = isset($_POST['eventFilter']) && is_numeric($_POST['eventFilter'])  ? $_POST['eventFilter']:null;
$loungeFilter = isset($_POST['loungeFilter']) && is_numeric($_POST['loungeFilter'])  ? $_POST['loungeFilter']:null;
$capacityFilter = isset($_POST['capacityFilter']) && is_numeric($_POST['capacityFilter'])  ? $_POST['capacityFilter']:null;

$zone = getSomething($tables['zones'], 'ZoneID', $selectSearch);
$result = getPost(null, $selectSearch, trim($search),$loungeFilter,$eventFilter,$capacityFilter);
if (isset($result)) {
    $posts = $result['posts'];
}


?>

<?php include_once('includes/search.php'); ?>
<div class="container">
    <div class="row">
        <h5 class="textgris">HOME / <?= strtoUpper($zone[0]['Zone']) ?> / <?= $search ?></h5>
        <h3 class="textgris">Encontramos las siguientes opciones:</h3>
        <h6 class="p-2" style="border-top: 3px  solid gray;border-bottom: 3px  solid gray;"><i
                class="bi bi-check-circle"></i> <?= $search ?> (<?= isset($posts)?count($posts):'0' ?> coincidencias)
        </h6>
        <br>
        <br>
        <br>
        <div class="col-lg-3 pt-1 pr-2" style="border-top:2px solid gray;">
            <h6><i class="bi bi-funnel-fill" style="color:gray"></i>Filtros</h6>
            <form action='resultados.php' method='POST'>
                <?= getSelect($tables['zones'],'Zone','ASC','ZoneID','Zone',$zoneFilter,'select-filter','UBICACIÓN',null,'zoneFilter')?>
                <?= getSelect($tables['events'],'EventType','ASC','EventID','EventType',$eventFilter,'select-filter','TIPO DE EVENTO',null,'eventFilter')?>
                <?= getSelect($tables['lounges'],'Lounge','ASC','LoungeID','Lounge',$loungeFilter,'select-filter','SALONES',null,'loungeFilter')?>
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
                <?= getSelect(null,null,null,'value','option',$capacityFilter,'select-filter','CAPACIDAD',$selectArray,'capacityFilter')?>
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
                
                <input type="hidden" name="search" value='<?=$_POST['search']?>' />
                <input type="hidden" name="selectSearch" value='<?=$_POST['selectSearch']?>' />

                <input class="btn btn-secondary btn-tam gris1 bbrr ma" type="submit" name="btnContact"
                    value="Filtrar" />
            </form>
        </div>
        <div class="col-lg-9" style="padding-left:30px!important;">

            <?php
            if (verify($posts)):
                foreach ($posts as $key => $post) {
                    ?>
                    <div class="col-lg-12 row align-items-start borde bloque pb-2">
                        <div class="col-lg-8 ">
                            <p><i class="bi bi-geo-alt"></i><strong><?=$post['Zone']?></strong></p>
                            <a href='publicacion.php?PostID=<?=$post['PostID']?>' class='text-dark'>
                                <h3><?=$post['Title']?></h3>
                            </a>
                            <h6><?=substr($post['Description'], 0, 200)?>
                            </h6>
                            <button class="btn btn-secondary btn-sm">+</button>
                            <button class="btn btn-secondary btn-sm "> Cotizar</button>
                        </div>
                        <div class="col-lg-4">
                            <img src="img/<?=$post['Image']?>" class=" pt-3" style="width: 100%;height: 200px;">
                        </div>
                    </div>
                    <br>
            <?php
                }
            endif;
            ?>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php'); ?>