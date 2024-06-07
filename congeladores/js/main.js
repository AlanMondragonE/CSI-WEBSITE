/**
 * @module Main
 * @description Script que se encarga inicializar todo el sitio web
 */

import core from "./core.js";
const clsCore = new core();

clsCore.initLoader();

document.addEventListener("DOMContentLoaded", (e) => {
  clsCore.initTitle();
  clsCore.initScroll();
  initCarrusels();
  initBannerCards();
  openDetailCard();
  headerButtons();
  actionButtonsDetail();
  initMainCarrusels();
  initProductGallery();
  initModals();
});

/* Global */
const $ = (element) => document.querySelector(`${element}`);
const $$ = (element) => document.querySelectorAll(`${element}`);


/* Inicia las cards del banner */
const initBannerCards = () => {
  $$(".section-background-detail").forEach((section) => {
    $$(".card-image").forEach((product, index) => {
      product.addEventListener("click", (e) => {
        $$(".container-details")[index]
          ? $$(".container-details")[index].classList.remove("d-none")
          : clsCore.showDOMmessage(
            "Importante: No se ha integrado el contenido de la tarjeta: " +
            (index + 1)
          );
        $$(".container-details")[index]
          ? hideProductCards(section)
          : clsCore.showDOMmessage(
            "Importante: No se ha integrado el contenido de la tarjeta: " +
            (index + 1)
          );
        $$(".container-details")[index]
          ? initCloseButtonBannerCards($$(".container-details")[index])
          : clsCore.showDOMmessage(
            "Importante: No se ha integrado el contenido de la tarjeta: " +
            (index + 1)
          );
        $$(".container-details")[index]
          ? initAccordions(section, index)
          : clsCore.showDOMmessage(
            "Importante: No se ha integrado el contenido de la tarjeta: " +
            (index + 1)
          );
      });
    });
  });
};

/* Oculta las tarjetas de los productos principales mostrados en el banner */
const hideProductCards = (section) => {
  $$(".item").forEach((item) => {
    item.classList.add("d-none");
  });
};

/* Inicia el boton de cerrar de cada detalle de producto */
const initCloseButtonBannerCards = (activeSection) => {
  activeSection.querySelectorAll("button")[0].addEventListener("click", (e) => {
    activeSection.classList.add("d-none");
    $$(".item").forEach((item) => {
      item.classList.remove("d-none");
    });
  });
};

/* Inicia los acordeones de cada uno de los detalles de producto */
const initAccordions = (section, activeSection) => {
  const fragment = document.createDocumentFragment();

  section.querySelectorAll(".accordion")[activeSection] != undefined &&
    (section.querySelectorAll(".accordion")[activeSection].innerHTML = "");

  if (section.querySelectorAll(".accordion")[activeSection] != undefined) {
    section.querySelectorAll(".accordion")[activeSection].appendChild(fragment);

    section
      .querySelectorAll(".accordion")
    [activeSection].querySelectorAll(".accordion-item")
      .forEach((item, index) => {
        item.addEventListener("click", (e) => {
          section
            .querySelectorAll(".container-details")
          [item.getAttribute("data-id")].classList.remove("d-none");
          section.querySelectorAll(".container-details")[activeSection] &&
            section
              .querySelectorAll(".container-details")
            [activeSection].classList.add("d-none");
          section.querySelectorAll(".container-details")[activeSection] &&
            initCloseButtonBannerCards(
              section.querySelectorAll(".container-details")[
              item.getAttribute("data-id")
              ]
            );
          section.querySelectorAll(".container-details")[activeSection] &&
            initAccordions(section, item.getAttribute("data-id"));
        });
      });
  }
};

