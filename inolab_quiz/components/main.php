<body>

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    <div class="container-fluid bg-body-tertiary">
        <div class="row">
            <div class="col-3 text-center">
                <a class="navbar-brand">
                    <img src="https://inolab.com/seminario-analisis-particulas/img/inolabLogoLanding.png" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

    <div id="dataBaseApp">
        <div class="container" v-cloak>
            <div class="row">
                <div class="col-12 mt-5">
                    <h3 class="text-center">Clientes Quiz</h3>
                    <p class="text-center small"><b>{{ data.length }}</b> Clientes </p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-4 col-lg-4 col-12">
                            <input type="text" class="form-control" placeholder="Buscar registro..." v-model="searchInput">
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-4 col-12  mt-5" v-for="({client_id, client_folio, client_name, client_lastName, client_area, company, client_mail, client_tel, 
                client_ext, client_date }, index) in tarjetasPaginadas" :key="index" v-cloak>

                    <div class="card shadow-sm" style="max-height: 500px;">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between;">
                                <h5 class="card-title">{{ company }}</h5>
                                <span>N° Folio: {{client_folio }}</span>
                            </div>
                            <p>{{ client_name }} {{ client_lastName }}</p>
                            <span class="badge rounded-pill text-bg-primary">{{ client_area }}</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b>Fecha Servicio:</b> {{ client_date }}
                            </li>
                            <li class="list-group-item">
                                <b>Correo:</b> {{ client_mail }}
                            </li>
                            <li class="list-group-item">
                                <b>Teléfono:</b> {{ client_tel }}
                            </li>
                            <li class="list-group-item">
                                <b>Extensión:</b> {{ client_ext }}
                            </li>
                            <li class="list-group-item d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-outline-primary" @click.prevent="sendForm(client_id)">Enviar Encuesta</button>
                        </ul>
                        <div class="card-body" style="height: 200px; overflow-y: auto">
                            <p><b>Respuestas :</b></p>

                            <!-- <ul class="list-group list-group-flush" v-if="INTERESES != ''">
                                <li class="list-group-item small" v-for="(interest, index) in INTERESES.split(',')">
                                    <i class="bi bi-check-circle-fill text-success"></i> {{ interest }}
                                </li>
                            </ul> -->

                            <p v-else>
                                No se registraron intereses.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 justify-content-center mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous" @click.prevent="if (paginaActual > 1) { paginaActual--; irAlInicio(); }" :disabled="paginaActual <= 1">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item" v-for="numero in paginasVisibles" :key="numero">
                            <a class="page-link" :class="{ 'active-page': numero === paginaActual }" href="#" @click.prevent="cambiarPagina(numero)">
                                {{ numero }}
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next" @click.prevent="if (paginaActual < numeroDePaginas) { paginaActual++; irAlInicio(); }" :disabled="paginaActual >= numeroDePaginas">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>