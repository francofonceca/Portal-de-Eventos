<!-- SEARCH BAR -->
<div class="row col-lg-12 col-md-12 py-3 oro100" style="margin-left: 0px!important;margin-right: 0px!important;">
    <div class="col-lg-2 col-md-12 text-center" style="margin-top: -8px!important;right: 0px!important;">
        <a href='ideasynotas.php'>
            <i class="bi bi-lightbulb iconos "></i>
        </a>
        <i class="bi bi-tags-fill iconos p-2 "></i>
        <i class="bi bi-calendar-check iconos "></i>
    </div>
    <div class="col-lg-3 col-md-12 text-center">
        <h4 style="top:20px!important">NUEVA BUSQUEDA:</h4>
    </div>

    <form class="col-lg-7" method="POST" action="resultados.php">
        <div class="text-center">
            <?php $selectSearch = isset($selectSearch) ? $selectSearch:null;?>
            <?= getSelect($tables['zones'],'Zone','ASC','ZoneID','Zone',$selectSearch)?>
            <input type="text" placeholder="¿Qué estás buscando?" name="search"
                <?= isset($search) ? 'value="' . $search . '"' : '' ?>>
            <button type='submit' class="btn btn-secondary " style="border-radius: 50%;"><i
                    class="bi bi-search"></i></button>
        </div>
    </form>
</div>