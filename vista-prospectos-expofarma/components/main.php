<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Este es el link ref para las clases de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Vista Prospectos | ExpoFarma</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://inolab.com/catalogo/assets/img/favicon/favicon.ico">
</head>

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
                    <h3 class="text-center">Prospectos Expofarma 2024</h3>
                    <p class="text-center small"><b>{{ data.length }}</b> Oportunidades Registradas</p>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-4 col-lg-4 col-12">
                            <input type="text" class="form-control" placeholder="Buscar registro..." v-model="searchInput">
                        </div>
                        <div class="col-xxl-8 col-lg-8 col-12 d-flex justify-content-end">
                            <button @click="exportToExcel()" class="btn btn-success">Exportar a Excel</button>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-4 col-12  mt-5" v-for="({EMPRESA, NOMBRE, PUESTO, CORREO, TELEFONO, INTERESES, COMENTARIO, FECHA}, index) in tarjetasPaginadas" :key="index" v-cloak>
                    <div class="card shadow-sm" style="max-height: 500px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ EMPRESA }}</h5>
                            <p>{{ NOMBRE }}</p>
                            <span class="badge rounded-pill text-bg-primary">{{ PUESTO }}</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b>Correo:</b> {{ CORREO }}
                            </li>
                            <li class="list-group-item">
                                <b>Teléfono:</b> {{ TELEFONO }}
                            </li>
                        </ul>
                        <div class="card-body" style="height: 200px; overflow-y: auto">
                            <p><b>Interesado en:</b></p>

                            <ul class="list-group list-group-flush" v-if="INTERESES != ''">
                                <li class="list-group-item small" v-for="(interest, index) in INTERESES.split(',')">
                                    <i class="bi bi-check-circle-fill text-success"></i> {{ interest }}
                                </li>
                            </ul>

                            <p v-else>
                                No se registraron intereses.
                            </p>

                        </div>
                        <div class="card-body" style="height: 180px; overflow-y: auto">
                            <p><b>Comentarios:</b></p>
                            <p>{{ COMENTARIO }}</p>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>