<?php require dirname(dirname(__DIR__)) . '/website-assets/components/head.php'; ?>

<body id="body">

<?php require dirname(dirname(__DIR__)) . '/website-assets/components/loader.php'; ?>

    <div id="content-body" class="body" style="display: none;">
    <?php require dirname(dirname(__DIR__)) . '/website-assets/components/menu.php'; ?>
        <header class="header">
            <div class="header-video">
                <div class="mt-4">
                    <div class="splide cbanner" id="cbanner">
                        <div class="splide__slider">
                            <div class="splide__track">
                                <ul class="splide__list ">
                                    <li class="splide__slide">
                                        <img src="img/banner/banner01.jpg">
                                        <div class="square-txt">
                                            <h1>Condiciones óptimas para crecimiento de cultivos celulares.</h1>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img src="img/banner/bannerFarma01.jpg">
                                        <div class="square-txt">
                                            <h1>PCondiciones de crecimiento óptimas para terapia con células madre.</h1>
                                        </div>
                                    </li>
                                    <li class="splide__slide" data-splide-html-video="img/banner/incubadorasSlider1.mp4">
                                        <div class="square-txt">
                                            <h1>Incubadoras estándar, de CO2 y refrigeradas.</h1>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img src="img/banner/bannerAlimentos01.jpg">
                                        <div class="square-txt">
                                            <h1>Protección y cultivo de microorganismos para procesos de fermentación.</h1>
                                        </div>
                                    </li>
                                    <li class="splide__slide" data-splide-html-video="img/banner/incubadorasSlider3.mp4">
                                        <div class="square-txt">
                                            <h1>Condiciones de temperatura constantes y homogéneas gracias a la tecnología APT.Line.</h1>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-content animate__animated animate__fadeInDown">
                <div class="header-options">
                    <div class="btn-action">
                        <span class="btn-action-icon"><i class="fa-solid fa-temperature-half"></i></span>
                        <div class="btn-action-content">
                            <span class="btn-action-subtitle">Incubadoras</span>
                            <span class="btn-action-title">Estandar</span>
                        </div>
                    </div>
                    <div class="btn-action">
                        <span class="btn-action-icon"><i class="fas fa-snowflake"></i></span>
                        <div class="btn-action-content">
                            <span class="btn-action-subtitle">Incubadoras</span>
                            <span class="btn-action-title">Refrigeradas</span>
                        </div>
                    </div>
                    <div class="btn-action">
                        <span class="btn-action-icon"><i class="fad fa-viruses"></i></span>
                        <div class="btn-action-content">
                            <span class="btn-action-subtitle">Incubadoras</span>
                            <span class="btn-action-title">CO2</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>