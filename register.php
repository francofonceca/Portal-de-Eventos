<? $title='Registro';$file='register';?>

<? include_once('includes/header.php'); ?>

<?php

if (isset($_POST)) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (strlen($_POST['password']) >= 4 && strlen($_POST['password']) <= 100) {
            $email = clean($_POST['email']);
            $password = clean($_POST['password']);
            $sql = 'SELECT "Password" FROM ' . $tables['users'] . '
                    WHERE
                        `Email`       = ' . $email;
            if (Existe($sql)) {
                redirect('index');
            } else {
                $error = "El usuario no está registrado";
            }
        } else {
            $error = "El largo de su contraseña es incorrecto, debe ser entre 4 y 100 dígitos";
        }
    } elseif (isset($_POST['email'])) {
        $error = "Falta el email";
    } else {
        $error = "Falta la contraseña";
    }
}

?>

<!-- SEARCH BAR -->
<div class="row h500 celular centrar">
    <div class="col-lg-12 col-md-12 col-sm-12 oro60 h100j ">
        <h2 class="text-center top-30">REGISTRO </h2>
    </div>
</div>

<!-- FIN SEARCH BAR -->
<br>


<div class="container py-5 ">
    <div class="col-12 text-center pb-5">
        <h2> Poder ser parte de nosotros te proporciona diferentes descuentos y beneficios en productos, finaliza tu registro y aprovechá al máximo con nosotros.</h2>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-10 margin-auto">
        <form>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label toro">
                    <h4>Nombre</h4>
                </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label toro">
                    <h4>Apellido</h4>
                </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label toro">
                    <h4>Teléfono</h4>
                </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label toro">
                    <h4>Correo Electronico</h4>
                </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label toro">
                    <h4>Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label toro">
                    <h4>Repetir Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <button type="button" class="btn btn-secondary btn-tam">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</div>

<? include_once('includes/footer.php'); ?>