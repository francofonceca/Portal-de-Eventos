<? $title='Registro';$file='register';$verify = true;?>

<? include_once('includes/header.php'); ?>

<?php
if (isset($_POST) && count($_POST) == 6) {
    //Si es true permite el Register
    $name = (isset($_POST['name']) && strlen($_POST['name']) > 0);
    $surname = (isset($_POST['surname']) && strlen($_POST['surname']) > 0);
    $phone = (isset($_POST['phone']) && strlen($_POST['phone']) > 0);
    $email = (isset($_POST['email']) && strlen($_POST['email']) > 0);
    $password = (isset($_POST['password']) && strlen($_POST['password']) > 0);
    $passwordAgain = (isset($_POST['passwordAgain']) && strlen($_POST['passwordAgain']) > 0);

    if ($name && $surname && $email && $phone && $password && $passwordAgain) {
        if ($_POST['password'] == $_POST['passwordAgain']) {
            if (strlen($_POST['password']) >= 4 && strlen($_POST['password']) <= 100 && $_POST['password'] == $_POST['passwordAgain']) {
                $name = clean($_POST['name']);
                $surname = clean($_POST['surname']);
                $phone = clean($_POST['phone']);
                $email = clean($_POST['email']);
                $password = clean($_POST['password']);
                $sql = 'SELECT "Email" FROM ' . $tables['users'] . '
                        WHERE
                            `Email`       = ' . $email;
                if (!Existe($sql)) {
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $columns = 'Name, Surname, Phone, Email, Password';
                    $values = "$name,$surname,$phone,$email,'$password'";
                    if (INSERT($tables['users'], $columns, $values)) {
                        $_SESSION['name'] = $name;
                        $_SESSION['surname'] = $surname;
                        $_SESSION['email'] = $email;
                        redirect('index');
                    }else{
                        $error = "Error al registrarse, revise sus datos o contacte al técnico";
                    }
                } else {
                    $error = "El usuario ya existe";
                }
            } else {
                $error = "El largo de su contraseña es incorrecto, debe ser entre 4 y 100 dígitos";
            }
        } else {
            $error = "Las contraseñas no son iguales";
        }
    } elseif (!$name) {
        $error = "Falta el nombre";
    } elseif (!$surname) {
        $error = "Falta el apellido";
    } elseif (!$phone) {
        $error = "Falta el teléfono";
    } elseif (!$email) {
        $error = "Falta el email";
    } elseif (!$password) {
        $error = "Falta la contraseña";
    } else {
        $error = "Hay que repetir la contraseña para confirmar";
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

        <? include_once('includes/error.php'); ?>

        <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label toro">
                    <h4>Nombre</h4>
                </label>
                <input type="text" class="form-control" id="name" name="name" <?= isset($name) ? "value=$name" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label toro">
                    <h4>Apellido</h4>
                </label>
                <input type="text" class="form-control" id="surname" name="surname" <?= isset($surname) ? "value=$surname" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label toro">
                    <h4>Teléfono</h4>
                </label>
                <input type="text" class="form-control" id="phone" name="phone" <?= isset($phone) ? "value=$phone" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label toro">
                    <h4>Correo Electronico</h4>
                </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" <?= isset($email) ? "value=$email" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label toro">
                    <h4>Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="passwordAgain" class="form-label toro">
                    <h4>Repetir Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="passwordAgain" name="passwordAgain">
            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <button type="submit" class="btn btn-secondary btn-tam">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</div>

<? include_once('includes/footer.php'); ?>