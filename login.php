<? $title='Inicio de Sesión';$file='login';?>

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
            }else{
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
        <h2 class="text-center top-30">INICIO DE SESIÓN</h2>
    </div>
</div>

<!-- FIN SEARCH BAR -->
<br>


<div class="container py-5 ">
    <div class="col-12 text-center pb-5">
        <h2> No te pierdas nuestras promociones, inicia sesión y enterate de todo lo que tenemos para ofrecerte.</h2>
    </div>
<!-- ERROR -->
<h2><?=isset($error)?$error:''?></h2>
<!-- ERROR -->

    <div class="col-lg-5 col-md-6 col-sm-10 margin-auto">
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label toro">
                    <h4>Correo Electronico</h4>
                </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" <?= isset($email) ? "value=$email" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label toro">
                    <h4>Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <button type="submit" class="btn btn-secondary btn-tam">
                    Iniciar
                </button>
            </div>
        </form>
    </div>
</div>

<br>
<br>
<div class="oro60">
    <hr>
    </hr>
</div>


<? include_once('includes/footer.php'); ?>