/* Inicializa el detalle de cada una de la tarjetas */
const openDetailCard = () => {
  $$('.more-card').forEach((card, index) => {
    card.addEventListener('click', e => {

      $$('.section-background-detail').forEach((section, index) => {
        section.classList.add('d-none');
        $$('.popover')[index].classList.add('d-none');
      });

      if ($$('.section-background-detail')[index] != undefined) {


        $$('.section')[index].insertAdjacentElement('afterend', $$('.section-background-detail')[index]);
        $$('.section-background-detail')[index].classList.remove('d-none');
        $$('.popover')[index].classList.remove('d-none');

        setTimeout(() => {
          window.scrollTo({ top: $$('.section-background-detail ')[index].offsetTop - 60, behavior: 'smooth' });
        }, 200);

        initVideos();
        $$('.container-details')[index] ? $$('.container-details')[index].classList.remove('d-none') : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
        $$('.container-details')[index] ? hideProductCards($$('.section-background-detail ')[index]) : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
        $$('.container-details')[index] ? initCloseButtonBannerCards($$('.container-details')[index]) : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
        $$('.container-details')[index] ? initAccordions($$('.section-background-detail ')[index], index) : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))


      } else {
        clsCore.showDOMmessage('No se encuentra la sección correspondiente a la tarjeta número ' + (index + 1))
      }


    });
  });

  $$('.btn-close').forEach((close, index) => {
    close.addEventListener('click', e => {


      $$('.popover')[index].classList.add('d-none');
      close.parentNode.parentNode.classList.add('d-none');
      close.parentNode.parentNode.querySelectorAll('.container-details').forEach(container => container.classList.add('d-none'));
      close.parentNode.parentNode.querySelectorAll('.item').forEach(item => item.classList.remove('d-none'));

      setTimeout(() => {
        window.scrollTo({ top: document.querySelectorAll('.section')[index].offsetTop - 60, behavior: 'smooth' });

      }, 200)
    });
  });

  $$('.accordion-content').forEach(accordion => {
    accordion.addEventListener('click', e => {
      e.target.parentElement.classList.toggle('active');
      initVideos();
    });
  });
};
const headerButtons = () => {
  $(".header-options")
    .querySelectorAll(".btn-action")
    .forEach((btn, index) => {
      btn.addEventListener("click", (e) => {
        window.scrollTo({
          top: $$(".bg-secondary-2")[index].offsetTop - 90,
          behavior: "smooth",
        });

        initVideos();
      });
  });
};

const actionButtonsDetail = () => {
  $$(".btn-more-info").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      window.scrollTo({
        top: $("#Contacto").offsetTop - 75,
        behavior: "smooth",
      });
    });
  });
};

/* $$(".popup-action")[0].addEventListener("click", (e) => {
  $$(".popup")[0].classList.toggle("close-popup");
}); */
/* Inicia las Modales */

const initModals = () => {
  initMainVideos();

  MicroModal.init({
    onClose: (modal) => {
      modal.querySelectorAll(".plyr").forEach((ply) => {
        const video = new Plyr(ply);
        video.stop();
      });
    },
    openTrigger: "data-custom-open",
    closeTrigger: "data-custom-close",
    openClass: "is-open",
    disableScroll: true,
    disableFocus: false,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
    debugMode: false,
  });
};

/* Inicia todos los carruseles */
const initCarrusels = () => {
  const sliderConfig = {
    type: "fade",
    perPage: 1,
    pagination: false,
    autoplay: true,
    width: "100%",
    height: "50vh",
    speed: 1000,
    rewind: true,
    cover: true,
    video: {
      loop: true,
      autoplay: true,
      hideControls: true,
    },
    
      breakpoints: {
        1800: {
            height: "100vh"
        },
        1600: {
            height: "100vh"
        },
        1400: {
            height: "100vh"
        },
        
        1200: {
            height: "100vh"
        },
        
        992: {
            height: "50vh"
        },
        
        768: {
            height: "50vh"
        },
        
        576: {
          height: "50vw",
          width: "100vw", 
          arrows: true,
          pagination: false, 
        }
    }
  };
  
  clsCore.initCarousel("cbanner", 1, sliderConfig);

  const config = {
    type: "slide",
    perPage: 3,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: 1,
      },
      375: {
        perPage: 1,
      },
    },
    perMove: 1,
  };

  clsCore.initCarousel("related-splide", 1, config);

};

