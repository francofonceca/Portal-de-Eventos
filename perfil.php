<? $title='Perfil';$file='perfil';$profile = true;?>

<? include_once('includes/header.php'); ?>

<div class="col-lg-12 text-center py-5 textgris">
    <hr>
    <H2>Perfil</H2>
    <hr>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8 text-white"></div>
    <div class="col-lg-4 col-md-4 col-sm-12 pb-2">
        <a href="crear.html" alt="Agregar Publicación" class="btn btn-secondary text-white"><i class="bi bi-plus"></i> Agregar Publicación</a>
        <button class="btn btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Dar de baja mi cuenta</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 borde">
        <h4 class="p-3 ">Tus datos personales:</h4>
        <a href="editar.php" class="boton-editar">
            <h5 class="p-3 pb-5"><i class="bi bi-pencil"></i> Editar </h5>
        </a>
        <div class="pl-2">
            <h6 class="text-center textgris">Nombre</h6>
            <h4 class="text-center textgris p-2 pb-3"><?=$_SESSION['name']?></h4>
            <br>
            <h6 class="text-center textgris">Apellido</h6>
            <h4 class="text-center textgris p-2 pb-3"><?=$_SESSION['surname']?></h4>
            <br>
            <h6 class="text-center textgris">Correo Electronico</h6>
            <h4 class="text-center textgris p-2 pb-3"><?=$_SESSION['email']?></h4>
            <br>
            <h6 class="text-center textgris">Teléfono</h6>
            <h4 class="text-center textgris p-2 pb-3"><?=$_SESSION['phone']?></h4>
            <br>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 borde">
        <h4 class="p-3 pb-5">Tus publicaciones:</h4>
        <div class="col-lg-12 row align-items-start  bloque p-2  color-click">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <p><i class="bi bi-geo-alt"></i><strong>Moreno, zona oeste de GBA.</strong></p>
                <h3>Estancia Los Tordillos </h3>
                <h6>Desde 1985 que abrimos nuestras puertas para recibir a una clientela sensible a la buena mesa, concretando con éxito sus reuniones sociales, encuentros de negocios, casamientos y reuniones de trabajo.
                </h6>
                <button class="btn btn-secondary"><i class="bi bi-trash-fill"></i></button>
                <button class="btn btn-secondary"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-secondary"><i class="bi bi-eye"></i></button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="img/estancia_la_linda-quintas_y_estancias-buenos_aires-1209083617_15086_grande.jpg" class=" pt-3" style="width: 100%;height: 200px;">
            </div>
        </div>
        <hr>
        <div class="col-lg-12 row align-items-start  bloque p-2  color-click">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <p><i class="bi bi-geo-alt"></i><strong>Moreno, zona oeste de GBA.</strong></p>
                <h3>Estancia Los Tordillos </h3>
                <h6>Desde 1985 que abrimos nuestras puertas para recibir a una clientela sensible a la buena mesa, concretando con éxito sus reuniones sociales, encuentros de negocios, casamientos y reuniones de trabajo.
                </h6>
                <button class="btn btn-secondary"><i class="bi bi-trash-fill"></i></button>
                <button class="btn btn-secondary"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-secondary"><i class="bi bi-eye"></i></button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="img/estancia_la_linda-quintas_y_estancias-buenos_aires-1209083617_15086_grande.jpg" class=" pt-3" style="width: 100%;height: 200px;">
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dar de baja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Seguro que quieres dar de baja tu cuenta?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Dar de baja</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL DAR DE BAJA MI CUENTA -->



<? include_once('includes/footer.php'); ?>