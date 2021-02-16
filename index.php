<?$title='Un sitio, toda la información';$file='index';?>



<?php include_once('includes/header.php'); ?>

<!-- SEARCH BAR -->
<div class="row h690 flores">
    <div class="col-lg-12 col-md-12 col-sm-12 oro60 h100j top-200">
        <br />
        <h2 class="text-center"> ENCONTRÁ TODO PARA TU EVENTO</h2>
        <div class="container">
            <form class="row align-items-start col-lg-10 ms-md-auto" method="POST" action="resultados.php">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <?= getSelect($tables['zones'],'Zone','ASC','ZoneID','Zone')?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <input type="text" placeholder="¿Qué estás buscando?" name="search"
                        <?= isset($search) ? 'value="' . $search . '"' : '' ?>>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <button  type='submit' class="btn btn-secondary btn-tam">
                        Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- FIN SEARCH BAR -->
<br>


<!-- CAROUSEL -->
<div id="carouselExampleControls" class="carousel slide oro60" data-bs-ride="carousel ">
    <div class="carousel-inner h500">
        <div class="carousel-item active">
            <img src="img/Koala.jpg" class="d-block img-carousel " alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/image1.jpg" class="d-block  img-carousel" alt="...">
        </div>
        <div class="carousel-item inner-item">
            <img src="img/origen.jpg" class="d-block  img-carousel" alt="...">
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="oro100 carousel-control-prev-icon h-50p" style="margin-left:0px!important"
                aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="oro100 carousel-control-next-icon h-50p" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

<!-- FIN CAROUSEL -->
<br />

<!-- EVENTS -->
<div class="centrar h200 oh img1">
    <div class=" h-80 col-12 oh oro60 ">
        <br>
        <a href='ideasynotas.php' class='text-white'>
            <h2 class="centrar top margin-auto">
                Ideas & Notas
            </h2>
        </a>
    </div>
</div>
<br />
<div class="centrar h200 oh img2">
    <div class=" h-80 col-12 oh oro60 ">
        <br>
        <a href='promociones.php' class='text-white'>
            <h2 class="centrar top margin-auto">
                Promociones
            </h2>
        </a>
    </div>
</div>
<br />
<div class="centrar h200 oh img1">
    <div class=" h-80 col-12 oh oro60 ">
        <br>
        <h2 class="centrar top margin-auto">Eventos</h2>
    </div>
</div>
<br>

<!-- FIN EVENTS -->


<!-- CARD  -->
<div class="col-9 h300 blanco ma ">
    <div class=" col-12 h100 fl blanco p-2">
        <h3 class="toro"> TE CONTAMOS QUIENES SOMOS</h3>
        <h1 class="toro"> EL PORTAL </h1>
        <h4 class="toro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
            tation ullamcorper suscipit lobortis nisl
            ut aliquip ex ea commodo consequat.</h4>
    </div>
</div>
<!-- FIN CARD  -->
<br>

<?php include_once('includes/footer.php'); ?>