const initMainCarrusels = () => {
  const config = {
    type: "slide",
    perPage: 1,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: 1,
      },
      375: {
        perPage: 1,
      },
    },
    perMove: 1,
  };

  $$(".main-splide").forEach((splide, index) => {
    new Splide(splide, config).mount();
  });
};

/* Inicia todos los videos */
const initVideos = () => {
  /**
   * Arreglo con los posters de cada video.
   * @propeties
   * @num -> numero de video en la página (De arriba hacia abajo, sin contar el banner)
   * @src -> link de la imagen que será el poster del video.
   *
   */

  const videoPosters = [];

  const config = {
    title: "Secondary Video",
    autoplay: false,
    autopause: true,
    volume: 1,
    muted: false,
    clickToPlay: true,
    hideControls: true,
    resetOnEnd: false,
    keyboard: {
      focused: true,
      global: false,
    },
    tooltips: {
      controls: true,
      seek: true,
    },
    displayDuration: true,
    fullscreen: {
      enabled: true,
    },
    quality: {
      default: 576,
      options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240],
    },
    loop: {
      active: false,
    },
  };

  $$(".player").forEach((ply, index) => {
    const video = clsCore.initVideo("player", index + 1, config);
    video.muted = true;
  });
};

/* Inicia todos los videos principales, videos que se cargan al iniciar la página */
const initMainVideos = () => {
  /**
   * Arreglo con los posters de cada video.
   * @propeties
   * @num -> numero de video en la página (De arriba hacia abajo, sin contar el banner)
   * @src -> link de la imagen que será el poster del video.
   *
   */

  const videoPosters = [
    {
      id: 1,
      src: "img/posters/posterClimaConstante.jpg",
    },
    {
      id: 2,
      src: "img/posters/posterClimaVariable.jpg",
    },
  ];

  const config = {
    title: "Main Video",
    autoplay: false,
    autopause: true,
    volume: 1,
    muted: false,
    clickToPlay: true,
    hideControls: true,
    resetOnEnd: false,
    keyboard: {
      focused: true,
      global: false,
    },
    tooltips: {
      controls: true,
      seek: true,
    },
    displayDuration: true,
    fullscreen: {
      enabled: true,
    },
    quality: {
      default: 576,
      options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240],
    },
    loop: {
      active: false,
    },
  };

  $$(".main-player").forEach((ply, index) => {
    const video = new Plyr(ply, config);
    video.restart();
  });
};

