<!-- El main data title es para el nombre de la pagina en la ventana del browser -->
<main data-title="CONTACTANOS | INOLAB">
    <!-- Citometría de Flujo-->
    <section class="section bg-white-2 ">
        <div class="p-auto">
            <div class="e-grid-16 mobile-1 tablet-1 mb-2 w-100 center contact-container-div">
                <div class="col-6">
                    <div class="contact-container" id="contact-container">
                        <div class="contact-container-header">
                            <div class="text text-center">
                                Con gusto atenderemos sus dudas y requerimientos de nuestros productos o servicios.
                            </div>
                        </div>
                        <div class="contact-container-main">
                            <div class="linea-horizontal" style="margin-bottom: 20px;"></div>
                            <div class="e-grid-16 mobile-2 tablet-2 mb-2 w-100">
                                <div class="col-4">
                                    <div class="icon-contact">
                                        <i class="fa-thin fa-house"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p style="font-weight: bold;">Dirección Corporativo:</p>
                                    Calle Aniceto Ortega #1341,
                                    Col. Del Valle, Del. Benito Juárez,
                                    C.P. 03100, Ciudad de México.
                                </div>
                                <div class="col-4">
                                    <div class="icon-contact">
                                        <i class="fa-thin fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p style="font-weight: bold;">Teléfono: </p>
                                    <a href="tel:+525555242429.">55 5524 2429.</a>
                                </div>
                            </div>
                            <div class="linea-horizontal"></div>
                            <div class="e-grid-16 mobile-2 tablet-2 mb-2 w-100" style="margin-top: 10px;">
                                <div class="col-4">
                                    <div class="icon-contact">
                                        <i class="fa-thin fa-house"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p style="font-weight: bold;">Dirección Oficinas:</p>
                                    Privada de las Rosas #418,
                                    Col. Chapalita,
                                    Guadalajara Jalisco.
                                </div>
                                <div class="col-4">
                                    <div class="icon-contact">
                                        <i class="fa-thin fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p style="font-weight: bold;">Teléfono: </p>
                                    <a href="tel:+52333302848">33 3330 2848</a>
                                </div>
                            </div>
                            <div class="linea-horizontal"></div>
                            <div class="e-grid-16 mobile-2 tablet-2 mb-2 w-100" style="margin-top: 10px;">
                                <div class="col-4">
                                    <div class="icon-contact">
                                        <i class="fa-thin fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p style="font-weight: bold;">E-mail:</p>
                                    <p><a href="mailto:ventas@inolab.com">ventas@inolab.com</a></p>
                                    <p class="email-address"><a href="mailto:atencionclientes@inolab.com">atencionclientes@inolab.com</a></p>
                                </div>
                            </div>
                            <div class="linea-horizontal"></div>
                            <div class="e-grid-16 mobile-2 tablet-2 mb-2 w-100" style="margin-top: 10px;">
                                <div class="col-4">
                                    <div class="icon-contact">
                                        <i class="fa-thin fa-clock"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p style="font-weight: bold;">Horarios:</p>
                                    De lunes a jueves
                                    de 8:30 a 18:00 hrs.,
                                    viernes de 8:30 a 17:00 hrs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-9">
                    <div id="contacto">
                        <div class="form-contact" id="form-contact">
                            <p class="titlee">Formulario de contacto</p>
                            <p class="subtitle">Para poder brindar un mejor servicio ponemos a su
                                disposición nuestros canales de comunicación:</p>
                            <div class="radio-buton-test">
                                <span>Ventas</span>
                                <input type="radio" id="sales" name="channel" value="sales" v-model="channel" class="radio-button-input">
                                <span>Atención a clientes</span>
                                <input type="radio" id="attention" name="channel" value="attention" v-model="channel" class="radio-button-input">
                            </div>
                            <div class="card-test">
                                <div class="card-headerr">
                                    <h3>Contacta a uno de nuestros especialistas.</h3>
                                    <p>Más información sobre nuestros productos, asesorías, o cotizaciones.</p>
                                </div>
                                <div class="card-main">
                                    <div class="formulario">
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
                                        <form id="formLateral">
                                            <div class="form_camp1">
                                                <div class="dato_nombre">
                                                    <input type="text" :class="((emptyInputs && name == '') && 'input-error')" placeholder="Ingresa tu nombre:" required="required" v-model="name" autocomplete="off">
                                                </div>
                                                <br>
                                                <div class="dato_tel" style="flex-direction: column;">
                                                    <input type="tel" :class="(invalidTel && 'input-error') || ((emptyInputs && tel == '') && 'input-error')" placeholder="Ingresa tu número telefónico:" required="required" v-model="tel" autocomplete="off">
                                                    <p><small style="color: #eb4d4b">{{invalidTel}}</small></p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form_camp1">
                                                <div class="dato_email" style="flex-direction: column;">
                                                    <input type="email" :class="(invalidEmail && 'input-error') || ((emptyInputs && email == '') && 'input-error')" placeholder="Ingresa tu correo electrónico:" required="required" v-model="email" autocomplete="off">
                                                    <p><small style="color: #eb4d4b">{{invalidEmail}}</small></p>
                                                </div>
                                                <br>
                                                <div class="dato_emp">
                                                    <input name="Empresa" :class="((emptyInputs && company == '') && 'input-error')" placeholder="Ingresa el nombre de tu empresa:" required="required" v-model="company" autocomplete="off">
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
                                            <div class="container">
                                                <ul class="list-group-primary" v-if="getSelectedProducts.length > 0">
                                                    <p class="mb-2">Estoy interesado en: </p>
                                                    <li v-for="({title}, index) in getSelectedProducts">{{title}}</li>
                                                </ul>
                                            </div>
                                            <div class="form_camp1">
                                                <div class="compruebaImg" alt="captcha">
                                                    <div class="g-recaptcha" :data-sitekey="captcha_key" style="margin-left:20px; margin-top:1em; transform:scale(0.83);-webkit-transform:scale(0.83);transform-origin:0 0;-webkit-transform-origin:0 0;">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="enviarForm">
                                                    <button class="btn-primary btn-lg" @click.prevent="sendForm()" onclick="formEvent()" style="height: 40px; margin-top:5%"><i class="fas fa-paper-plane"></i> Enviar Mensaje</button>
                                                </div>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>