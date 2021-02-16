<?php $title='Salones';$file='salones';$salones = true;?>

<?php include_once('includes/header.php'); ?>


<?php include_once('includes/search.php'); ?>

<!-- card events types -->

<div class="container">
    <div class="row pb-5">
        <?php 
            $sql = 'SELECT * FROM ' . $tables['lounges'];
            if(Existe($sql)) {
                $events = Consulta($sql);
                foreach($events as $key=>$event){
                    if($key%4 == 4 && $key >0){
                        echo ' </div> <div class="row">';
                    }else{
                        echo '
                            <div class="col-sm-12 col-lg-3 p-2 col-md-6">
                                <div class="card img-card" style="background-image: url(img/origen.jpg);">
                                    <div class="card-body">
                                        <h2 class="card-title margin-auto gris1">'.$event['Lounge'].'</h2>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
            }
        ?>
    </div>    
</div>
<!-- FIN card events types -->

<?php include_once('includes/footer.php'); ?>