const initProductGallery = () => {

  const biomedicoPoster = $("#poster-1");
  const bajaPoster = $("#poster-2");
  const ultraPoster = $("#poster-3");
  const crioPoster = $("#poster-4");

  const arrBiomedico = [
    {
      src: "img/gallery/biomedicos/90-1900x800.jpg",
      responsive: "img/gallery/biomedicos/90-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-YL90</h1>
                  <p>Almacenamiento 90 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/biomedicos/270-1900x800.jpg",
      responsive: "img/gallery/biomedicos/270-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-YL270</h1>
                  <p>Almacenamiento 270 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/biomedicos/450-1900x800.jpg",
      responsive: "img/gallery/biomedicos/450-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-YL450</h1>
                  <p>Almacenamiento 450 Litros.</p>
              </div>`,
    },
    // ! Falta imagen...
    // {
    //   src: "img/gallery/biomedicos/1008-1900x800.jpg",
    //   responsive: "img/gallery/biomedicos/1008-800x500.jpg 480",
    //   subHtml: `<div class="lightGallery-captions">
    //               <h1>DW-YL1008</h1>
    //               <p>Almacenamiento 1008 Litros.</p>
    //           </div>`,
    // },
    {
      src: "img/gallery/biomedicos/226-1900x800.jpg",
      responsive: "img/gallery/biomedicos/226-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-YW226A</h1>
                  <p>Almacenamiento 226 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/biomedicos/358-1900x800.jpg",
      responsive: "img/gallery/biomedicos/358-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-YW358A</h1>
                  <p>Almacenamiento 358 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/biomedicos/508-1900x800.jpg",
      responsive: "img/gallery/biomedicos/508-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-YW508A</h1>
                  <p>Almacenamiento 508 Litros.</p>
              </div>`,
    },
    
  ];

  const arrBaja = [
    {
      src: "img/gallery/baja/90-1900x800.jpg",
      responsive: "img/gallery/baja/90-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-FL90</h1>
                  <p>Almacenamiento 90 Litros.</p>
              </div>`,
    },
    
    // {
      //   src: "img/gallery/baja/439-1900x800.jpg",
      //   responsive: "img/gallery/baja/439-800x500.jpg 480",
      //   subHtml: `<div class="lightGallery-captions">
      //               <h1>DW-FL439</h1>
      //               <p>Almacenamiento 439 Litros.</p>
      //           </div>`,
      // },
    //   {
    //     src: "img/gallery/baja/270-1900x800.jpg",
    //     responsive: "img/gallery/baja/270-800x500.jpg 480",
    //   subHtml: `<div class="lightGallery-captions">
    //   <h1>DW-FL270</h1>
    //               <p>Almacenamiento 270 Litros.</p>
    //           </div>`,
    // },
    {
      src: "img/gallery/baja/450-1900x800.jpg",
      responsive: "img/gallery/baja/450-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FL450</h1>
      <p>Almacenamiento 450 Litros.</p>
      </div>`,
    },
    {
      src: "img/gallery/baja/528-1900x800.jpg",
      responsive: "img/gallery/baja/528-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FL528</h1>
      <p>Almacenamiento 528 Litros.</p>
      </div>`,
    },
    {
      src: "img/gallery/baja/678-1900x800.jpg",
      responsive: "img/gallery/baja/678-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-FL678</h1>
                  <p>Almacenamiento 678 Litros.</p>
                  </div>`,
    },
    {
      src: "img/gallery/baja/778-1900x800.jpg",
      responsive: "img/gallery/baja/778-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FL778</h1>
      <p>Almacenamiento 528 Litros.</p>
      </div>`,
    },
    {
      src: "img/gallery/baja/1008-1900x800.jpg",
      responsive: "img/gallery/baja/1008-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FL1008</h1>
      <p>Almacenamiento 1008 Litros.</p>
      </div>`,
    },
    {
      src: "img/gallery/baja/150-1900x800.jpg",
      responsive: "img/gallery/baja/150-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FW150</h1>
      <p>Almacenamiento 150 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/baja/270-1900x800.jpg",
      responsive: "img/gallery/baja/270-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-FW270</h1>
                  <p>Almacenamiento 270 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/baja/360-1900x800.jpg",
      responsive: "img/gallery/baja/360-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FW360</h1>
      <p>Almacenamiento 360 Litros.</p>
      </div>`,
    },
    {
      src: "img/gallery/baja/150-1900x800.jpg",
      responsive: "img/gallery/baja/150-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
      <h1>DW-FW150</h1>
      <p>Almacenamiento 150 Litros.</p>
      </div>`,
    },
  ];

  const arrUltra = [
    {
      src: "img/gallery/ultra/1.8-1900x800.jpg",
      responsive: "img/gallery/ultra/1.8-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL1.8</h1>
                  <p>Almacenamiento 1.8 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/50-1900x800.jpg",
      responsive: "img/gallery/ultra/50-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL50</h1>
                  <p>Almacenamiento 50 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/100-1900x800.jpg",
      responsive: "img/gallery/ultra/100-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL100</h1>
                  <p>Almacenamiento 100 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/218-1900x800.jpg",
      responsive: "img/gallery/ultra/218-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL218</h1>
                  <p>Almacenamiento 218 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/340-1900x800.jpg",
      responsive: "img/gallery/ultra/340-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL340</h1>
                  <p>Almacenamiento 340 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/398-1900x800.jpg",
      responsive: "img/gallery/ultra/398-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL398HC</h1>
                  <p>Almacenamiento 398 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/528-1900x800.jpg",
      responsive: "img/gallery/ultra/-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL528</h1>
                  <p>Almacenamiento  Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/678-1900x800.jpg",
      responsive: "img/gallery/ultra/678-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL678SA</h1>
                  <p>Almacenamiento 678 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/778-1900x800.jpg",
      responsive: "img/gallery/ultra/778-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL778HC</h1>
                  <p>Almacenamiento 778 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/858-1900x800.jpg",
      responsive: "img/gallery/ultra/858-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL858HC</h1>
                  <p>Almacenamiento 858 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/1008-1900x800.jpg",
      responsive: "img/gallery/ultra/1008-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HL1008HC</h1>
                  <p>Almacenamiento 1008 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/ultra/668-1900x800.jpg",
      responsive: "img/gallery/ultra/668-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>DW-HW668HC</h1>
                  <p>Almacenamiento 668 Litros.</p>
              </div>`,
    },
  ];

  const arrCrio = [
    {
      src: "img/gallery/criogenicos/128-1900x800.jpg",
      responsive: "img/gallery/criogenicos/128-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>128L</h1>
                  <p>Almacenamiento 128 Litros.</p>
              </div>`,
    },
    {
      src: "img/gallery/criogenicos/258-1900x800.jpg",
      responsive: "img/gallery/criogenicos/258-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>258L</h1>
                  <p>Almacenamiento 258 Litros.</p>
              </div>`,
    },
  ]

  const biomedicoGallery = window.lightGallery(biomedicoPoster, {
    mode: "lg-fade",
    dynamic: true,
    plugins: [lgAutoplay, lgZoom, lgFullscreen],
    dynamicEl: arrBiomedico,
    download: false,
    mobileSettings: {
      controls: true,
      showCloseIcon: true,
      download: false,
    },
  });

  const bajaGallery = window.lightGallery(bajaPoster, {
    mode: "lg-fade",
    dynamic: true,
    plugins: [lgAutoplay, lgZoom, lgFullscreen],
    dynamicEl: arrBaja,
    download: false,
    mobileSettings: {
      controls: true,
      showCloseIcon: true,
      download: false,
    },
  });
  const ultraGallery = window.lightGallery(ultraPoster, {
    mode: "lg-fade",
    dynamic: true,
    plugins: [lgAutoplay, lgZoom, lgFullscreen],
    dynamicEl: arrUltra,
    download: false,
    mobileSettings: {
      controls: true,
      showCloseIcon: true,
      download: false,
    },
  });
  const crioGallery = window.lightGallery(crioPoster, {
    mode: "lg-fade",
    dynamic: true,
    plugins: [lgAutoplay, lgZoom, lgFullscreen],
    dynamicEl: arrCrio,
    download: false,
    mobileSettings: {
      controls: true,
      showCloseIcon: true,
      download: false,
    },
  });


  biomedicoPoster.addEventListener("click", () => {
    biomedicoGallery.openGallery(0);
  });

  bajaPoster.addEventListener("click", () => {
    bajaGallery.openGallery(0); 
  });

  ultraPoster.addEventListener("click", () => {
    ultraGallery.openGallery(0); 
  });
  crioPoster.addEventListener("click", () => {
    crioGallery.openGallery(0); 
  });
};
/* Search Bar */

const observer = new MutationObserver(function(mutations) {
  mutations.forEach(function(mutation) {
    if (mutation.target.classList.contains('nav-menus-wrapper-open')) {
        const searchBar = document.querySelector('.input-search')
        if (searchBar) {
          searchBar.blur();
         }
      }
  });
});

observer.observe($$('#menu-offcanvas')[0], {
  attributes: true,
  characterData: true,
  childList: true,
  subtree: true,
  attributeOldValue: true,
  characterDataOldValue: true,
  attributeFilter: ['style']
});



