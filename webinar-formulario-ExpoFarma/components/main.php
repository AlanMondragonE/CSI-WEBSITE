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
            height: 120px;
        }

        .title {
            position: relative;
            width: 100%;
            font-size: 25px;
            top: 5%;
            left: 0%;
            color: white;
        }

        .subTitle {
            position: relative;
            width: 100%;
            font-size: 25px;
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
            border-bottom: 1px solid white;
            /* Agregamos un borde inferior blanco */
        }

        .email-link:hover {
            color: black;
            border-bottom-color: black;
            /* Cambiamos el color del borde inferior en hover */
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
                        <p class="subTitle mt-4 p-3">¿Cómo elegir el mejor lector de microplacas para sus ensayos?</p>
                        <!--<div class="linea"></div>
                        <p class="subTitle2">La técnica de difracción láser para optimizar los flujos de trabajo en la industria farmacéutica.</p>-->
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="container-fluid mt-3 d-none d-lg-block p">
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
        </div>-->
        <div class="container-fluid mt-3 d-block d-lg-none mb-4">
            <div class="background-header-mobile">
                <div class="bg-dark w-100 text-white p-2">
                    <h5>Webinar</h5>
                    <p class="m-0">¿Cómo elegir el mejor lector de microplacas para sus ensayos?</p>
                    <!--<div class="w-100 border-bottom border-1 border-white my-2"></div>
                    <p class="mb-0">La técnica de difracción láser para optimizar los flujos de trabajo en la industria farmacéutica.</p>-->
                </div>
            </div>
        </div>
        <!--<div class="container-fluid mt-5 d-block d-lg-none" style="margin-top: 70px !important;">
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
        </div>-->
        <div class="container-fluid mt-3 mb-3 mt-2">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="container-fluid d-block d-lg-none mb-3">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        ABSTRACT
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Elegir un lector de microplacas adecuado para tus aplicaciones no debe
                                        ser un tormento. En este webinar, te daremos las claves y factores que
                                        debes considerar al momento de seleccionar una tecnología y componentes.
                                        <br>
                                        <br>
                                        Son equipos altamente configurables que pueden contar con sistema de
                                        detección para absorbancia, fluorescencia, luminiscencia o una combinación de estás.
                                        <br>
                                        <br>
                                        Abordaremos la importancia de los diferentes componentes de los lectores
                                        de microplacas como:
                                        <br>
                                        <br>
                                        <ul>
                                            <li>Fuente de luz:
                                            <ul>
                                                    <li>Flash.</li>
                                                    <li>Láser</li>
                                                    <li>Led</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Selector de longitud de onda:
                                                <ul>
                                                    <li>Filtro.</li>
                                                    <li>Monocromador.</li>
                                                </ul>
                                            </li>
                                            <li>Detector</li>
                                        </ul>
                                        <br>
                                        Todo esto con el fin de darte un panorama general de la robustez
                                        de los equipos Molecular Devices y de cómo te pueden ofrecer
                                        soluciones innovadoras que optimicen tus flujos de trabajo.
                                    </div>
                                </div>
                            </div>
                            <!--<div class="accordion-item">
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
                            </div>-->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        TEMARIO:
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">1. Componentes de un Lector de Microplacas.</li>
                                            <li class="list-group-item">2. Tipos de Lectores de Microplacas.</li>
                                            <li class="list-group-item">3. Fuentes de Luz.</li>
                                            <li class="list-group-item">4. Selección de longitud de onda.</li>
                                            <li class="list-group-item">5. Detector.</li>
                                            <li class="list-group-item">6. Consideraciones.</li>
                                            <li class="list-group-item">7. Resumen.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid d-none d-lg-block mb-3 mt-5">
                        <div class="container-fluid">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h5 class="fw-bol">
                                        Abstract
                                    </h5>
                                    <div class="text">
                                        Elegir un lector de microplacas adecuado para tus aplicaciones no
                                        debe ser un tormento. En este webinar, te daremos las claves y
                                        factores que debes considerar al momento de seleccionar una tecnología
                                        y componentes.
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="text">
                                            <br>
                                            Son equipos altamente configurables que pueden contar con sistema de detección
                                            para absorbancia, fluorescencia, luminiscencia o una combinación de estás.
                                            Abordaremos la importancia de los diferentes componentes de los lectores de microplacas como:
                                            <br>
                                            <br>
                                            <li>Fuente de luz: flash, láser o led</li>
                                            <li>Selector de longitud de onda: filtro o monocromador</li>
                                            <li>Detector</li>
                                            <br>
                                            Todo esto con el fin de darte un panorama general de la robustez de los equipos
                                            Molecular Devices y de cómo te pueden ofrecer soluciones innovadoras que optimicen
                                            tus flujos de trabajo.
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
                                        Conoce los temas clave que abordaremos en nuestro webinar.
                                    </div>
                                    <div class="collapse" id="collapseTemario">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">1. Componentes de un Lector de Microplacas.</li>
                                            <li class="list-group-item">2. Tipos de Lectores de Microplacas.</li>
                                            <li class="list-group-item">3. Fuentes de Luz.</li>
                                            <li class="list-group-item">4. Selección de longitud de onda.</li>
                                            <li class="list-group-item">5. Detector.</li>
                                            <li class="list-group-item">6. Consideraciones.</li>
                                            <li class="list-group-item">7. Resumen.</li>
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
                        <!--<div class="row">
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
                        </div>-->
                    </div>
                </div>
                <div class="col">
                    <div class="container-fluid">
                        <div class="card shadow text-center">
                            <div class="card-header" style="background-color: #1B3C8B">
                                <div class="col-12">
                                    <h5 style="color: white; font-size: 25px;">Formulario Webinar</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="controladores/registro" method="post" class="p-3">
                                    <div class="text-start mb-4">
                                        <div class="form-group mt-2">
                                            <label for="name">Nombre:</label>
                                            <input type="text" class="form-control" :class="((emptyInputs && name == '') && 'is-invalid')" id="name" placeholder="Ingresa tu nombre" required="required" v-model="name" autocomplete="off">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mb-4">
                                            <label for="email">Correo Electrónico:</label>
                                            <input type="email" class="form-control" :class="(invalidEmail && 'is-invalid') || ((emptyInputs && email == '')
                                            && 'is-invalid')" id="email" placeholder="Ingresa tu correo electrónico" required="required" v-model="email" autocomplete="off">
                                            <p><small style="color: #eb4d4b">{{invalidEmail}}</small></p>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mb-4">
                                            <label for="tel">Número Telefónico:</label>
                                            <input type="tel" class="form-control" :class="(invalidTel && 'is-invalid') || 
                                            ((emptyInputs && tel == '') && 'is-invalid')" id="tel" placeholder="Ingresa tu número telefónico" required="required" v-model="tel" autocomplete="off">
                                            <p><small style="color: #eb4d4b">{{invalidTel}}</small></p>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mb-4">
                                            <label for="company">Nombre de tu empresa:</label>
                                            <input class="form-control" :class="((emptyInputs && company == '') && 'is-invalid')" placeholder="Nombre de la empresa" required="required" v-model="company" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <div class="form-group mb-4">
                                            <label for="job">Puesto de trabajo:</label>
                                            <input class="form-control" :class="((emptyInputs && job == '') && 'is-invalid')" placeholder="Puesto de trabajo" required="required" v-model="job" autocomplete="off"></imput>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="button" class="btn btn-success btn_enviar w-50 mx-auto" @click.prevent="sendForm()">
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