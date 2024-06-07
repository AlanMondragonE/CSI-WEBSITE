<style>
    .btn-select-products {
        width: 95%;
        height: 40px;
        border-radius: 5px;
        background-color: #FFFFFF;
        cursor: pointer;
    }

    .btn-select-products:focus {
        border: 2px solid var(--blue);
    }
</style>
<section class="Contacto mt-3" id="Contacto">
    <div class="Titulo">
        <h3 class="subtitle-1-border text-center mb-3">Estamos listos para ayudarte</h3>
    </div>
    <br>
    <div class="contacto_msj">
        <h4 class="subtitle-2 text-center">Contacta a uno de nuestros especialistas para recibir una asesoría personalizada sobre estos equipos o cotiza</h4>
    </div>
    <br>
    <br>
    <div class="formulario-content" id="contacto">
        <div class="formulario">
            <form id="formLateral">
                <div class="form_camp1">
                    <div class="dato_nombre">
                        <input type="text" :class="((emptyInputs && name == '') && 'input-error')" placeholder="Nombre:" required="required" v-model="name" autocomplete="off">
                    </div>
                    <br>
                    <div class="dato_tel" style="flex-direction: column;">
                        <input type="tel" :class="(invalidTel && 'input-error') || ((emptyInputs && tel == '') && 'input-error')" placeholder="Teléfono:" required="required" v-model="tel" autocomplete="off">
                        <p><small style="color: #eb4d4b">{{invalidTel}}</small></p>
                    </div>
                </div>
                <br>
                <div class="form_camp1">
                    <div class="dato_email" style="flex-direction: column;">
                        <input type="email" :class="(invalidEmail && 'input-error') || ((emptyInputs && email == '') && 'input-error')" placeholder="E-mail:" required="required" v-model="email" autocomplete="off">
                        <p><small style="color: #eb4d4b">{{invalidEmail}}</small></p>
                    </div>
                    <br>
                    <div class="dato_emp">
                        <input name="Empresa" :class="((emptyInputs && company == '') && 'input-error')" placeholder="Empresa:" required="required" v-model="company" autocomplete="off">
                    </div>
                </div>
                <br>

                <div class="dato_coment" style="flex-direction: column;">
                    <textarea id="campoCinco" :class="((emptyInputs && message == '') && 'input-error')" name="Mensaje" required="required" placeholder="Danos tu mensaje" cols="30" rows="10" v-model="message" autocomplete="off"></textarea>

                    <p style="width: 90%; text-align:center"><small style="color: #eb4d4b">{{(emptyInputs && (name == '' || tel == '' || email == '' || company == '' ||
                       message == '') ? emptyInputs : '')}}</small></p>
                </div>

                <div class="form_camp1 mt-2 mb-2">
                    <button type="button" class="btn-select-products" :class="((emptyInputs && getSelectedProducts.length == 0) && 'input-error')" data-custom-open="modal-products">Seleccionar Equipo / Tecnología <i class="fas fa-chevron-down"></i></button>
                </div>


                <ul class="list-group-primary" v-if="getSelectedProducts.length > 0">
                    <p class="mb-2">Estoy interesado en: </p>
                    <li v-for="({title}, index) in getSelectedProducts">{{title}}</li>
                </ul>

                <div class="form_camp1">
                    <div class="compruebaImg" alt="captcha">
                        <div class="g-recaptcha" :data-sitekey="captcha_key" style="margin-top:1em; transform:scale(0.83);-webkit-transform:scale(0.83);transform-origin:0 0;-webkit-transform-origin:0 0;">
                        </div>
                    </div>
                    <br>
                    <div class="enviarForm">
                        <button class="btn-primary btn-lg" @click.prevent="sendForm()" onclick="formEvent()"><i class="fas fa-paper-plane"></i> Enviar Mensaje</button>
                    </div>
                    <br>
                </div>
            </form>
        </div>
        <div class="datos_contacto1">
            <div class="contenido_datos mb-2">
                <p class="mb-2">INOLAB ESPECIALISTAS DE SERVICIO S.A. DE C.V.</p>
                <a href="https://goo.gl/maps/GX1cUpWqpCmPPSaw9" target="_blank">
                    <span><i class="fas fa-map-marker-alt" style="font-size: 25px"></i></span> Aniceto Ortega No.1341, Colonia del Valle, C.P. 03100, Ciudad de México.</a>
            </div>
            <br>
            <div class="contenido_datos">
                <div class="contDat_contacto">
                    <div class="cont_cont">
                        <p>Ciudad de México</p>
                        <p>55 5524 2429</p>
                        <!-- <a href="tel:+525555242429" class="uil-phone"> 55 5524 2429</a> -->
                    </div>
                    <div class="cont_cont">
                        <p>Guadalajara</p>
                        <p>33 3330 2848</p>
                        <!--<a href="tel:+523333302848" class="uil-phone"> 33 3330 2848</a> -->
                    </div>
                </div>
                <br>
                <div class="contDat_correo">
                    <p><span><i class="fas fa-envelope" style="font-size: 20px" onclick="mailEvent(); return false"></i></span><a href="mailto:ventas@inolab.com" class="text-primary"><span>ventas@inolab.com</span></a></p>
                    <p><span><i class="fas fa-envelope" style="font-size: 20px" onclick="mailEvent(); return false"></i></span> <a href="mailto:atencionclientes@inolab.com" class="text-primary"> atencionclientes@inolab.com</a></p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal inolab-modal" id="modal-products" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1">
                <div class="modal__container" role="dialog" aria-modal="true">
                    <div class="modal__header">
                        <h2 class="modal__title">
                            Seleccionar Equipo / Tecnología
                        </h2>
                        <button class="modal__close" aria-label="Close modal" data-custom-close><i class="fas fa-times-circle"></i></button>
                    </div>
                    <div class="modal__content">
                        <div style="display: flex; justify-content: space-between;width: 100%; flex-wrap: wrap;" v-for="({title, products}, indexA) in assigments">
                            <div style="width: 100%; margin-bottom: 10px"><span>{{title}}</span></div>
                            <hr>
                            <label style="width: 33%" :for="'chk' + indexA + indexP" class="container-chk" v-for="({title, selected}, indexP) in products">{{title}}
                                <input type="checkbox" :value="title" :id="'chk' + indexA + indexP" :checked="selected" @change="setStatusProduct(selected, indexA, indexP)">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__footer">
                        <button type="button" class="btn btn-primary" data-custom-close>Guardar Información Seleccionada</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </div>
</section>


<script>
    function formEvent() {
        gtag('event', 'conversion', {
            'send_to': 'AW-845716858/9osuCOv7opcZEPq6opMD'
        });
    }
</script>