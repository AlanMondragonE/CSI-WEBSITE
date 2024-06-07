<?php

$production = false;

$route = "";

if (!$production) {
    $route = "/inolab-website";
}

?>
<footer>
    <div class="barraInferior">
        <div class="elementosFooter">
            <div class="logo_footer">
                <img src="img/logos/logo-blanco.png" alt="Logo Inolab" width="145" height="55">
            </div>
            <br>
            <div class="elemFooter_razon" style="display: flex; flex-direction: column;">
                <p style="font-size: 12px;">INOLAB ESPECIALISTAS DE SERVICIO S.A. DE C.V.</p> <br>
                <a href="https://inolab.com/politica-privacidad/" target="_blank">
                    <p>Política de privacidad</p>
                </a>
            </div>
            <br>
            <br>
            <div class="redes_sociales">
                <a class="fb" href="https://www.facebook.com/InolabEspecialistas/" target="_blank"><i class="fab fa-facebook-f"></i></i>
                </a>
                <a class="yt" href="https://www.youtube.com/channel/UCHLr9n14NPKNCmOLelW3YWg" target="_blank"><i class="fab fa-youtube"></i></i>
                </a>
                <a class="lk" href="https://www.linkedin.com/in/inolab-especialistas" target="_blank"><i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <br>
        </div>
        <br>
        <div class="elementosFooter2">
            <div class="datosFooter">
                <h2>UBICACIÓN Y CONTACTO</h2>
                <br>
                <p>Aniceto Ortega, No.1341, Colonia del Valle, C.P. 03100, Ciudad de México</p>
                <br>
                <p id="telF">Ciudad de México - 55 5524 2429</p>
                <p id="telF">Guadalajara - 33 3330 2848</p>
                <br>
                <a id="tel_footer" href="tel:+525555242429">Tel. 55 5524 2429</a>
                <a href="mailto:ventas@inolab.com">ventas@inolab.com</a>
                <br>
                <a href="mailto:atencionclientes@inolab.com">atencionclientes@inolab.com</a>
            </div>
        </div>
        <br>
        <div class="elementosFooter3">
            <div class="titulo_enlaces">
                <h2>ENLACES</h2>
            </div>
            <br>
            <div class="enlaces">
                <div class="cont_enlaces">
                    <ul>
                        <li><a href="http://www.inolab.com" target="_self">Inicio</a></li>
                        <li><a href="https://inolab.com/ciencias-de-la-separacion.html" target="_self">Ciencias de la Separación</a></li>
                        <li><a href="https://inolab.com/biotecnologia.html" target="_self">Biotecnología</a></li>
                        <li><a href="https://inolab.com/biologia-molecular.html" target="_self">Biología Molecular</a></li>
                    </ul>
                </div>
                <div class="cont_enlaces">
                    <ul>
                        <li><a href="https://inolab.com/especialidades.html" target="_self">Especialidades</a></li>
                        <li><a href="https://inolab.com//temperatura.html" target="_self">Temperatura</a></li>
                        <li><a href="https://inolab.com/soporte-tecnico.html" target="_self">Soporte Técnico</a></li>
                        <li><a href="https://inolab.com/contacto.html" target="_self">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="politica_Priv">
        <h3 class="text-white">© Inolab Especialistas 2024.</h3>
    </div>
    <br>
    <br>
</footer>



<!-- script plyr -->
<script src="https://unpkg.com/plyr@3"></script>
<!-- script vue js-->
<script src="https://unpkg.com/vue@3"></script>
<!-- Modals ---->
<script src="https://unpkg.com/micromodal@0.4.10/dist/micromodal.min.js"></script>
<!-- Script de alertas  -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Script Jquery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Script carousel  -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>



<!-- Script core del sitio  -->
<script type="module" src="js/core.js"></script>
<!-- Script core del sitio  -->
<script type="module" src="js/main.js"></script>
<!-- Script del menú  -->

<script src="<?php echo ($route) ?>/website-assets/assets/js/menu.js"></script>

<!-- Script de chat de la app  -->
<script src="<?php echo ($route) ?>/website-assets/assets/js/chat.js"></script>

<!-- Script de contacto de la app  -->
<script src="<?php echo ($route) ?>/website-assets/assets/js/contact.js" defer></script>

<!-- Script del buscador de la app  -->
<script type="module" src="<?php echo ($route) ?>/website-assets/assets/js/search-bar.js"></script>

<!-- Script del popup de la app  -->
<script src="<?php echo ($route) ?>/website-assets/assets/js/cookie.js"></script>

<!-- Script Galería -->
<script src='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/lightgallery.umd.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/thumbnail/lg-thumbnail.umd.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/zoom/lg-zoom.umd.js'></script>
<script src='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/video/lg-video.umd.js'></script>
<script src='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/autoplay/lg-autoplay.umd.js'></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/fullscreen/lg-fullscreen.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/pager/lg-pager.umd.js"></script>
<script src='https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/js/splide-extension-video.min.js"></script>

<!-- Aqui se colocaran los scripts-->
<script>
    function phoneEvent() {
        //Event snippet for iconoTelefono INOLAB conversion page 
        gtag('event', 'conversion', {
            'send_to': 'AW-845716858/_0DICLnSpZcZEPq6opMD'
        });
    }

    function whatsappEvent() {
        //Event snippet for WhatsApp INOLAB conversion page
        gtag('event', 'conversion', {
            'send_to': 'AW-845716858/Pc5oCOrKpZcZEPq6opMD'
        });
    }

    function mailEvent() {
        gtag('event', 'conversion', {
            'send_to': 'AW-845716858/CfOeCN3YpZcZEPq6opMD'
        });
    }

</script>

</body>

</html>