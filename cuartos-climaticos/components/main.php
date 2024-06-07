<!-- En el main data title es el nomnbre de la pagina en la ventana del browswer -->
<main data-title="Cuartos Climáticos">

   <section class="section mb-3 bg-secondary-2">

      <!-- Video Modal -->
      <div class="modal inolab-modal" id="modal-cuartosClim" aria-hidden="true">
         <div class="modal__overlay" tabindex="-1" data-custom-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title"
            style=" background-color: #fff; padding: 30px; max-width: 500px; width: 67vw; max-height: 80vh; border-radius: 4px; overflow-y: auto; box-sizing: border-box;">
               <header class="modal__header">
                  <h2 class="modal__title" id="modal-1-title">
                     Cuartos Climaticos
                  </h2>
                  <button class="modal__close" aria-label="Close modal" data-custom-close><i class="fas fa-times-circle"></i></button>
               </header>
               <main class="modal__content">
                  <div class="main-player p-auto" data-plyr-provider="youtube" data-plyr-embed-id="RJIOI-FeTeU"></div>
               </main>
               <footer class="modal__footer">
               </footer>
            </div>
         </div>
      </div>
      <!-- Video Modal -->


      <div class="p-auto flex-column center">
         <div class="w-75 mx-auto main-text mb-4">
            <h1 class="subtitle-1 text-center mb-3">Cuartos Climáticos</h1>
            <h2 class="subtitle-2 text-center">Diseño y fabricación de cuartos con control de temperatura y humedad para operar con los requisitos específicos y los tamaños exactos requeridos.
            </h2>
         </div>
         <div class="e-grid-16 mobile-1 tablet-1 mb-4">
            <div class="col-6 center flex-column">
               <ul class="list-group-primary">
                  <li class="text">Tres tamaños y volúmenes estándar: </li>
                  <div class="d-flex justify-content-center">
                     <ol class="numbered-list w-75">
                        <li>Dimensiones: 2.44 m (8 ft) x 2.44 m (8 ft) x 2.44 m (8 ft);
                           Volumen: 5,380 m3 (190 ft3)
                        </li>
                        <li>Dimensiones: 2.44 m (8 ft) x 3.66 m (12 ft) x 2.44 m (8 ft);
                           Volumen: 7,645 m3 (270 ft3)
                        </li>
                        <li>Dimensiones: 2.44 m (8 ft) x 4.88 m (16 ft) x 2.44 m (8 ft);
                           Volumen: 9,627 m3 (340 ft3)
                        </li>
                     </ol>
                  </div>
                  <li class="text">Posibilidad para generar cuartos de tamaños personalizados</li>
                  <li class="text">Rango de temperatura desde 0°C hasta 60°C y rango de humedad relativa desde 20% hasta 90%
                  </li>
               </ul>

               <div class="w-100 d-flex justify-content-around">
                  <button class="btn-primary btn-sm more-card show-only-desktop"><i class="fas fa-plus-circle"></i> Ver más información</button>
                  <button class="btn-primary btn-sm" data-custom-open="modal-cuartosClim"><i class="fas fa-play-circle"></i> Ver Video</button>
               </div>
            </div>
            <div class="col-10">
               <div class="img-poster" id="poster-1">
                  <img class="img-responsive w-100 br-2 bs-1" src="img/posters/poster-1.jpg" width="640" height="360">
               </div>
            </div>
         </div>

         <div class="accordion-box mt-4 show-only-mobile">
            <div class="accordion-content">
               <div class="accordion-header">
                  <h3><i class="fas fa-plus-circle"></i> Ver más información</h3>
                  <i class="fas fa-chevron-right"></i>
               </div>
               <div class="accordion-body animate__animated animate__fadeIn">

                  <!-- <h4 class="subtitle-2 text-dark text-center" style="margin-top:10px" >Garantía de almacenamiento entre -10°C a -25°C de productos alimentarios, farmacéuticos, cerámicos y más.</h4> -->
                  <!-- <h4 class="subtitle-2 text-light text-center">Garantía de almacenamiento entre -10°C a -25°C de productos alimentarios, farmacéuticos, cerámicos y más.</h4> -->
                  <!-- <h2 class="subtitle-2 text-center text-dark" style="margin-bottom:10px" >Perfecto para almacenar productos de una amplia gama de industrias en un rango de -10°C a -25°C.</h2> -->

                  <ul class="list-group-primary">
                     <li>Tecnología PIDS para detección de partículas con tamaños de hasta 0.01 µm.</li>
                     <li>Cubre un rango de medición desde 0.01 µm hasta 3500 µm.</li>
                     <li>Configurable a dos módulos de análisis: para muestras húmedas el módulo UML y para muestras secas el módulo DPS.</li>
                     <li>Introducción de muestra por flujo negativo para variaciones menores al 2.5%</li>
                     <li>Superposición de datos históricos para comparaciones rápidas.</li>
                     <li>El manejo del equipo y la interpretación de los datos es sencilla e intuitiva.</li>
                     <li>Luz radiada de forma horizontal y vertical para cada longitud de onda proporcionan datos de alta resolución de distribución de tamaños de partículas.</li>
                     <li>Cumplimiento con CFR 21 parte 11.</li>
                     <li>Sistema de seguridad personalizable para satisfacer diversas necesidades.</li>
                     <li>Sistema de automatizado de aceptación/fallo de acuerdo a tus parámetros.</li>
                  </ul>

                  <div class="splide main-splide">
                     <div class="splide__track">
                        <div class="splide__list">

                           <button class="tile splide__slide">
                              <img loading="lazy" src="img/carousel/img1.jpg" class="product-image" style="object-fit: scale-down">
                              <div class="related-card_titulo">
                                 <h2>Cuarto climático</h2>
                              </div>
                              <div class="related-card_texto">
                                 <p class="text">Con dimensiones estándar</p>
                                 <!-- <p class="text">2 charlas ajustables</p> -->
                              </div>
                           </button>
                           <button class="tile splide__slide">
                              <img loading="lazy" src="img/carousel/img2.jpg" class="product-image" style="object-fit: scale-down">
                              <div class="related-card_titulo">
                                 <h2>Cuarto climático</h2>
                              </div>
                              <div class="related-card_texto">
                                 <p class="text">Con dimensiones personalizadas</p>
                                 <!-- <p class="text">3 charolas ajustables</p> -->
                              </div>
                           </button>
                           <button class="tile splide__slide">
                              <img loading="lazy" src="img/carousel/img3.jpg" class="product-image" style="object-fit: scale-down">
                              <div class="related-card_titulo">
                                 <h2>Acondicionador</h2>
                              </div>
                              <div class="related-card_texto">
                                 <p class="text">Diseño Vertical</p>
                              </div>
                           </button>
                           <button class="tile splide__slide">
                              <img loading="lazy" src="img/carousel/img4.jpg" class="product-image" style="object-fit: scale-down">
                              <div class="related-card_titulo">
                                 <h2>Acondicionador</h2>
                              </div>
                              <div class="related-card_texto">
                                 <p class="text">Diseño Horizontal</p>
                                 <!-- <p class="text">Refrigerador tipo cofre</p> -->
                              </div>
                           </button>
                           <button class="tile splide__slide">
                              <img loading="lazy" src="img/carousel/img5.jpg" class="product-image" style="object-fit: scale-down">
                              <div class="related-card_titulo">
                                 <h2>Software</h2>
                              </div>
                              <div class="related-card_texto">
                                 <p class="text">Tecnología de monitoreo inteligente</p>
                                 <!-- <p class="text">5 charolas ajustables</p> -->
                              </div>
                           </button>
                           <button class="tile splide__slide">
                              <img loading="lazy" src="img/carousel/img6.jpg" class="product-image" style="object-fit: scale-down">
                              <div class="related-card_titulo">
                                 <h2>Software</h2>
                              </div>
                              <div class="related-card_texto">
                                 <p class="text">Monitoreo de condiciones en tiempo real</p>
                                 <!-- <p class="text">3 charolas ajustables</p> -->
                              </div>
                           </button>
                        </div>
                     </div>
                  </div>

               </div>

            </div>
         </div>


      </div>
   </section>

   <section class="section-background-detail mt-3 mb-3 tablet-mobile hidden-mobile animate__animated animate__fadeInDown d-none" style="background-image: url('img/backgrounds/fondo3.jpg')">

      <!-- ************************************** PRODUCTOS ************************************** -->

      <!-- Contenido Background  (Productos Principales)-->
      <div class="e-grid-12 d-flex justify-content-center mobile-1 p-relative">

         <!-- Boton para cerrar la sección -->
         <button type="button" title="close" class="btn-close p-absolute top-0 right-0"><i class="fas fa-times"></i></button>

         <!-- Titulo de la sección -->
         <div class="col-10 center flex-column mt-3 mb-3">
            <div class="popover animate__animated animate__fadeInDown d-none show-only-desktop mb-4">
               Cuartos Climáticos
               <div class="popover-arrow"></div>
            </div>
            <h4 class="subtitle-2 text-light text-center">Las pruebas de almacenamiento de estabilidad cumplen con las estrictas normativas de ICH para aprobación de medicamentos en farmacéutica.
            </h4>
         </div>


         <!-- Cards de productos (Máximo 4 Tarjetas)-->
         <div class="col-3 item animate__animated animate__fadeInUp">
            <div class="card-image">
               <div class="card-img-header">
                  <img loading="lazy" src="https://inolab.com/esterilizadores/img/esterilizador_hospital_01b.jpg">
               </div>
               <div class="card-image-content">
                  <h1 class="subtitle-1 text-light text-center mt-2 mb-2">Cuartos Climáticos</h1>
                  <p class="text-light">Las pruebas de almacenamiento de estabilidad cumplen con las estrictas normativas de ICH para aprobación de medicamentos en farmacéutica.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Contenido Background  (Productos Principales)-->

      <!-- ************************************** PRODUCTOS ************************************** -->

      <!-- ************************************** DETALLES DE PRODUCTO ************************************** -->

      <!-- Detalle Contenido Background  NOTA: El numero de contenedores debe ser igual al número de tarjetas en el contenedor anterior. -->
      <div class="container bg-light br-1 p-relative d-none container-details animate__animated animate__zoomIn">

         <!-- Boton para cerrar el detalle -->
         <button type="button" title="close" class="btn-close-dark p-absolute d-none"><i class="fas fa-times"></i></button>

         <div class="e-grid-12 p-auto p-relative">

            <!-- Cards de detalle de productos (Máximo 4 Tarjetas)-->
            <div class="col-6 mobile-1">
               <ul class="list-group">
                  <li>No necesita de agua destilada o desionizada para sus procesos de acondicionamiento
                  </li>
                  <li>Capacidad de cumplir con las normas de ICH, ASTM, TAPPI y FDA para cualquier sala o condición de almacenamiento.
                  </li>
                  <li>El sistema eléctrico y mecánico se encuentran ubicados fuera del cuarto para facilitar los procedimientos de servicio y mantenimiento.
                  </li>
                  <li>El Smart Pad ofrece lecturas directas de temperatura y de humedad.
                  </li>
                  <li>Acondicionador de cámara puede ser configurado horizontal o verticalmente.
                  </li>
                  <li>Variedad de opciones de construcción como estructura de acero inoxidable, secadores, filtros para aire y agua.
                  </li>
                  <li>La ubicación de la puerta en el cuarto climático es flexible.
                  </li>
                  <li>Las estanterías minimizan la acumulación de polvo y no afectan la circulación del aire.
                  </li>

               </ul>



            </div>


            <div class="col-6 mobile-1 d-flex flex-column justify-content-center align-items-center">
               <div class="splide main-splide">
                  <div class="splide__track">
                     <div class="splide__list">

                        <button class="tile splide__slide">
                           <img loading="lazy" src="img/carousel/img1.jpg" class="product-image" style="object-fit: scale-down">
                           <div class="related-card_titulo">
                              <h2>Cuarto climático</h2>
                           </div>
                           <div class="related-card_texto">
                              <p class="text">Con dimensiones estándar</p>
                              <!-- <p class="text">2 charlas ajustables</p> -->
                           </div>
                        </button>
                        <button class="tile splide__slide">
                           <img loading="lazy" src="img/carousel/img2.jpg" class="product-image" style="object-fit: scale-down">
                           <div class="related-card_titulo">
                              <h2>Cuarto climático</h2>
                           </div>
                           <div class="related-card_texto">
                              <p class="text">Con dimensiones personalizadas</p>
                              <!-- <p class="text">3 charolas ajustables</p> -->
                           </div>
                        </button>
                        <button class="tile splide__slide">
                           <img loading="lazy" src="img/carousel/img3.jpg" class="product-image" style="object-fit: scale-down">
                           <div class="related-card_titulo">
                              <h2>Acondicionador</h2>
                           </div>
                           <div class="related-card_texto">
                              <p class="text">Diseño Vertical</p>
                           </div>
                        </button>
                        <button class="tile splide__slide">
                           <img loading="lazy" src="img/carousel/img4.jpg" class="product-image" style="object-fit: scale-down">
                           <div class="related-card_titulo">
                              <h2>Acondicionador</h2>
                           </div>
                           <div class="related-card_texto">
                              <p class="text">Diseño Horizontal</p>
                              <!-- <p class="text">Refrigerador tipo cofre</p> -->
                           </div>
                        </button>
                        <button class="tile splide__slide">
                           <img loading="lazy" src="img/carousel/img5.jpg" class="product-image" style="object-fit: scale-down">
                           <div class="related-card_titulo">
                              <h2>Software</h2>
                           </div>
                           <div class="related-card_texto">
                              <p class="text">Tecnología de monitoreo inteligente</p>
                              <!-- <p class="text">5 charolas ajustables</p> -->
                           </div>
                        </button>
                        <button class="tile splide__slide">
                           <img loading="lazy" src="img/carousel/img6.jpg" class="product-image" style="object-fit: scale-down">
                           <div class="related-card_titulo">
                              <h2>Software</h2>
                           </div>
                           <div class="related-card_texto">
                              <p class="text">Monitoreo de condiciones en tiempo real</p>
                              <!-- <p class="text">3 charolas ajustables</p> -->
                           </div>
                        </button>
                     </div>
                  </div>
               </div>
               <!-- <div class="player p-auto" data-plyr-provider="youtube" data-plyr-embed-id="OZ0RjbNqDls"></div> -->

               <div class="h-25 mt-3">
                  <!-- <a target="_blank" href="docs/secado/FP.pdf"><button class="btn-primary-flat btn-xs"><i class="fas fa-plus-circle"></i> Especificaciones</button></a> -->
                  <button class="btn-primary-flat btn-xs btn-more-info"><i class="fas fa-plus-circle"></i> Solicita más información</button>
               </div>
            </div>
            <!--             <div class="col-auto p-absolute top-0 right-0" style="padding: 0 2px; height: 98.5%; width: 200px;">
         <div class="accordion"></div>
      </div>  -->

         </div>
      </div>


      <!-- ************************************** DETALLES DE PRODUCTO ************************************** -->
   </section>

</main>