<?php $title='Editar perfil';$file='register';$profile = true;?>

<?php include_once('includes/header.php'); ?>

<?php
if (isset($_POST) && count($_POST) >= 4) {
    //Si es true permite el Edit
    $name = (verify($_POST['name']));
    $surname = (verify($_POST['surname']));
    $phone = (verify($_POST['phone']));
    $email = (verify($_POST['email']));
    $password = (verify($_POST['password']));

    if ($name && $surname && $email && $phone) {
        $name = clean($_POST['name']);
        $surname = clean($_POST['surname']);
        $phone = clean($_POST['phone']);
        $email = clean($_POST['email']);
        $sql = 'SELECT "Email" FROM ' . $tables['users'] . '
                        WHERE
                            `Email`       = ' . $email;
        if (!Existe($sql) || $_POST['email'] == $_SESSION['email']) {
            $values = ' Name=' . $name . ',Surname=' . $surname . ',Email=' . $email . ',Phone=' . $phone;
            $edit = true;
            if ($password) {
                if (strlen($_POST['password']) >= 4 && strlen($_POST['password']) <= 100) {
                    $password = clean($_POST['password']);
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $values .= ',Password = "' . $password.'"';
                } else {
                    $edit = false;
                    $error = "El largo de su contraseña es incorrecto, debe ser entre 4 y 100 dígitos";
                }
            }
            if ($edit) {
                $where = 'Email = ' . $email;
                if (UPDATE($tables['users'], $values, $where)) {
                    $_SESSION['name'] = $_POST['name'];
                    $_SESSION['surname'] = $_POST['surname'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['phone'] = $_POST['phone'];
                    redirect('perfil');
                } else {
                    $error = "Error al registrarse, revise sus datos o contacte al técnico";
                }
            }
        } else {
            $error = "El usuario ya existe";
        }
    } elseif (!$name) {
        $error = "Falta el nombre";
    } elseif (!$surname) {
        $error = "Falta el apellido";
    } elseif (!$phone) {
        $error = "Falta el teléfono";
    } else {
        $error = "Falta el email";
    }
    $name = clean($_POST['name']);
    $surname = clean($_POST['surname']);
    $phone = clean($_POST['phone']);
    $email = clean($_POST['email']);
} else {
    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
}
?>

<div class="col-lg-12 text-center py-5 textgris">
    <hr>
    <H2>Editar Información</H2>
    <hr>
</div>
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-10 margin-auto">
        <?php include_once('includes/error.php'); ?>
        <form action="editar.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label toro">
                    <h4>Nuevo nombre</h4>
                </label>
                <input type="text" class="form-control" id="name" name="name" <?= isset($name) ? "value=$name" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label toro">
                    <h4>Nuevo apellido</h4>
                </label>
                <input type="text" class="form-control" id="surname" name="surname" <?= isset($surname) ? "value=$surname" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label toro">
                    <h4>Nuevo teléfono</h4>
                </label>
                <input type="text" class="form-control" id="phone" name="phone" <?= isset($phone) ? "value=$phone" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label toro">
                    <h4>Nuevo Correo Electronico</h4>
                </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" <?= isset($email) ? "value=$email" : "" ?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label toro">
                    <h4>Nuevo Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <button type="submit" class="btn btn-secondary btn-tam">
                    Editar
                </button>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<div>
    <hr>
    </hr>
</div>

<!-- FOOTER -->
<div class="container">
    <div class="col-lg-12 text-center">
        <div class="col-lg-4">
            <div class=" a01 "><img src="img/1-LOGO.png" width="100%"></div>
        </div>
    </div>
    <div class="row  col-12 ms-md-auto ">
        <div class="col-lg-2 col-md-6 toro text-left sub14">
            <p>CATEGORIAS
            <P>SALONES
            <P>IMAGEN PERSONAL
            <P>CONTACTO
        </div>
        <div class="col-lg-3 col-md-6 toro text-left sub14">
            <p>AVISOS LEGALES
            <P>TERMINOS Y CONDICIONES
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


</body>

</html>