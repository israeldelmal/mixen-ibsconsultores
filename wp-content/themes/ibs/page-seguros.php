<?php $title = 'IBS Consultores | Seguros'; ?>

<?php $page = 'page-seguros';?>

<?php include('header.php');?>

    <div class="wrapper page-seguros" id="page-seguros">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



        <!--/* TOP-INFO */-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <div class="top-info" id="top-info">

            <div class="container">

                <div class="vertical-align">

                    <div class="row no-margin">

                        <p class="hidden-xs">

                            <i class="fa fa-map-marker" aria-hidden="true"></i> GONZÁLEZ COSSIO 3703, COL. LAS GRANJAS, CHIHUAHUA, CHIHUAHUA

                        </p>

                        <a class="phone" href="tel:016144148936">

                            <i class="fa fa-mobile" aria-hidden="true"></i> TEL. (614)414.8936

                        </a>

                        <a class="social" target="_blank" href="https://www.facebook.com/ibsconsultores/">

                            <i class="fa fa-facebook-square" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



        <!--/* FORM */-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <div class="form-section parallax-container" id="form-section">

            <div class="parallax">

                <img src="<?php echo bloginfo('template_url').'/';?>img/index/seguros/bg.jpg" alt="Parallax">

            </div>

            <div class="container light-spacing">

                <div class="tab-content">

                    <div role="tabpanel" class="tab-danos tab-pane fade in active" id="form-tab-1">

                        <h1>

                            Cotiza tu Seguro contra <span class="yellow">Daños</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-danos">

                                <div class="campos">

                                    <input type="text" name="name" id="name-danos" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-danos" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-danos" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnDanos">

                                    <input type="submit" name="form-submit" id="form-submit-danos" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-casa tab-pane fade in" id="form-tab-2">

                        <h1>

                            Cotiza tu Seguro de <span class="yellow">Casa</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-casa">

                                <div class="campos">

                                    <input type="text" name="name" id="name-casa" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-casa" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-casa" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnCasa">

                                    <input type="submit" name="form-submit" id="form-submit-casa" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-empresarial tab-pane fade in" id="form-tab-3">

                        <h1>

                            Cotiza tu Seguro <span class="yellow">Empresarial</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-empresarial">

                                <div class="campos">

                                    <input type="text" name="name" id="name-empresarial" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-empresarial" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-empresarial" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnEmpresarial">

                                    <input type="submit" name="form-submit" id="form-submit-empresarial" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-auto tab-pane fade in" id="form-tab-4">

                        <h1>

                            Cotiza tu Seguro de <span class="yellow">Auto</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-auto">

                                <div class="campos">

                                    <input type="text" name="name" id="name-auto" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-auto" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-auto" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnAuto">

                                    <input type="submit" name="form-submit" id="form-submit-auto" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-accidentes tab-pane fade in" id="form-tab-5">

                        <h1>

                            Cotiza tu Seguro contra <span class="yellow">Accidentes</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-accidentes">

                                <div class="campos">

                                    <input type="text" name="name" id="name-accidentes" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-accidentes" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-accidentes" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnAccidentes">

                                    <input type="submit" name="form-submit" id="form-submit-accidentes" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-medicos tab-pane fade in" id="form-tab-6">

                        <h1>

                            Cotiza tu Seguro de <span class="yellow">Gastos Médicos</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-medicos">

                                <div class="campos">

                                    <input type="text" name="name" id="name-medicos" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-medicos" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-medicos" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnMedicos">

                                    <input type="submit" name="form-submit" id="form-submit-medicos" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-jubilacion tab-pane fade in" id="form-tab-7">

                        <h1>

                            Cotiza tu Seguro de <span class="yellow">Jubilación</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-jubilacion">

                                <div class="campos">

                                    <input type="text" name="name" id="name-jubilacion" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-jubilacion" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-jubilacion" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnJubilacion">

                                    <input type="submit" name="form-submit" id="form-submit-jubilacion" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-educacional tab-pane fade in" id="form-tab-8">

                        <h1>

                            Cotiza tu Seguro de <span class="yellow">Educación</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-educacional">

                                <div class="campos">

                                    <input type="text" name="name" id="name-educacional" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-educacional" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-educacional" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnEducacion">

                                    <input type="submit" name="form-submit" id="form-submit-educacion" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-vida tab-pane fade in" id="form-tab-9">

                        <h1>

                            Cotiza tu Seguro de <span class="yellow">Vida</span>

                        </h1>

                        <div class="form-container">

                            <form class="form-content" action="mailer.php" method="POST" id="form-vida">

                                <div class="campos">

                                    <input type="text" name="name" id="name-vida" placeholder="*NOMBRE" required="">

                                    <input type="email" name="email" id="email-vida" placeholder="*CORREO ELECTRÓNICO" required="">

                                    <input type="number" name="phone" id="phone-vida" placeholder="*TELÉFONO" required="">

                                </div>

                                <div class="text-center">

                                    <input type="hidden" name="bttnVida">

                                    <input type="submit" name="form-submit" id="form-submit-vida" value="ENVIAR">

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="form-output" id="form-output"></div>

            </div>

        </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



        <!--/* SEGUROS */-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <div class="seguros" id="seguros">

            <div class="container light-spacing">

                <ul class="nav nav-tabs resizeheight" role="tablist">

                    <li role="presentation" class="nav-danos active">

                        <a href="#tab-1" data-target="#tab-1, #form-tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">

                            DAÑOS

                        </a>

                    </li>

                    <li role="presentation" class="nav-casa">

                        <a href="#tab-2" data-target="#tab-2, #form-tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">

                            CASA

                        </a>

                    </li>

                    <li role="presentation" class="nav-empresarial">

                        <a href="#tab-3" data-target="#tab-3, #form-tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">

                            EMPRESARIAL

                        </a>

                    </li>

                    <li role="presentation" class="nav-auto">

                        <a href="#tab-4" data-target="#tab-4, #form-tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">

                            AUTO

                        </a>

                    </li>

                    <li role="presentation" class="nav-accidentes">

                        <a href="#tab-5" data-target="#tab-5, #form-tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">

                            ACCIDENTES

                        </a>

                    </li>

                    <li role="presentation" class="nav-medicos">

                        <a href="#tab-6" data-target="#tab-6, #form-tab-6" aria-controls="tab-6" role="tab" data-toggle="tab">

                            GASTOS MÉDICOS

                        </a>

                    </li>

                    <li role="presentation" class="nav-jubilacion">

                        <a href="#tab-7" data-target="#tab-7, #form-tab-7" aria-controls="tab-7" role="tab" data-toggle="tab">

                            JUBILACIÓN

                        </a>

                    </li>

                    <li role="presentation" class="nav-educacional">

                        <a href="#tab-8" data-target="#tab-8, #form-tab-8" aria-controls="tab-8" role="tab" data-toggle="tab">

                            EDUCACIONAL

                        </a>

                    </li>

                    <li role="presentation" class="nav-vida">

                        <a href="#tab-9" data-target="#tab-9, #form-tab-9" aria-controls="tab-9" role="tab" data-toggle="tab">

                            VIDA

                        </a>

                    </li>

                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-danos tab-pane fade in active" id="tab-1">

                        <div class="row no-margin">

                            <h1>

                                DAÑOS

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/dano.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-casa tab-pane fade in" id="tab-2">

                        <div class="row no-margin">

                            <h1>

                                CASA

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/casa.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-empresarial tab-pane fade in" id="tab-3">

                        <div class="row no-margin">

                            <h1>

                                EMPRESARIAL

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/empresarial.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-auto tab-pane fade in" id="tab-4">

                        <div class="row no-margin">

                            <h1>

                                AUTO

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/auto.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-accidentes tab-pane fade in" id="tab-5">

                        <div class="row no-margin">

                            <h1>

                                ACCIDENTES

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/accidentes.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-medicos tab-pane fade in" id="tab-6">

                        <div class="row no-margin">

                            <h1>

                                GASTOS MÉDICOS

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/gastos.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-jubilacion tab-pane fade in" id="tab-7">

                        <div class="row no-margin">

                            <h1>

                                JUBILACIÓN

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/jubilacion.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-educacional tab-pane fade in" id="tab-8">

                        <div class="row no-margin">

                            <h1>

                                EDUCACIONAL

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/educacional.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-vida tab-pane fade in" id="tab-9">

                        <div class="row no-margin">

                            <h1>

                                VIDA

                            </h1>

                            <p>



                            </p>

                            <div class="img-container" style="background: url(<?php echo bloginfo('template_url').'/';?>img/seguros/content/vida.jpg) no-repeat center center;"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



        <!--/**********************************/-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    </div>

    <script>

        var $opcion = '<?php echo $_GET["opcion"]; ?>';



        if($opcion == 'casa' || $opcion == 'empresarial' || $opcion == 'auto' || $opcion == 'accidentes' || $opcion == 'medicos' || $opcion == 'jubilacion' || $opcion == 'educacional' || $opcion == 'vida')

        {

            $('#seguros .nav-tabs li').removeClass('active');

            $('#seguros .tab-pane').removeClass('active');

            $('#form-section .tab-pane').removeClass('active');



            $('.nav-'+$opcion).addClass('active');

            $('.tab-'+$opcion).addClass('active');

        }

    </script>

<?php include('footer.php');?>