<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../css/style.css">
    <style>
        /* Personaliza el fondo del card-header y card-footer */
        .card-header.no-bg,
        .card-footer.no-bg {
            background-color: transparent !important;
            text-align: end;
        }

        /* Estilo para el contenedor */
        .bannerCompu {
            position: relative;
            /* Permite posicionar elementos hijos con respecto a este contenedor */
            width: 100%;
            /* Ancho del contenedor (ajústalo según tus necesidades) */
        }

        .responsive-image {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container1 {
            position: absolute;
            background: rgb(9, 51, 121);
            background: linear-gradient(90deg, rgba(9, 51, 121, 1) 18%, rgba(0, 75, 199, 1) 46%, rgba(0, 198, 255, 1) 89%);
            width: 265px;
            /* Ajusta el ancho de los contenedores según lo desees */
            height: 95%;
            left: 80%;
            top: 5%;
            margin-right: 10%;
        }

        .num {
            position: relative;
            width: 100px;
            height: 100px;
            font-size: 50px;
            top: 5%;
            left: 10%;
            color: white;
        }

        .container2 {
            position: absolute;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7) 100%,
                    rgba(0, 0, 0, 0.7) 100%);
            /* Color de la línea (negro en este caso) */
            top: 44%;
            left: 0%;
            width: 100%;
            /* Ajusta el ancho de los contenedores según lo desees */
            height: 160px;
        }

        .title {
            position: relative;
            width: 100%;
            font-size: 23px;
            top: 5%;
            left: 0%;
            color: white;
        }

        .subTitle {
            position: relative;
            width: 100%;
            font-size: 23px;
            bottom: 5%;
            left: 0%;
            top: 1%;
            color: white;
        }

        .subTitle2 {
            position: relative;
            width: 100%;
            font-size: 23px;
            top: 5%;
            left: 0%;
            color: white;
        }

        .linea {
            border-top: 1px solid white;
            /* Una línea sólida de 2 píxeles de grosor y color negro */
            width: 100%;
            bottom: 100%;
        }

        .columna1 {
            border-right: 1px solid #666;
        }

        .card1 {
            padding: 0rem;
        }

        /*---------------------Estas son las clases para celular------------------------*/
        .background-header-mobile {
            background-image: url('img/bannerConferenciaAbril2024movil.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 175px;
            padding-top: 70px;
            margin-bottom: 50px;
        }

        .div-popover-body {
            padding: 0px;
        }

        .popover-body ul {
            font-size: 15px;
            /* Tamaño de letra deseado para la lista */
        }

        .icono {
            cursor: pointer;
            transition: color 0.3s ease;
            padding: 0 0 0 0;
        }

        .icono:hover {
            color: blue;
            /* Cambia el color a tu preferencia */
        }
        .email-link {
            color: white;
            text-decoration: none;
            border-bottom: 1px solid white; /* Agregamos un borde inferior blanco */
        }

        .email-link:hover {
            color: black;
            border-bottom-color: black; /* Cambiamos el color del borde inferior en hover */
        }
    </style>
</head>

<body>
    <div id="contact">
        <div class="container-fluid mt-3 d-none d-lg-block">
            <div class="bannerCompu">

                <div class="">

                </div>

                <div class="row">
                    <img src="img/bannerConferenciaAbril2024.jpg" class="responsive-image">
                    <!--<div class="container1"> 
                    <div class="num">
                        18
                    </div>
                    <div class="">
                    </div>
                </div>-->
                    <div class="container2">
                        <p class="title">Seminario:</p>
                        <p class="subTitle">Análisis de Partículas, ¡Rápido, Rentable y Reproducible!</p>
                        <div class="linea"></div>
                        <p class="subTitle2">La técnica de difracción láser para optimizar los flujos de trabajo en la industria farmacéutica.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 d-none d-lg-block p">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col border-end">
                            <h5 class="card-title text-center">Jueves 18 de abril del 2024</h5>
                            <p class="card-text text-center">World Trade Center, Ciudad de México, Salón Uxmal</p>
                        </div>
                        <div class="col border-end">
                            <h5 class="card-title text-center">Horario</h5>
                            <p class="card-text text-center"> 16:00 hrs - 18:00 hrs.</p>
                        </div>
                        <div class="col">
                            <h5 class="card-title text-center">Evento presencial Dirigido a:</h5>
                            <p class="card-text text-center">Directores, Gerentes y Jefes de Laboratorio. Cupo limitado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 d-block d-lg-none mb-4">


            <div class="background-header-mobile">
                <div class="bg-dark w-100 text-white p-2">
                    <h5>Seminario:</h5>
                    <p class="m-0">Análisis de Partículas, ¡Rápido, Rentable y Reproducible!</p>
                    <div class="w-100 border-bottom border-1 border-white my-2"></div>
                    <p class="mb-0">La técnica de difracción láser para optimizar los flujos de trabajo en la industria farmacéutica.</p>
                </div>
            </div>


        </div>
        <div class="container-fluid mt-5 d-block d-lg-none" style="margin-top: 70px !important;">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <p class="card-title text-center fw-bold small">Jueves 18 de abril del 2024</p>
                            <p class="card-text text-center small">World Trade Center, Ciudad de México, Salón Uxmal</p>
                        </div>
                        <div class="col-12 mt-2">
                            <p class="card-title text-center fw-bold small">Horario disponible</p>
                            <p class="card-text text-center small">16:00 - 18:00</p>
                        </div>
                        <div class="col-12 mt-2">
                            <p class="card-title text-center fw-bold small">Evento presencial Dirigido a:</p>
                            <p class="card-text text-center small">Directores, Gerentes y Jefes de Laboratorio. Cupo limitado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 mb-3">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="container-fluid d-block d-lg-none mb-3">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        RESUMEN
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        La Técnica de Difracción Láser es utilizada para la medición del
                                        tamaño de partícula y distribución, logrando resultados exactos,
                                        precisos y reproducibles. Esta técnica facilita, optimiza y reduce
                                        tiempos de los análisis permitiendo reducir costos en los procesos,
                                        con flexibilidad para muestras en líquidos y polvos (micronizados,
                                        granulados, emulsiones, suspensiones, nanopartículas, etc.).
                                        <br>
                                        <br>
                                        En este seminario conocerás los fundamentos de la técnica de difracción
                                        láser para determinación de tamaño de partícula, las estadísticas
                                        básicas para el dimensionamiento de partículas, las normativas
                                        correspondientes, además el hardware, software e instrumentación
                                        del analizador LS 13320 XR.
                                        <br>
                                        <br>
                                        Abordaremos las aplicaciones para el tamaño y distribución de partículas
                                        en emulsiones, suspensiones y polvos, para optimizar tus flujos de
                                        trabajo en la industria farmacéutica; mostraremos ejemplos concretos
                                        de casos de estudio y su aplicación práctica. Como un beneficio
                                        adicional, los asistentes tendrán la oportunidad de analizar su
                                        muestra en vivo y obtener información de sus resultados.
                                        <br>
                                        <br>
                                        Inolab Especialistas y Laboratorio de Especialidades Inmunológicas
                                        (LEI) te invitan a formar parte de este seminario para conocer
                                        más sobre la técnica, tecnología y las ventajas para optimizar y
                                        eficientar tus procesos en el laboratorio.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        SEMBLANZA DE LOS PONENTES
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <b>M. en C. Elizabeth Huazo</b>
                                        Especialista en Análisis de Partículas en Inolab
                                        Especialistas, una empresa mexicana con más de
                                        23 años de experiencia en Servicio y Equipamiento
                                        de Laboratorios. Nos especializamos en brindar
                                        asesoría técnico-comercial para la Optimización de
                                        Flujos de Trabajo para la industria Farmacéutica,
                                        Cosmética, Alimentaria, Materiales y Química en
                                        general.
                                        <br>
                                        <br>
                                        <b>T.L.Q. Miguel Ángel Bautista Reyes.</b>
                                        Un destacado experto con más de 15 años de
                                        experiencia en los Laboratorios de Especialidades
                                        Inmunológicas (LEI). Actualmente está enfocado en
                                        el área de Implementaciones Farmacéuticas y
                                        Transferencia de Tecnología, liderando el desarrollo,
                                        validación, transferencia e implementación de
                                        métodos analíticos para industrias nacionales e
                                        internacionales.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        TEMARIO:
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">1. Difracción luz láser la técnica más Rápida,
                                                Rentable y Reproducible para Determinación de Tamaño de Partícula.</li>
                                            <li class="list-group-item">2. La esencia del Análisis de
                                                Partículas radica en su instrumentación.</li>
                                            <li class="list-group-item">3. Estadísticas básicas para el Dimensionamiento
                                                de Partículas.</li>
                                            <li class="list-group-item">4. Ventajas competitivas del LS 13320 XR</li>
                                            <li class="list-group-item">5. Evolucionando de mallas a difracción
                                                láser con LS 13320 XR.</li>
                                            <li class="list-group-item">6. Descripción del Método MGA 0890.</li>
                                            <li class="list-group-item">7. Aplicaciones del Analizador en los Laboratorios
                                                de Especialidades Inmunológicas.</li>
                                            <li class="list-group-item">8. Proceso de Análisis con LS 13320 XR.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid d-none d-lg-block mb-3">
                        <div class="container-fluid">
                            <div class="card border-0">
                                <div class="card-body card1 ps-3">
                                    <h5 class="fw-bol">
                                        Abstract
                                    </h5>
                                    <div class="text">
                                        La Técnica de Difracción Láser es utilizada para la medición del
                                        tamaño de partícula y distribución, logrando resultados exactos,
                                        precisos y reproducibles. Esta técnica facilita, optimiza y reduce
                                        tiempos de los análisis permitiendo reducir costos en los procesos,
                                        con flexibilidad para muestras en líquidos y polvos (micronizados,
                                        granulados, emulsiones, suspensiones, nanopartículas, etc.).
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="text">
                                            <br>
                                            <br>
                                            En este seminario conocerás los fundamentos de la técnica de difracción láser para
                                            determinación de tamaño de partícula, las estadísticas básicas para el
                                            dimensionamiento de partículas, las normativas correspondientes, además el
                                            hardware, software e instrumentación del analizador LS 13320 XR.
                                            <br>
                                            <br>
                                            Abordaremos las aplicaciones para el tamaño y distribución de partículas en
                                            emulsiones, suspensiones y polvos, para optimizar tus flujos de trabajo en la industria
                                            farmacéutica; mostraremos ejemplos concretos de casos de estudio y su aplicación
                                            práctica. Como un beneficio adicional, los asistentes tendrán la oportunidad de
                                            analizar su muestra en vivo y obtener información de sus resultados.
                                            <br>
                                            <br>
                                            Inolab Especialistas y Laboratorio de Especialidades Inmunológicas (LEI) te invitan a
                                            formar parte de este seminario para conocer más sobre la técnica, tecnología y las
                                            ventajas para optimizar y eficientar tus procesos en el laboratorio.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer  no-bg border-0">
                                <button class="btn toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" @click="toggleButton(0)">
                                    <i :class="sections[0].icon"></i>
                                    <span>{{ sections[0].action }}</span>
                                </button>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        TEMARIO:
                                    </h5>
                                    <div class="Text">
                                        Explora el temario completo del evento.
                                        Conoce los temas clave que abordaremos en nuestro seminario.
                                    </div>
                                    <div class="collapse" id="collapseTemario">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">1. Difracción luz láser la técnica más Rápida,
                                                Rentable y Reproducible para Determinación de Tamaño de Partícula.</li>
                                            <li class="list-group-item">2. La esencia del Análisis de
                                                Partículas radica en su instrumentación.</li>
                                            <li class="list-group-item">3. Estadísticas básicas para el Dimensionamiento
                                                de Partículas.</li>
                                            <li class="list-group-item">4. Ventajas competitivas del LS 13320 XR</li>
                                            <li class="list-group-item">5. Evolucionando de mallas a difracción
                                                láser con LS 13320 XR.</li>
                                            <li class="list-group-item">6. Descripción del Método MGA 0890.</li>
                                            <li class="list-group-item">7. Aplicaciones del Analizador en los Laboratorios
                                                de Especialidades Inmunológicas.</li>
                                            <li class="list-group-item">8. Proceso de Análisis con LS 13320 XR.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer no-bg border-0">
                                    <button class="btn toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTemario" aria-expanded="false" aria-controls="collapseTemario" @click="toggleButton(1)">
                                        <i :class="sections[1].icon"></i>
                                        <span>{{ sections[1].action }}</span>
                                    </button>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        Ponentes
                                    </h5>
                                    <div class="text">
                                        <b>M. en C. Elizabeth Huazo</b>
                                        Especialista en Análisis de Partículas en Inolab
                                        Especialistas, una empresa mexicana con más de
                                        23 años de experiencia en Servicio y Equipamiento
                                        de Laboratorios. Nos especializamos en brindar
                                        asesoría técnico-comercial para la Optimización de
                                        Flujos de Trabajo para la industria Farmacéutica,
                                        Cosmética, Alimentaria, Materiales y Química en
                                        general.
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="text">
                                        <b>T.L.Q. Miguel Ángel Bautista Reyes.</b>
                                        Un destacado experto con más de 15 años de
                                        experiencia en los Laboratorios de Especialidades
                                        Inmunológicas (LEI). Actualmente está enfocado en
                                        el área de Implementaciones Farmacéuticas y
                                        Transferencia de Tecnología, liderando el desarrollo,
                                        validación, transferencia e implementación de
                                        métodos analíticos para industrias nacionales e
                                        internacionales.
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-fluid">
                        <div class="card text-center">
                            <div class="card-header bg-danger">
                                <div class="col-12">
                                    <h5 style="color: white;"><b><i class="bi bi-exclamation-triangle" style="font-size: 25px;"></i> Lugares Agotados</b></h5>
                                </div>
                                <div class="col-12">
                                    <p class="mb-0" style="color: white;">Si requiere más información sobre este tipo de eventos contáctenos: </p>
                                </div>
                                <div class="col-12 m-0 p-0">
                                    <a class="email-link" href="mailto:marketing.contacto@inolab.com">marketing.contacto@inolab.com</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="controladores/registro" method="post">
                                    <div class="text-start">
                                        <div class="form-group mt-2">
                                            <label for="name">Nombre:</label>
                                            <input type="text" class="form-control" disabled :class="((emptyInputs && name == '') && 'is-invalid')" id="name" placeholder="Ingresa tu nombre" required="required" v-model="name" autocomplete="off">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mt-2">
                                            <label for="email">Correo Electrónico:</label>
                                            <input type="email" class="form-control" disabled :class="(invalidEmail && 'is-invalid') || ((emptyInputs && email == '')
                                            && 'is-invalid')" id="email" placeholder="Ingresa tu correo electrónico:" required="required" v-model="email" autocomplete="off">
                                            <p><small style="color: #eb4d4b">{{invalidEmail}}</small></p>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mt-2">
                                            <label for="tel">Número Telefónico:</label>
                                            <input type="tel" class="form-control" disabled :class="(invalidTel && 'is-invalid') || 
                                            ((emptyInputs && tel == '') && 'is-invalid')" id="tel" placeholder="Ingresa tu número telefónico" required="required" v-model="tel" autocomplete="off">
                                            <p><small style="color: #eb4d4b">{{invalidTel}}</small></p>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mt-2 mb-3">
                                            <label for="company">Nombre de tu empresa:</label>
                                            <textarea class="form-control" disabled :class="((emptyInputs && company == '') && 'is-invalid')" placeholder="Nombre de la empresa:" required="required" v-model="company" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mt-2 mb-3">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <label for="options1" disabled class="form-label me-2">¿Desea llevar una muestra para ser analizada en el evento?</label>
                                                    <div class="icono d-inline">
                                                        <i class="bi bi-question-circle text-center" data-bs-toggle="popover" data-bs-content="
                                                        <ul style='font-size: 16px;'>
                                                            <li>Maximo dos muestras por invitado.</li>
                                                            <li>Especificar el activo a analizarse.</li>
                                                            <li>Especificar la constitución de tu muestra (suspensión, polvo, etc.)</li>
                                                        </ul>"></i>
                                                    </div>

                                                </div>
                                            </div>
                                            <select for="options1" class="form-select" disabled v-model="sample.selected">
                                                <option :value="false">No</option>
                                                <option :value="true">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="sampleText" v-if="sample.selected">
                                        <div class="text-start">
                                            <div class="form-group mt-2 mb-3">
                                                <label for="sampleText">Especifique el activo a analizarse.</label>
                                                <textarea rows="4" type="text" id="sampleText" :class="((emptyInputs2 && sample.sampleText == '') 
                                                && 'is-invalid')" name="sampleText" class="form-control" v-model="sample.sampleText" required="required" autocomplete="off">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mt-2 mb-3">
                                            <label for="options" class="form-label">¿Desea registrar un acompañante?</label>
                                            <select for="options" disabled class="form-select" v-model="friends.selected">
                                                <option :value="false">No</option>
                                                <option :value="true">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="camposAdicionales" v-if="friends.selected">
                                        <div class="text-start">
                                            <div class="form-group mt-2 mb-3">
                                                <h6>Acompañante.</h6>
                                                <label for="friendName">Nombre:</label>
                                                <input type="text" :class="((emptyInputs3 && friends.friendName == '') 
                                                    && 'is-invalid')" id="friendName" name="friendName" class="form-control" v-model="friends.friendName" required="required">
                                            </div>
                                        </div>
                                        <div class="text-start">
                                            <div class="form-group mt-2 mb-3">
                                                <label for="friendEmail">Correo Electrónico:</label>
                                                <input type="text" id="friendEmail" name="friendEmail" class="form-control" :class="(invalidEmail2 && 'is-invalid') || 
                                                    ((emptyInputs3 && friends.friendEmail == '') && 'is-invalid')" v-model="friends.friendEmail" required="required">
                                                <p><small style="color: #eb4d4b">{{invalidEmail2}}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="button" disabled class="btn btn-secondary w-100 btn_enviar" @click.prevent="sendForm()">
                                            Enviar Información </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>