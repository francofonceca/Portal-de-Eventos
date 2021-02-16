<?php include_once('connect.php'); ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
$logued = isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email'])  && isset($_SESSION['phone']);
if (($logued && isset($register)) || (!$logued && isset($profile))) {
    redirect('index');
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/<?= isset($file) ? $file : 'index' ?>.css">
    <?php if (isset($salones)) : ?>
        <link rel="stylesheet" href="css/publicacion.css">
    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700|Source+Sans+Pro:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Portal de Eventos - <?= isset($title) ? $title : '' ?></title>
</head>

<body class="pr">
    <div class="conteiner">
        <!-- HEADER -->
        <div class="col-lg-12 col-md-12  fila p-2">
            <div class=" a1 ">
                <a href="index.php">
                    <img src="img/1-LOGO.png" width="100%">
                </a>
            </div>
            <div class=" b3 fila">
                <div class=" a1 centrar toro">CATEGORIAS</div>
                <div class=" a1 centrar toro">
                    <div class="dropdown">
                        <a <?= !isset($salones) ? ' class=" a1 centrar toro" href="salones.php"' : 'class="btn dropdown-toggle boton-desplegable" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" ' ?>>
                            SALONES
                        </a>
                        <?php if (isset($salones)) : ?>
                            <ul class="dropdown-menu dropdown-menu-dark desplegable" style="background-color: white!important;color: black!important;" aria-labelledby="dropdownMenuButton2">
                                <?php
                                $salones = getSomething($tables['lounges']);
                                foreach ($salones as $key => $salon) {
                                    echo '<li><a class="dropdown-item desplegable" href="#">' . strtoupper($salon['Lounge']) . '</a></li>';
                                }
                                ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class=" a1 centrar toro">IMAGEN PERSONAL</div>
                <a href='contacto.php' class=" a1 centrar toro">
                    CONTACTO
                </a>
                <div class="dropdown">
                    <?php if ($logued) { ?>
                        <a class="btn dropdown-toggle boton-desplegable" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                            Ver Perfil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark desplegable" style="background-color: white!important;color: black!important;" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item desplegable" href="logout.php">Cerrar Sesión</a></li>
                            <li><a class="dropdown-item desplegable" href="perfil.php">Mi Perfil</a></li>
                            <li><a class="dropdown-item desplegable" href="editar.php">Editar Perfil</a></li>
                            <li><a class="dropdown-item desplegable" href="crear.php">Agregar Publicación</a></li>
                        </ul>
                    <?php }else{ ?>
                        <a class="btn dropdown-toggle boton-desplegable" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                            Usuario
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark desplegable" style="background-color: white!important;color: black!important;" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item desplegable" href="login.php">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item desplegable" href="register.php">Registrarme</a></li>
                        </ul>
                    <?php } ?>
                </div>
            <div class="a1 centrar sub14"><i class="bi bi-arrow-bar-right"></i>EMPRESAS</div>
        </div>
    </div>
    <!-- FIN HEADER -->