<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de oportunidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow" style="background-color: #192a56 !important;">
        <div class="container">
            <img src="https://inolab.com/img2/logo_menu.png" alt="Inolab Logo">
            <p class="navbar-brand text-white mb-0">Registro de oportunidades</p>
        </div>
    </nav>

    <div class="container mt-4 mb-4" id="contact-form">
        <div class="row d-flex justify-content-center">
            <div class="col-7 mb-4">
                <h4 class="text-center">Nuevo registro de oportunidad</h4>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="ddl-1" class="form-label">Canal de comunicación</label>
                            <select id="ddl-1" class="form-select" v-model="channel" :class="((emptyInputs && channel == '') && 'is-invalid')" required>
                                <option :value="0" selected>Seleccionar Canal</option>
                                <option :value="1">Whatsapp</option>
                                <option :value="2">Ecommerce</option>
                                <option :value="3">Correo Electrónico</option>
                                <option :value="4">Expo/Conferencia</option>
                                <option :value="5">CompraNet</option>
                                <option :value="6">Directorio Industrial</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="txt-1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txt-1" placeholder="Nombre" v-model="name" :class="((emptyInputs && name == '') && 'is-invalid')" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="txt-2" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="txt-2" placeholder="Teléfono" v-model="tel" :class="(invalidTel && 'is-invalid') || ((emptyInputs && tel == '') && 'is-invalid')" required>
                            <p class="small text-danger">{{invalidTel}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="txt-3" class="form-label">Correo Electrónico</label>
                            <input type="text" class="form-control" id="txt-3" placeholder="Correo Electrónico" v-model="email" :class="((emptyInputs && email == '') && 'is-invalid')" maxlength="256" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="txt-4" class="form-label">Empresa</label>
                            <input type="text" class="form-control" id="txt-4" placeholder="Empresa" v-model="company" :class="((emptyInputs && company == '') && 'is-invalid')" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="txt-5" class="form-label">Puesto/Cargo <span class="small fw-bold">(Opcional)</span></label>
                            <input type="text" class="form-control" id="txt-5" placeholder="Puesto/Cargo" v-model="charge" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="txt-6" class="form-label">Requerimiento</label>
                            <textarea class="form-control" id="txt-6" rows="3" v-model="message" :class="((emptyInputs && message == '') && 'is-invalid')" required></textarea>
                            <div class="form-text">Ingresa los requerimiento(s) del cliente</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <div class="mb-3">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#interestsModal">
                                <i class="bi bi-plus-circle-dotted"></i> Seleccionar intereses
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-light fw-bold mb-0">Listado de intereses</li>
                                <li class="list-group-item d-flex justify-content-between align-items-start small" v-for="({title, indexA, indexP, selected}, index) in getSelectedProducts">
                                    <span>
                                        {{title}}
                                    </span>
                                    <button class="btn btn-sm btn-danger rounded-2" @click="setStatusProduct(selected, indexA, indexP)"><i class="bi bi-trash-fill"></i></button
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="txt-7" class="form-label">Comentarios <span class="small fw-bold">(Opcional)</span></label>
                            <textarea class="form-control" id="txt-7" rows="3" v-model="comments"></textarea>
                            <div class="form-text">Agrega los comentarios que se consideren necesario e importantes.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="button" @click.prevent="sendForm()">Registrar oportunidad</button>
                    </div>
                </div>
            </div>

        </div>


        <!-- Modal -->
        <div class="modal fade modal-lg" id="interestsModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Seleccionar Intereses</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container row">

                            <ul class="list-group list-group-flush col-lg-6 mb-4" v-for="({title, products}, indexA) in assigments">

                                <li class="list-group-item bg-white d-flex justify-content-between align-items-start rounded-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{title}}</div>
                                    </div>
                                </li>

                                <li class="list-group-item" v-for="({title, selected}, indexP) in products">
                                    <input class="form-check-input me-1" type="checkbox" :value="title" :id="'chk' + indexA + indexP" :checked="selected" @change="setStatusProduct(selected, indexA, indexP)">
                                    <label class="form-check-label stretched-link small" :for="'chk' + indexA + indexP">{{title}}</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3.1.1/dist/vue.global.prod.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./app.js"></script>
</body>

</html>