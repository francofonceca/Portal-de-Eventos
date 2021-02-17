<br>
<br>

<div class="oro60">
    <hr>
    </hr>
</div>
<!-- FOOTER -->
<div class="container">
    <div class="col-lg-12 text-center">
        <div class="col-lg-4">
            <a href="index.php">
                <div class=" a01 "><img src="img/1-LOGO.png" width="100%"></div>
            </a>
        </div>
    </div>
    <div class="row  col-12 ms-md-auto ">
        <div class="col-lg-2 col-md-6 toro text-left sub14">
            <p>CATEGORIAS
            <P><a href='salones.php' class="toro">SALONES</a>
            <P>IMAGEN PERSONAL
            <P><a href='contacto.php' class="toro">CONTACTO</a>
        </div>
        <div class="col-lg-3 col-md-6 toro text-left sub14">
            <p>AVISOS LEGALES
            <P><a href='terminosycondiciones.php' class="toro">TERMINOS Y CONDICIONES</a>
            <P>TRABAJÁ CON NOSOTROS
            <P>ANUNCIÁ EN EL PORTAL
        </div>
        <div class="col-lg-4 col-md-12 text-center margin-auto">
            <h5 class="por toro ">Newsletter y promociones</h5>
            <br>
            <input class="toro" type="text" name="" placeholder="Dejanos tu correo y recibí las ulti...">
        </div>
        <br>
        <div class="col-lg-3 centrar">
            <form action="#">
                <input class="btn btn-secondary btn-tam" type="submit" name="" value="SUSCRIBIRSE">
            </form>
        </div>
    </div>
    <div class="col-lg-12 text-center toro">
        <hr>
        <br>
        <h4>Numero de grupo 00F1 -Chaparro, Waszczuk, Aguirre</h4>
    </div>
</div>
<!-- FIN FOOTER -->
</div>

<?php
if (isset($pass)) {?>
<!-- ACA EMPIEZA EL HTML DEL TOAST, PUEDE ESTAR EN CUALQUIER LADO, SIEMPRE SE VA A MOSTRAR EN EL TOP DE LA PANTALLA -->
<div class="position-fixed top-0 end-0 p-3" style="z-index: 5">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Portal de Eventos</strong>
            <small>Ahora...</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Adios!.
        </div>
    </div>
</div>
<?php }
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>