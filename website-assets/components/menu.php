<nav>

    <!--<section>
        <div class="marquee">
            <p>
                <span>
                    Conoce nuestra nueva plataforma
                    <span style="font-weight: 800">
                        Inolab e-Commerce </span>. En la cual encontraras equipos de calentamiento,
                    almacenamiento en frio y áreas limpias
                </span>

                <span style="padding-left: 40px"> | </span>

                <span style="padding-left: 40px">
                    Explora una nueva experiencia de compra en línea.
                    Haz clic aquí e ingresa a INOLAB E-COMMERCE
                </span>

                <span style="padding-left: 40px"> | </span>


                <span style="padding-left: 40px">
                    Selecciona, Cotiza y Compra: Equipos y Consumibles.
                    Más rápido, Más fácil, Más Versátil. Visita INOLAB
                    E-COMMERCE
                </span>
            </p>
        </div>
    </section>-->

    <section class="submenu" id="inicio">
        <ul class="submenu_items">
            <li><a href="https://inolab.com/nosotros.html">NOSOTROS</a></li>
            <li><a href="https://inolab.com/contact-page/">Contacto</a></li>
        </ul>
    </section>

    <div class="nav_area" id="menu_principal">
        <div class="main_nav_area animated">
            <div class="container-header">
                <div id="navigation1" class="navigation">

                    <div class="nav-header">
                        <a class="nav-brand" href="https://inolab.com/"><img src="img/logos/logo-blanco.png" alt="Inolab Logo" width="140" height="auto"></a>
                        <div class="nav-toggle"></div>
                    </div>


                    <div class="nav-search">
                        <div class="nav-search-button">
                            <i class="nav-search-icon"></i>
                        </div>
                        <div class="search-bar">
                            <div class="nav-search-inner" id="search-bar">
                                <input class="input-search" type="text" v-model="searchWord" name="search" placeholder="¿Que quieres buscar hoy?">
                                <ul class="autocomplete-result-list">

                                    <a v-for="({item}, index) in initSearch" :href="item.link" style="text-decoration: none;">
                                        <li :id="index" class="autocomplete-result" :data-result-index="index">
                                            <div class="search-title">{{item.title}}</div>
                                            <div class="search-data" v-html="item.highlight"></div>
                                        </li>
                                    </a>

                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="nav-menus-wrapper" id="menu-offcanvas">
                        <ul class="nav-menu align-to-right">
                            <li>
                                <a class="menu-categoria" href="#">Ciencias de la Separación</a>
                                <div class="megamenu-panel">
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/espectrometria-masas/">Espectrometría de
                                                    Masas</a></li>
                                            <li><a href="https://inolab.com/espectrometria-masas/">QTOF Systems</a></li>
                                            <li><a href="https://inolab.com/espectrometria-masas/">QTRAP Systems</a></li>
                                            <li><a href="https://inolab.com/espectrometria-masas/">Triple TOF Systems</a></li>
                                            <li><a href="https://inolab.com/espectrometria-masas/">Triple Quad Systems</a></li>
                                            <li><a href="https://inolab.com/espectrometria-masas/">ZenoTOF</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/electroforesis/">Electroforesis
                                                    Capilar</a></li>
                                            <li><a href="https://inolab.com/electroforesis/">PA 800 Plus</a></li>
                                            <li><a href="https://inolab.com/electroforesis/">CESI 8000 Plus</a></li>
                                            <li><a href="https://inolab.com/electroforesis/">GENOMELAB GEXP</a></li>
                                            <li><a href="https://inolab.com/electroforesis/">BioPhase 8800</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/analisis-particulas/">Análisis de
                                                    Partículas</a></li>
                                            <li><a href="https://inolab.com/analisis-particulas/">Tamaño y Distribución de Partículas</a></li>
                                            <li><a href="https://inolab.com/analisis-particulas/">Conteo y Tamaño de Partículas</a></li>
                                            <li><a href="https://inolab.com/viabilidad-celular/">Viabilidad Celular</a></li>
                                            <!--                                             <li><a href="#">Cromatografía</a></li> -->
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/centrifugacion/">Centrifugación</a></li>
                                            <li><a href="https://inolab.com/centrifugacion/">Ultracentrífugas</a></li>
                                            <li><a href="https://inolab.com/centrifugacion/">Centrífugas de mesa</a></li>
                                            <li><a href="https://inolab.com/centrifugacion/">Alto rendimiento</a></li>
                                            <li><a href="https://inolab.com/centrifugacion/">Microcentrífugas</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a class="menu-categoria" href="#">Biotecnología</a>
                                <div class="megamenu-panel">
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/upstream.html">Bioprocesos Upstream</a>
                                            </li>
                                            <li><a href="https://inolab.com/viabilidad-celular/">Viabilidad Celular</a></li>
                                            <li><a href="https://inolab.com/incubadoras/">Incubadoras</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/centrifugacion/">Bioprocesos
                                                    Downstream</a></li>
                                            <li><a href="https://inolab.com/centrifugacion/">Centrifugación</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/citometria/">Citometría</a></li>
                                            <li><a href="https://inolab.com/citometria/">Cytoflex</a></li>
                                            <li><a href="https://inolab.com/citometria/">Aquios CL</a></li>
                                            <li><a href="https://inolab.com/citometria/">Navios EX</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/lectores-de-microplacas/">Inmunoensayos</a></li>
                                            <li><a href="https://inolab.com/lectores-de-microplacas/">Lectores de Microplacas</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/imagenolog%C3%ADa-in-vitro.html">Imagenología In
                                                    Vitro</a></li>
                                            <li><a href="https://inolab.com/imagenolog%C3%ADa-in-vitro.html">Sistema confocal</a></li>
                                            <li><a href="https://inolab.com/imagenolog%C3%ADa-in-vitro.html">ImageXpress Micro</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/microscopios/">Microscopios</a>
                                            </li>
                                            <li><a href="https://inolab.com/microscopios/">Microscopía de Luz</a></li>
                                            <li><a href="https://inolab.com/microscopios/">Microscopía Electrónica</a></li>
                                            <li><a href="https://inolab.com/microscopios/">Microscopía de Rayos X</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a class="menu-categoria" href="#">Biología Molecular</a>
                                <div class="megamenu-panel">
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/secuenciacion-y-expresion-genetica.html">Secuenciación y
                                                    expresión génica</a></li>
                                            <li><a href="https://inolab.com/secuenciacion-y-expresion-genetica.html">GENOMELAB GEXP</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/Immunospot.html">Analizadores
                                                    Celulares</a></li>
                                            <li><a href="https://inolab.com/Immunospot.html">Immunospot ULTIMATE Analyzer</a></li>
                                            <li><a href="https://inolab.com/Immunospot.html">Immunospot UNIVERSAL Analyzer</a></li>
                                            <li><a href="https://inolab.com/Immunospot.html">Immunospot FLUOROCORE Analyzer</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/microarreglos.html">Microarreglos</a></li>
                                            <li><a href="https://inolab.com/microarreglos.html">GenePix</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/lectores-de-microplacas/">Lector de
                                                    Microplacas</a></li>
                                            <li><a href="https://inolab.com/lectores-de-microplacas/">Multimodales</a></li>
                                            <li><a href="https://inolab.com/lectores-de-microplacas/">Luminiscencia</a></li>
                                            <li><a href="https://inolab.com/lectores-de-microplacas/">Fluorescencia</a></li>
                                            <li><a href="https://inolab.com/lectores-de-microplacas/">Absorbancia</a></li>
                                            <li><a href="https://inolab.com/lectores-de-microplacas/">Lavador de microplacas</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title">
                                                <a href="https://inolab.com/genomica/">Genómica</a>
                                            </li>
                                            <li><a href="https://inolab.com/genomica/">Procesador de micropartículas</a></li>
                                            <li><a href="https://inolab.com/genomica/">Kits de purificación</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/genomica/">Extracción y
                                                    Purificación DN/RNA</a></li>
                                            <li><a href="https://inolab.com/genomica/">Kits de Extracción de DNA</a></li>
                                            <li><a href="https://inolab.com/genomica/">Kits de Extracción de RNA</a></li>
                                        </ul>
                                        <!-- <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/diagnostico.html">Diagnóstico</a></li>
                                            <li><a href="https://inolab.com/diagnostico.html">Control de calidad en comida</a></li>
                                            <li><a href="https://inolab.com/diagnostico.html">Enfermedades de garrapata</a></li>
                                            <li><a href="https://inolab.com/diagnostico.html">Diagnóstico Ambiental</a></li>
                                            <li><a href="https://inolab.com/diagnostico.html">Diagnóstico Veterinario</a></li>
                                            <li><a href="https://inolab.com/diagnostico.html">Diagnóstico Humano</a></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </li>
                            <li><a class="menu-categoria" href="#">Temperatura</a>
                                <div class="megamenu-panel">
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/esterilizadores/">Esterilizadores</a></li>
                                            <li><a href="https://inolab.com/esterilizadores/">Sector Salud</a></li>
                                            <li><a href="https://inolab.com/esterilizadores/">Laboratorio</a></li>
                                            <li><a href="https://inolab.com/esterilizadores/">Producción</a></li>
                                            <li><a href="https://inolab.com/esterilizadores/">Consultorio</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title">
                                                <a href="https://inolab.com/lavadoras.html">Lavadora Termodesinfectante</a>
                                            </li>
                                            <li><a href="https://inolab.com/lavadoras.html">Sector Salud</a></li>
                                            <li><a href="https://inolab.com/lavadoras.html">Laboratorio</a></li>
                                            <li><a href="https://inolab.com/lavadoras.html">Producción</a></li>
                                            <li><a href="https://inolab.com/lavadoras.html">Consultorio</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/refrigeradores/">Refrigeradores</a></li>
                                            <li><a href="https://inolab.com/refrigeradores/">Farmaceútico</a></li>
                                            <li><a href="https://inolab.com/refrigeradores/">Banco de Sangre</a></li>
                                            <li><a href="https://inolab.com/refrigeradores/">Combinados</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/congeladores/">Congeladores</a></li>
                                            <li><a href="https://inolab.com/congeladores/">Biomédico</a></li>
                                            <li><a href="https://inolab.com/congeladores/">Baja temperatura</a></li>
                                            <li><a href="https://inolab.com/congeladores/">Profundo</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/cuartos-frios/">Cuarto fríos</a></li>
                                            <li><a href="https://inolab.com/cuartos-frios/">Cuarto fríos</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/ultracongeladores/">Ultracongeladores</a>
                                            </li>
                                            <li><a href="https://inolab.com/ultracongeladores/">Serie UVF -40 °C a -90 °C</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/camaras-climaticas/">Cámaras Climáticas</a>
                                            </li>
                                            <li><a href="https://inolab.com/camaras-climaticas/">Cámaras de clima constante</a></li>
                                            <li><a href="https://inolab.com/camaras-climaticas/">Cámaras de clima variable</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/cuartos-climaticos/">Cuartos clímaticos</a></li>
                                            <li><a href="https://inolab.com/cuartos-climaticos/">Cuatos clímaticos</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/incubadoras/">Incubadoras</a></li>
                                            <li><a href="https://inolab.com/incubadoras/">Incubadoras Estándar</a></li>
                                            <li><a href="https://inolab.com/incubadoras/">Incubadoras de CO2</a></li>
                                            <li><a href="https://inolab.com/incubadoras/">Incubadoras refrigeradas</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/camaras-crecimiento/">Cámaras de Crecimiento</a></li>
                                            <li><a href="https://inolab.com/camaras-crecimiento/">Cámaras de crecimiento con luz</a></li>
                                            <li><a href="https://inolab.com/camaras-crecimiento/">Cámaras de crecimiento con luz y humedad</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/hornos-estufas/">Estufas y Hornos</a>
                                            </li>
                                            <li><a href="https://inolab.com/hornos-estufas/">Cámaras de secado</a></li>
                                            <li><a href="https://inolab.com/hornos-estufas/">Estufas/Hornos de seguridad</a></li>
                                            <li><a href="https://inolab.com/hornos-estufas/">Estufas/Hornos de vacío</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a class="menu-categoria" href="#">Especialidades</a>
                                <div class="megamenu-panel">
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/bioseguridad.html">Bioseguridad</a></li>
                                            <li><a href="https://inolab.com/cabinasBioseguridad.html">Cabinas de bioseguridad</a></li>
                                            <!-- <li><a href="https://inolab.com/cabinasPcr.html">Cabinas PCR</a></li> -->
                                            <li><a href="https://inolab.com/campanasLaboratorio.html">Campanas extractoras</a></li>
                                            <li><a href="https://inolab.com/campanaFlujoLaminar.html">Campanas de flujo laminar</a></li>
                                            <li><a href="https://inolab.com/mobiliarioLaboratorio.html">Mobiliario para laboratorio</a></li>
                                        </ul>

                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/composicion-corporal.html">Composición Corporal</a></li>
                                            <li><a href="https://inolab.com/composicion-corporal.html">Analizador de animales pequeños y órganos</a></li>
                                            <li><a href="https://inolab.com/composicion-corporal.html">Analizador 3 en 1: animales pequeños, órganos y biopsias.</a></li>
                                            <li><a href="https://inolab.com/composicion-corporal.html">Analizador 4 en 1: Ratas, ratones, órganos y biopsias</a></li>
                                            <li><a href="https://inolab.com/composicion-corporal.html">Analizador para animales grandes y humanos </a></li>
                                        </ul>

                                        <!-- <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/tituladores.html">Tituladores</a></li>
                                            <li><a href="https://inolab.com/tituladores.html">Potenciométricos</a></li>
                                            <li><a href="https://inolab.com/tituladores.html">Karl Fischer Volumétricos</a></li>
                                            <li><a href="https://inolab.com/tituladores.html">Karl Fischer Coulométricos </a></li>
                                        </ul> -->

                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/electrofisiologia.html">Electrofisiología</a></li>
                                            <li><a href="https://inolab.com/electrofisiologia.html">Amplificadores</a></li>
                                            <li><a href="https://inolab.com/electrofisiologia.html">Digitalizadores</a></li>
                                            <li><a href="https://inolab.com/electrofisiologia.html">Software </a></li>
                                        </ul>

                                        <ul class="megamenu-list list-col-5">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/detergentes/">Detergentes</a></li>
                                            <li><a href="https://inolab.com/detergentes/">Detergentes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="menu-categoria" href="https://inolab.com/soporte-tecnico.html">Soporte Técnico</a>
                                <div class="megamenu-panel">
                                    <div class="megamenu-lists">
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Instalación</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Calificación IQ, OQ,
                                                    PQ</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Calibración</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Mantenimiento</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Calibraciones</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Capacitación de
                                                    Operación</a></li>
                                            <li><a href="#">Entrenamiento acerca del manejo y funcionamiento de
                                                    sus equipos</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Traslados e
                                                    instalaciones</a></li>
                                        </ul>
                                        <ul class="megamenu-list list-col-4">
                                            <li class="megamenu-list-title"><a href="https://inolab.com/soporte-tecnico.html">Análisis y desarrollo de
                                                    métodos</a>
                                            </li>
                                            <li><a href="https://inolab.com/soporte-tecnico.html">Desarrollo de metodologías para la preparación de
                                                    muestras y análisis
                                                    instrumental</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</nav>