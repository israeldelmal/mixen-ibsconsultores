<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



<!--/* PIE */-->



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="pie" id="pie">

    <div class="container light-spacing">

        <div class="row no-margin">

            <div class="col-sm-4 col-xs-6 left-side">

                <ul class="nav navbar-nav">

                    <li class="active"><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll">INICIO</a></li>

                    <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#nosotros" class="smoothScroll">NOSOTROS</a></li>

                    <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#servicios" class="smoothScroll">SERVICIOS</a></li>

                    <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#seguros" class="smoothScroll">ASEGURADORAS</a></li>

                    <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#contacto" class="smoothScroll">CONTACTO</a></li>

                </ul>

            </div>

            <div class="col-sm-4 col-xs-6 middle-side">

                <a class="smoothScroll" href="#index">

                    <div class="img-container">

                        <img src="<?php echo bloginfo('template_url').'/';?>img/icons/logo-nav.png" alt="">

                    </div>

                </a>

                <a class="social" target="_blank" href="https://www.facebook.com/ibsconsultores/">

                    <i class="fa fa-facebook-square" aria-hidden="true"></i>

                </a>

            </div>

            <div class="col-sm-4 right-side"></div>

        </div>

    </div>

</div>

<footer>

    <div class="text-center footer-rights">

        <p>

            Todos los derechos reservados IBS Consultores <?php echo date('Y'); ?>. | Made by: <a target="_blank" href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-new.png" alt="Agencia Mixen"></a>

        </p>

    </div>

</footer>
<?php wp_footer();?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



    <!--/* SCRIPTS */-->



    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <script src="<?php echo bloginfo('template_url').'/';?>js/app.js"></script>
    <script src="<?php echo bloginfo('template_url').'/';?>js/parallax.js"></script>
    <script src="<?php echo bloginfo('template_url').'/';?>js/google-maps.js"></script>
    <script src="<?php echo bloginfo('template_url').'/';?>js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url').'/';?>js/ekko-lightbox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSoQy-nwSkGBuVAxUFwml6ZFKM9K9txuM&callback=initMap"></script>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        (function(i, s, o, g, r, a, m) {i['widgetSegutrends_url'] = r;a = s.createElement(o),m = s.getElementsByTagName(o)[0];a.async = 1;a.src = g;m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://widget.segupoliza.com/WidgetSegutrends.js', 'http://ibs_w.segupoliza.com');
    </script>
</body>
</html>