<? $title='Salones';$file='salones';$salones = true;?>

<? include_once('includes/header.php'); ?>


<? include_once('includes/search.php'); ?>

<!-- card events types -->

<div class="container">
    <div class="row pb-5">
        <?php 
            $sql = 'SELECT * FROM ' . $tables['lounges'];
            if(Existe($sql)) {
                $events = Consulta($sql);
                $count = 1;
                foreach($events as $event){
                    if($count == 4){
                        echo ' </div> <div class="row">';
                    }else{
                        echo '
                            <div class="col-sm-12 col-lg-3 p-2 col-md-6">
                                <div class="card img-card">
                                    <div class="card-body">
                                        <h2 class="card-title margin-auto gris1">'.$event['Lounge'].'</h2>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    $count ++;      
                }
            }
        ?>
    </div>    
</div>
        <!-- <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card img-card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">SALONES DE FIESTA</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">QUINTAS</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">PUBS Y RESTO</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">CLUBES SOC. FOMENTO</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">CAMPOS DEPORTIVOS</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">FIESTAS INFANTILES</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">CLUBES HOUSE</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3 p-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title margin-auto gris1">CANCHAS DE DEPORTES</h2>
                </div>
            </div>
        </div>
    </div> -->


<!-- FIN card events types -->

<? include_once('includes/footer.php'); ?>