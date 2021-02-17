<?php $title='Crear Publicación';$file='crear';?>

<?php include_once('includes/header.php'); ?>

<div class="col-lg-12 text-center p-5 textgris">
    <hr>
    <H2>Crear Publicación</H2>
    <hr>
</div>
<form action="crear.php" method="POST" class="row borde mx-1">
    <div class="col-lg-5 col-md-5 col-sm-12 borde-right">
        <h4 class="textgris text-center"> Adicionales </h4>
        <div class="row justify-content-evenly">
            <div class="row justify-content-evenly py-4">
                <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                    <input type="text" name="titulo" placeholder="Link/Url de Sitio Web" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                    <input type="text" name="titulo" placeholder="Link/Url de Facebook" />
                </div>
            </div>
            <div class="row justify-content-evenly py-4">
                <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                    <input type="text" name="titulo" placeholder="Link/Url de Instagram" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                    <input type="text" name="titulo" placeholder="Link/Url de Twitter" />
                </div>
            </div>
            <div class="row justify-content-evenly py-4">
                <div class="col-lg-10 col-md-10 col-sm-10 text-center">
                    <input type="text" style="width: 100%;" name="titulo" placeholder="Número de contacto adicional" />
                </div>
            </div>
            <div class="row justify-content-evenly py-4">
                <div class="col-lg-10 col-md-10 col-sm-10 text-center">
                    <input type="email" style="width: 100%;" name="titulo" placeholder="Email de contacto adicional" />
                </div>
            </div>
            <div class="row justify-content-evenly py-4">
                <div class="col-lg-10 col-md-10 col-sm-10 text-center">
                    <input type="number" style="width: 100%;" name="titulo"
                        placeholder="Teléfono de contacto adicional" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12">
        <h4 class="textgris text-center py-3"> Información Obligatoria </h4>
        <div class="row justify-content-evenly">
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <input type="text" required name="title"
                    placeholder="Titúlo de la publicación, Ej: Estancia la Linda" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <input type="text" required name="quote"
                    placeholder="Frase de la publicación, Ej: Donde la Naturaleza y la Exelencia se unen" />
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <input type="text" required name="direction" placeholder="Dirección, Ej: Pedro Alvear 2133" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <input type="text" required name="descriptionShort"
                    placeholder="Descripción corta, Ej: Estancia en alquiler Por dia y semana" />
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-12 col-md-12 col-sm-10 text-center">
                <textarea name="description" required cols="90" rows="10"
                    placeholder="Ingresá una Descripcion sobre la publicación"></textarea>
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <input type="number" required min="0" name="guestsLimitsInit" placeholder="Minima de invitados" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <input type="number" required min="20" max="5000" name="guestsLimitsLimit"
                    placeholder="Maxima de invitados" />
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <?= getSelect($tables['zones'],'Zone','ASC','ZoneID','Zone',null,null,'Ubicación del lugar',null,'zone')?>
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-10 col-md-10 col-sm-10 text-center">
                <input type="text" required style="width: 80%!important;" name="titulo"
                    placeholder="referencias del lugar" />
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-10 col-md-10 col-sm-10 text-center">
                <input type="text" required style="width: 80%!important;" name="titulo"
                    placeholder="Código de mapa de Google" />
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <?= getSelect($tables['events'],'EventType','ASC','EventID','EventType',null,null,'Tipo de Evento',null,'event')?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 text-center">
                <?php
                $selectArray = [
                    ['value' => '10-13',
                    'option' => '10 a 13'],
                    ['value' => '13-17',
                    'option' => '13 a 17'],
                    ['value' => '10-17',
                    'option' => '10 a 17'],
                    ['value' => '08-20',
                    'option' => '08 a 20'],
                ]
            ?>
                <?= getSelect(null,null,null,'value','option',null,null,'Horario',$selectArray,'scehdule')?>
            </div>
        </div>
        <div class="row justify-content-evenly py-4">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center textgris">
                <h3>Imágenes</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-10">
                <input name="file-input" id="file-input" type="file" multiple />
            </div>
            <div class="col-lg-9 col-md-9 col-sm-10">
                <h5 class="text-center">última imagen seleccionada</h5>
                <img id="imgSalida" width="100%" height="90%"
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgHBwkGDQoaBwcHBw8ICRAOFhEiFhURExUYKCggGBolGxMTITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAWAAEBAQAAAAAAAAAAAAAAAAAAAQf/xAAWEAEBAQAAAAAAAAAAAAAAAAAAEQH/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A3EAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASqCAAAAAAoAAAAAAAAAAAAAAAJoAAAAAIAD/2Q==" />
            </div>
        </div>
    </div>
    <div>

    </div>
</form>
<?php include_once('includes/footer.php'); ?>
<script>
$(document).ready(function() {
    $(function() {
        $('#file-input').change(function(e) {
            addImage(e);
        });

        function addImage(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();

            reader.onload = function(e) {
                var result = e.target.result;
                $('#imgSalida').attr("src", result);
            }

            reader.readAsDataURL(file);
        }
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>

</body>

</html>