<section id="main">
    <div class="container-fluid m-0 p-0 d-flex justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9 m-0 p-0 align-items-center">
                <div class="card rounded shadow-lg mdb-card">
                    <div class="row g-0">
                        <div class="col-md-5 d-none d-md-block mdb-bg" style="background-image: url('./img/FC_expoFarma.jpg');
                                            background-repeat: no-repeat; background-position: center;
                                            background-size: cover; height: auto;">
                        </div>
                        <div class="col-12 d-md-none mdb-bg mt-" style="background-image: url('./img/FC_expoFarmaMovil\.jpg');
                                            background-repeat: no-repeat; background-position: center;
                                            background-size: cover; height: 120px; width: 10;">
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="card-body py-5 px-4 p-md-5">
                                <h4 class="fw-bold mb-4 mt-3" style="color: #92aad0">
                                    Formulario de Prospectos ExpoFarma 2024
                                </h4>
                                <p class="mb-1 fw-bold" style="color: #45526e">
                                    Siempre estamos listos para ayudarte
                                </p>
                                <div class="mb-1">
                                    <small>
                                        Completa el siguiente formulario para recibir
                                        una asesoría personal de uno de nuestros
                                        Especialistas
                                    </small>
                                </div>
                                <form>
                                    <div class="text-start">
                                        <div class="form-group">
                                            <label for="name">Nombre:</label>
                                            <input type="text" class="form-control" :class="((emptyInputs && name == '') && 'is-invalid')" id="name" placeholder="Nombre del cliente" required="required" v-model="name" autocomplete="off">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="text">
                                                <div class="form-group">
                                                    <label for="email">Correo Electrónico:</label>
                                                    <input type="text" class="form-control" :class="((emptyInputs && email == '') && 'is-invalid')" id="email" placeholder="Correo Electrónico" require="required" v-model="email" autocomplete="off" pattern="/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,">
                                                    <p><small style="color: #eb4d4b">{{invalidEmail}}</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text">
                                                <div class="form-group">
                                                    <label for="tel">Numero Telefónico:</label>
                                                    <input type="tel" class="form-control" :class="((emptyInputs && tel == '') && 'is-invalid')" id="tel" placeholder="Numero Telefónico" required="required" v-model="tel" autocomplete="off">
                                                    <p><small style="color: #eb4d4b">{{invalidTel}}</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="text">
                                                <div class="form-group">
                                                    <label for="company">Empresa</label>
                                                    <input type="text" class="form-control" :class="((emptyInputs && company == '') && 'is-invalid')" id="company" placeholder="Empresa del cliente" require="required" v-model="company" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text">
                                                <div class="form-group">
                                                    <label for="job">Cargo:</label>
                                                    <input type="text" class="form-control" :class="((emptyInputs && job == '') && 'is-invalid')" id="job" placeholder="Cargo del cliente" required="required" v-model="job" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start mt-2  mb-2">
                                        <div class="form-group">
                                            <label for="comments">Comentarios:</label>
                                            <textarea type="text" class="form-control" :class="((emptyInputs && comments == '') && 'is-invalid')" id="comments" placeholder="Comentarios:" required="required" v-model="comments" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning btn-rounded mdb-btn" :class="((emptyInputs && getSelectedProducts.length == 0)
                                                             && 'input-error')" data-mdb-toggle="modal" data-mdb-target="#interestModal">
                                                Agregar Líneas de Interes
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="button" class="btn btn-primary btn-rounded mdb-btn" @click.prevent="sendForm()">
                                                    Enviar
                                                </button>
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
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-auto" v-for="({ title, products }, indexA) in assigments" :key="indexA">
                                                            <div class="d-flex justify-content-between flex-wrap mt-3">
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
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary mdb-btn" data-mdb-dismiss="modal">
                                                        Confirmar y Cerrar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>