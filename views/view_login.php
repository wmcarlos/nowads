    <?php fromsession("out"); ?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Por Favor Ingresa tus Datos de Usuario </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                   <!--<h4> Login with facebook <strong> / </strong>Google :</h4>
                    <br />
                    <a href="index.php?v=login" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook Account</a>
                    &nbsp;OR&nbsp;
                    <a href="index.php?v=login" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google Account</a>
                    <hr />-->
                    <form name="flogin" id="flogin" method="post" action="?v=login" autocomplete="off">
                         <h4> Iniciar Sesi&oacute;n en <strong>NowAds  :</strong></h4>
                        <br />
                            <div class="form-group">
                                <label for="txtusername">Usuario : </label>
                                <input type="text" name="txtusername" id="txtusername" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="txtpassword"> Contrase&ntilde;a:  </label>
                                <input type="password" name="txtpassword" id="txtpassword" class="form-control" />
                            </div>
                            <input type="hidden" name="operation" id="operation" value="login">
                            <hr />
                            <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Iniciar Sesi&oacute;n </button>&nbsp;
                        </form>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        NowAds es una plataforma que te permitira mejorar los ingresos de tu web si usas
                        programas como Adsense o Adnow ya que se enfoca en las siguientes caracteristicas
                        <br />
                         <strong> Caracteristicas de NowAds :</strong>
                        <ul>
                            <li>
                                Registrar tus sitios web y trabajar de forma individual
                            </li>
                            <li>
                                Llevar el control de clicks en cada una de dichas web
                            </li>
                            <li>
                                Controlar los codigos ocultos ya sea para activarlos o desactivarlos
                            </li>
                            <li>
                                Integraci&oacute;n con otros c&oacute;digos ocultos
                            </li>
                        </ul>
                       
                    </div>
                    <div class="alert alert-success">
                         <strong> Instrucciones de Uso:</strong>
                        <ul>
                            <li>
                               Ingresa tus datos correctament
                            </li>
                            <li>
                                 Verifica que tus web esten bien Configuradas
                            </li>
                            <li>
                                Coloca los Codigos en tus Web tal cual el Estandar
                            </li>
                            <li>
                                 Genera ingresos en tus Webs
                            </li>
                        </ul>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <script type="text/javascript">
        $(document).ready(function(){
            alr("<?php print $operation; ?>",<?php print $error; ?>,"login");
            $("#flogin").validate({
                rules : {
                    txtusername : {
                        required: true
                    },
                    txtpassword : {
                        required : true
                    }
                },
                messages : {
                    txtusername : {
                        required : "<span class='error-message'>Campo Obligatorio</span>"
                    },
                    txtpassword : {
                        required : "<span class='error-message'>Campo Obligatorio</span>"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>