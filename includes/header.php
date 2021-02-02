<?include_once('connect.php'); ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($verify) && isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email'])) {
    header('Location:index.php');
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/<?= isset($file) ? $file : 'index' ?>.css">
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
                <div class=" a1 centrar toro">SALONES</div>
                <div class=" a1 centrar toro">IMAGEN PERSONAL</div>
                <div class=" a1 centrar toro">CONTACTO</div>
                <div class="a1 centrar sub14"><i class="bi bi-arrow-bar-right"></i>EMPRESAS</div>
            </div>
        </div>
        <!-- FIN HEADER -->