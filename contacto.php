<!DOCTYPE html>

<? $title='Contacto';$file='contacto';?>

<? include_once('includes/header.php'); ?>



<? include_once('includes/search.php'); ?>
<div class="row h500 salon centrar">
    <div class="col-lg-12 col-md-12 col-sm-12 oro60 h100j">
        <h1 class="text-center top-30">Contacto</h1>
    </div>
</div>

<div class="container">
    <div class="row pt-2">
        <h3 class="toro text-left">Nuestras vías de comunicación</h3>
        <h1 class="toro text-left">¿Comentarios o sugerencias?</h1>
        <h5 class="p-2 text-gris">
            <strong>Selecciona la solapa de tu interés para una mejor atención</strong>
        </h5>
        <div class="container-fluid text-center pt-2 bloque">
            <div class="row">
                <div class="col-sm-4 col-xs well blanco">
                    <a href="#info1" id="info2b" class="inf h4" style="text-decoration: none">CONTACTO DIRECTO</a>
                </div>
                <div class="col-sm-4 col-xs well blanco">
                    <a href="#info2" class="inf h4" style="text-decoration: none">TRABAJÁ CON NOSOTROS</a>
                </div>
                <div class="col-sm-4 col-xs well blanco">
                    <a href="#info3" class="inf h4" style="text-decoration: none">EMPRESAS</a>
                </div>
            </div>
        </div>
        <div class="container bg-white bloque">
            <!-- contenido informacion adicional -->
            <div id="info1" class="row align-items-start col-xs-12 well oculto text-center">
                <h1 class="text-center toro p-2">CONTACTO DIRECTO</h1>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br />
                    <input class="input-facha" placeholder="Nombre" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Telefono" type="number" /><br /><br />
                    <input class="input-facha" placeholder="Motivo de consulta" type="text" /><br /><br />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br />
                    <input class="input-facha" placeholder="Apellido" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Direccion de corre" type="email" /><br /><br />
                    <input class="input-facha" placeholder="¿Como nos conociste?" type="text" /><br /><br />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <textarea name="" id="" style="width: 90%" rows="10" placeholder="Comentarios o sugerencias"></textarea>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <p style="display: none">a</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pb-5">
                    <input class="btn btn-secondary btn-tam gris1 bbrr ma" type="submit" name="" value="Enviar" />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 p-5">
                    <h1 class="toro" style="text-align: left !important ;">
                        EL PORTAL
                    </h1>
                    <br />
                    <h3 class="textgris" style="text-align: left !important">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat.
                    </h3>
                </div>
            </div>
            <div id="info2" class="row align-items-start col-xs-12 well oculto text-center">
                <h1 class="text-center toro p-2">TRABAJÁ CON NOSOTROS</h1>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br />
                    <input class="input-facha" placeholder="Nombre" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Telefono" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Motivo de consulta" type="text" /><br /><br />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br />
                    <input class="input-facha" placeholder="Apellido" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Direccion de correo" type="email" /><br /><br />
                    <input class="input-facha" placeholder="Cargá tu cv" type="file" /><br /><br />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <textarea name="" id="" style="width: 90%" rows="10" placeholder="Comentarios o sugerencias"></textarea>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <p style="display: none">a</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pb-5">
                    <input class="btn btn-secondary btn-tam gris1 bbrr ma" type="submit" name="" value="Enviar" />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 px-5">
                    <h1 class="toro text-left">BUSQUEDAS VIGENTES</h1>
                    <div class="bloque-busqueda p-2 row">
                        <div class="col-lg-10 col-md-10 col-sm-10 text-left">
                            <h3 class="textgris" style="text-align: left !important">
                                Ayudante de cocina
                            </h3>
                            <h6 class="textgris" style="text-align: left !important">
                                Importante empresa de catering de zona oeste, ofrece empleo
                                para eventos fin de semana.
                            </h6>
                            <h6 class="textgris" style="text-align: left !important">
                                (CASTELAR, MORENO, ITUZAINGO)
                            </h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <i class="bi bi-whatsapp" style="
                      color: gray !important;
                      margin: 0px auto;
                      font-size: 50px;
                    "></i>
                            <i class="bi bi-envelope-fill p-3" style="
                      color: gray !important;
                      margin: 0px auto;
                      font-size: 50px;
                    "></i>
                        </div>
                    </div>
                    <br />
                    <div class="bloque-busqueda p-2 row">
                        <div class="col-lg-10 col-md-10 col-sm-12 text-left">
                            <h3 class="textgris" style="text-align: left !important">
                                Bartender para eventos
                            </h3>
                            <h6 class="textgris" style="text-align: left !important">
                                Importante empresa de catering de zona oeste, ofrece empleo
                                para eventos fin de semana.
                            </h6>
                            <h6 class="textgris" style="text-align: left !important">
                                (CASTELAR, MORENO, ITUZAINGO)
                            </h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-md-">
                            <i class="bi bi-whatsapp" style="
                      color: gray !important;
                      margin: 0px auto;
                      font-size: 50px;
                    "></i>
                            <i class="bi bi-envelope-fill p-3" style="
                      color: gray !important;
                      margin: 0px auto;
                      font-size: 50px;
                    "></i>
                        </div>
                    </div>
                    <br />
                    <div class="bloque-busqueda p-2 row">
                        <div class="col-lg-10 col-md-10 col-sm-12 text-left">
                            <h3 class="textgris" style="text-align: left !important">
                                Mesero
                            </h3>
                            <h6 class="textgris" style="text-align: left !important">
                                Importante empresa de catering de zona oeste, ofrece empleo
                                para eventos fin de semana.
                            </h6>
                            <h6 class="textgris" style="text-align: left !important">
                                (CASTELAR, MORENO, ITUZAINGO)
                            </h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <i class="bi bi-whatsapp" style="
                      color: gray !important;
                      margin: 0px auto;
                      font-size: 50px;
                    "></i>
                            <i class="bi bi-envelope-fill p-3" style="
                      color: gray !important;
                      margin: 0px auto;
                      font-size: 50px;
                    "></i>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
            <div id="info3" class="row align-items-start col-xs-12 well oculto text-center">
                <h1 class="text-center toro p-2">EMPRESAS</h1>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br />
                    <input class="input-facha" placeholder="Nombre" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Telefono" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Nombre o Razón social" type="text" /><br /><br />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br />
                    <input class="input-facha" placeholder="Nombre" type="text" /><br /><br />
                    <input class="input-facha" placeholder="Dirección de correo" type="email" /><br /><br />
                    <input class="input-facha" placeholder="Ingrese un rubro" type="text" /><br /><br />
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                    <textarea name="" id="" style="width: 90%" rows="10" placeholder="Comentarios o sugerencias"></textarea>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <p style="display: none">a</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pb-5">
                    <input class="btn btn-secondary btn-tam gris1 bbrr ma" type="submit" name="" value="Enviar" />
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 p-5">
                    <h1 class="toro" style="text-align: left !important">
                        ¿Por qué anunciar en El Portal?
                    </h1>
                    <h3 class="textgris" style="text-align: left !important">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. - Vel illum dolore eu feugiat
                        nulla facilisis at vero eros et accumsan et iusto odio dignissim
                        qui - Blandit praesent luptatum zzril delenit augue duis dolore
                        te feugait nulla facilisi.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>


<? include_once('includes/footer.php'); ?>
<script>
    jQuery(document).ready(function() {
        $(".oculto").hide();
        $(".inf").click(function() {
            var nodo = $(this).attr("href");

            if ($(nodo).is(":visible")) {
                $(nodo).hide();
                return false;
            } else {
                $(".oculto").hide("slow");
                $(nodo).fadeToggle("fast");
                return false;
            }
        });
        $("#info2b").trigger("click");
    });
</script>

</html>