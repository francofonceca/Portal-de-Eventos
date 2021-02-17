<?php
if (!(isset($_GET) && isset($_GET['PostID']))) {
    header('Location:index.php');
}
?>
<?php $title='Publicacion';$file='publicacion';?>

<?php include_once('includes/header.php'); ?>

<?php
$result = getPost($_GET['PostID']);
if (isset($result)) {
    $post = $result['posts'][0];
    $events = $result['events'];
    $lounges = $result['lounges'];
    $categories = $result['categories'];
    $images = $result['images'];
}else{
    header('Location:index.php');
}
?>


<?php include_once('includes/search.php'); ?>
<div class="container">
    <div class="row">
        <h5 class="textgris">HOME / <?=$post['Zone']?></h5>
    </div>
    <div class="row h500 card centrar ">
        <div class="col-lg-12 col-md-12 col-sm-12 oro60 ">
            <h2 class="text-center top-100"><?=$post['Title']?></h2>
            <h3 class="text-center top-30">DONDE LA NATURALEZA Y LA EXELENCIA SE UNEN</h3>
            <br>
            <br>
            <br>
            <p class="text-center pt-5">OLDEN 4561, TORTUGUITAS, ZONA NORTE GBA</p>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-lg-8 col-md-12 col-sm-12 pb-3">
            <h1 class="text-left bot-gris"><?=$post['Title']?></h1>
            <p><?=$post['Description']?></p>
            <div class="borde">
                <h4 class="text-left p-2">Sobre el lugar</h4>
                <div class="p-2 ">
                    <table class="table">
                        <tr class="bot-gold">
                            <td class="h6 width40">Capacidad de invitados</td>
                            <td>Desde <?=$post['GuestsLimitsInit']?> hasta <?=$post['GuestsLimitsLimit']?> personas</td>
                        </tr>
                        <tr class="bot-gold">
                            <td class="h6 width40">Ubicación del Salón</td>
                            <td><?=$post['Location']?></td>
                        </tr>
                        <tr class="bot-gold">
                            <td class="h6 width40">Espacios con los que cuenta el Salón</td>
                            <td>
                                <?php 
                                    if (isset($lounges)) {
                                        foreach ($lounges as $key => $lounge) {
                                            echo $lounge['Lounge'].' / ';
                                        }
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr class="bot-gold">
                            <td class="h6 width40">Servicios que ofrece</td>
                            <td>
                                
                            <?php 
                                    if (isset($categories)) {
                                        foreach ($categories as $key => $category) {
                                            echo $category['Category'].' / ';
                                        }
                                    }
                                ?>
                                
                                <?php 
                                    if (isset($filters)) {
                                        foreach ($filters as $key => $filter) {
                                            echo $filter['Filter'].' / ';
                                        }
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="text-left p-2">
                    <h6> - Promociones acordes a tu evento</h6>
                    <h6> - El horario de comienzo de tu casamiento LO ELEGÍS VOS y sin costo adicional!</h6>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner p-5">
                            <div class="carousel-item active">
                                <div class="row ">
                                    <div class="col-lg-3">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-secondary py-5 text-white text-center img-fondo"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon oro60" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon oro60" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                    <div class="px-5">
                        <iframe class="iframe"
                            src="<?=$post['Maps']?>&z=15&output=embed"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>

            </div>
            <div class="borde-bloque pb-2">
                <div class="container">
                    <div class="row text-white">
                        <div class="col-lg-4 col-md-4 text-center">
                            <h5>Contacto directo.</h5>
                            <h6><i class="bi bi-whatsapp"></i>
                                <?=isset($post['ContactName_1'])?$post['ContactName_1']:''?>:
                                +<?=isset($post['ContactPhone_1'])?$post['ContactPhone_1']:''?></h6>
                            <h6><i class="bi bi-whatsapp"></i>
                                <?=isset($post['ContactName_2'])?$post['ContactName_2']:''?>:
                                +<?=isset($post['ContactPhone_2'])?$post['ContactPhone_2']:''?></h6>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <h5 style="opacity: 0;">Texto oculto.</h5>
                            <h6><i class="bi bi-envelope-fill"></i>
                                <?=isset($post['ContactEmail_1'])?$post['ContactEmail_1']:''?></h6>
                            <h6><i class="bi bi-envelope-fill"></i>
                                <?=isset($post['ContactEmail_2'])?$post['ContactEmail_2']:''?></h6>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 container row pb-1 text-center">
                            <h4><?=$post['Web']?></h4>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href='<?=isset($post['Maps'])?$post['Maps']:''?>' target='_blank'>
                                    <i class="bi bi-geo-alt" style="font-size:35px"></i>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href='<?=isset($post['Instagram'])?$post['Instagram']:''?>' target='_blank'>
                                    <i class="bi bi-instagram" style="font-size:35px"></i>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href='<?=isset($post['Facebook'])?$post['Facebook']:''?>' target='_blank'>
                                    <i class="bi bi-facebook" style="font-size:35px"></i>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href='<?=isset($post['Twitter'])?$post['Twitter']:''?>' target='_blank'>
                                    <i class="bi bi-twitter" style="font-size:35px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 oro60">
            <h4 class="text-left">SOLICITAR PRESUPUESTO</h4>
            <p class="text-left">DATOS DEL EVENTO</p>
            <form action="">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-calendar-date"></i></span>
                    <input type="text" class="form-control" placeholder="Fecha del evento DIA/MES/AÑO"
                        aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Cantidad de invitados" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                <br>
                <p class="text-left">DATOS DE CONTACTO</p>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-telephone-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Telefono" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-envelope-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Dirección de correo" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap py-2">
                    <textarea name="" id="" style="width: 100%;" rows="10"
                        placeholder="Comentarios o sugerencias"></textarea>
                </div>
                <div class="input-group flex-nowrap py-2 d-flex">
                    <button class="bbrr p-1 ml-auto" style="width: 120px;">COTIZAR</button>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>

<?php include_once('includes/footer.php'); ?>