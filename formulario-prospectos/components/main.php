<body>
    <div class="back d-flex justify-content-center">
        <div class="col-xl-7 col-12 p-3">
            <div id="main">
                <div class="card-custom">
                    <div class="card shadow">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12">
                                <div class="card-header" style="background-color: #192a56;">
                                    <div class="col-5">
                                        <img src="img/inolabCalado.png" alt="" style="width: 150px; height:auto;">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="col-12">
                                            <p class="tittle text-primary-emphasis">Completa el formulario para registrar un nuevo prospecto.</p>
                                        </div>
                                        <div class="col-8">
                                            <div class="text-start">
                                                <label for="medio">Selecciona la fuente del prospecto:</label>
                                                <select class="form-select" v-model="channel" :class="((emptyInputs && channel == 0) && 'is-invalid')">
                                                    <option :value="0" disabled>Seleccionar canal</option>
                                                    <option v-for="({ title }, index) in channels" :id="'ddl-' + index">{{ title }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-start">
                                                <div class="form-group mt-2">
                                                    <label for="name">Nombre:</label>
                                                    <input type="text" class="form-control" :class="((emptyInputs && name == '') && 'is-invalid')" id="name" placeholder="Ingresa el nombre cliente:" required="required" v-model="name" autocomplete="off">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-start">
                                                    <div class="form-group mt-2">
                                                        <label for="email">Correo Electrónico:</label>
                                                        <input type="email" class="form-control" :class="(invalidEmail && 'is-invalid') || ((emptyInputs && email == '')
                                            && 'is-invalid')" id="email" placeholder="Correo electrónico del cliente:" required="required" v-model="email" autocomplete="off">
                                                        <p><small style="color: #eb4d4b">{{invalidEmail}}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-start">
                                                    <div class="form-group mt-2">
                                                        <label for="tel">Número Telefónico:</label>
                                                        <input type="tel" class="form-control" :class="(invalidTel && 'is-invalid') || 
                ((emptyInputs && tel == '') && 'is-invalid')" id="tel" placeholder="Telefono del cliente:" required="required" v-model="tel" autocomplete="off" @keypress="onlyNumber($event)" maxlength="10">
                                                        <p><small style="color: #eb4d4b">{{invalidTel}}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="text-start">
                                                    <div class="form-group mt-2">
                                                        <label for="ext">Extensión:</label>
                                                        <input type="tel" class="form-control" id="ext" placeholder="Extensión:" required="required" v-model="ext" autocomplete="off" @input="limitInput" @keypress="onlyNumber($event)" inputmode="numeric">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-start">
                                                    <div class="form-group mt-2 mb-3">
                                                        <label for="company">Nombre de tu empresa:</label>
                                                        <input class="form-control" :class="((emptyInputs && company == '') && 'is-invalid')" placeholder="Nombre de la empresa del cliente:" required="required" v-model="company" autocomplete="off"></input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-start">
                                                    <div class="form-group mb-4">
                                                        <label for="job">Puesto de trabajo:</label>
                                                        <input class="form-control" placeholder="Puesto de trabajo del cliente:" required="required" v-model="job" autocomplete="off"></imput>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-start mb-2">
                                                    <div class="form-group">
                                                        <label for="comments">Requerimientos:</label>
                                                        <textarea type="text" class="form-control" :class="((emptyInputs && comments == '') && 'is-invalid')" id="comments" placeholder="Cuál es el requerimiento del cliente:" required="required" v-model="comments" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="d-flex justify-content-start">
                                                    Interesado en:
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3 mb-2">
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-success btn-sm rounded-pill w-75" :class="((emptyInputs && getSelectedProducts.length == 0) && 'input-error')" data-bs-toggle="modal" data-bs-target="#interestModal">
                                                        Intereses
                                                        <i class="bi bi-plus-circle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="list-group-primary" v-if="getSelectedProducts.length > 0">
                                                    <span class="badge rounded-pill text-bg" style="margin-right: 10px; background-color: #ccc;" v-for="product in visibleProducts">{{ product.title }}</span>
                                                    <span class="badge rounded-pill text-bg" style="background-color: #ccc;" v-if="remainingCount > 0">+{{ remainingCount }}</span>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="d-flex justify-content-end">
                                                    <button style="background-color: #052c65; color: white;" type="button" class="btn btn btn-sm rounded-pill w-50 btn_enviar" @click.prevent="sendForm()">
                                                        Enviar Información
                                                        <i class="bi bi-send-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal modal-lg fade" id="interestModal" tabindex="-1" aria-labelledby="interestModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interestModalLabel">
                                    Líneas de Interés
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item" v-for="({ title, products }, indexA) in assigments" :key="indexA">
                                            <h2 class="accordion-header" :id="'heading' + indexA">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapse' + indexA" aria-expanded="false" :aria-controls="'collapse' + indexA">
                                                    {{ title }}
                                                </button>
                                            </h2>
                                            <div :id="'collapse' + indexA" class="accordion-collapse collapse" :aria-labelledby="'heading' + indexA" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="w-100 mb-2">
                                                            <span class="fw-bold">{{ title }}</span>
                                                        </div>
                                                        <div class="col-md-6" v-for="({ title, selected }, indexP) in products" :key="indexP">
                                                            <label :for="'chk' + indexA + indexP" class="form-check d-flex align-items-center container-chk">
                                                                <input class="form-check-input me-2" type="checkbox" :value="title" :id="'chk' + indexA + indexP" :checked="selected" @change="setStatusProduct(selected, indexA, indexP)">
                                                                {{ title }}
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                    Confirmar y Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>