/**
 * @module Main
 * @description Script que se encarga inicializar todo el sitio web
 */

import core from "./core.js";
const clsCore = new core();

document.addEventListener("DOMContentLoaded", (e) => {
  clsCore.initTitle();
  clsCore.initLoader();
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

/**
 * Aceptar cookies de usuario
 */

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

  initVideos();

  $$(".card").forEach((card, index) => {

    card.addEventListener("click", (e) => {


      $$(".section-background-detail").forEach((section, index) => {
        section.classList.add("d-none");
        $$(".popover")[index].classList.add("d-none");
      });

      if ($$(".section-background-detail")[index] != undefined) {

        $$(".section-background-detail ")[index].classList.remove("d-none");
        $$(".popover")[index].classList.remove("d-none");


        if ($$(".section-background-detail")[index].offsetTop > 0) {

          setTimeout(() => {
            window.scrollTo({
              top: $$(".section-background-detail")[index].offsetTop - 75,
              behavior: "smooth",
            });
          }, 800);

          $$(".section-background-detail")
          [index].querySelectorAll(".container-details")
            .forEach((container) => {
              container.classList.remove("d-none");
            });

        } else {

          card.nextElementSibling.querySelector('.accordion-content').classList.toggle('active');

        }


      } else {
        clsCore.showDOMmessage(
          "No se encuentra la sección correspondiente a la tarjeta número " +
          (index + 1)
        );
      }
    });
  });

  $$(".btn-close").forEach((close, index) => {
    close.addEventListener("click", (e) => {
      close.parentNode.parentNode.classList.add("d-none");
      $$(".popover")[index].classList.add("d-none");
      close.parentNode.parentNode
        .querySelectorAll(".container-details")
        .forEach((container) => container.classList.add("d-none"));

      document
        .querySelectorAll(".item")
        .forEach((item) => item.classList.remove("d-none"));


      if (index < 6) {
        window.scrollTo({
          top: $$(".products-section")[0].offsetTop - 40,
          behavior: "smooth",
        });
      } else if (index == 6) {
        window.scrollTo({
          top: $$(".products-section")[1].offsetTop - 40,
          behavior: "smooth",
        });
      } else {
        window.scrollTo({
          top: $$(".products-section")[2].offsetTop - 40,
          behavior: "smooth",
        });
      }

    });
  });

  $$(".accordion-content").forEach((accordion) => {
    accordion.addEventListener("click", (e) => {
      e.target.parentElement.classList.toggle("active");
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

/* Inicia las Modales */

const initModals = () => {

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
    width: '100%',
   height:'100vh',
    speed: 1000,
    rewind: true,
    // heightRatio: 0.47,
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
    videoPosters[index] != undefined &&
      (video.poster = videoPosters[index].src);
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
      src: "img/posters/posterCamarasSecado.jpg",
    },
    {
      id: 2,
      src: "img/posters/posterCamarasSecadoSeguridadFDL.jpg",
    },
    {
      id: 3,
      src: "img/posters/posterCamarasSecadoVacio.jpg",
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
    video.poster = videoPosters[index].src;
    video.restart();

  });

};


const initProductGallery = () => {
  const posterSecado = $("#poster-1");

  const arrSecado = [
    {
      src: "img/gallery/calentamiento/M/53-1900x800.jpg",
      responsive: "img/gallery/calentamiento/M/53-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE M</h1>
                  <p>Almacenamiento de 53 L - bandejas de 2 a 5 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/M/115-1900x800.jpg",
      responsive: "img/gallery/calentamiento/M/115-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE M</h1>
                  <p>Almacenamiento de 115 L - bandejas de 2 a 6 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/M/240-1900x800.jpg",
      responsive: "img/gallery/calentamiento/M/240-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE M</h1>
                  <p>Almacenamiento de 240 L - bandejas de 2 a 7 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/M/400-1900x800.jpg",
      responsive: "img/gallery/calentamiento/M/400-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE M</h1>
                  <p>Almacenamiento de 400 L - bandejas de 2 a 10 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/M/720-1900x800.jpg",
      responsive: "img/gallery/calentamiento/M/720-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE M</h1>
                  <p>Almacenamiento de 720 L - bandejas de 2 a 16 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FP/53-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FP/53-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FP</h1>
                  <p>Almacenamiento de 53 L - bandejas de 2 a 5 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FP/115-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FP/115-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FP</h1>
                  <p>Almacenamiento de 115 L - bandejas de 2 a 6 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FP/240-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FP/240-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FP</h1>
                  <p>Almacenamiento de 240 L - bandejas de 2 a 7 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FP/400-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FP/400-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FP</h1>
                  <p>Almacenamiento de 400 L - bandejas de 2 a 10 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FP/720-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FP/720-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FP</h1>
                  <p>Almacenamiento de 720 L - bandejas de 2 a 16 .</p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FED/56-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FED/56-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FED</h1>
                  <p>Almacenamiento de 60 L - bandejas de 2 a 4 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FED/115-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FED/115-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FED</h1>
                  <p>Almacenamiento de 116 L - bandejas de 2 a 5 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FED/260-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FED/260-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FED</h1>
                  <p>Almacenamiento de 259 L - bandejas de 2 a 8 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FED/400-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FED/400-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FED</h1>
                  <p>Almacenamiento de 400 L - bandejas de 2 a 10 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FED/720-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FED/720-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FED</h1>
                  <p>Almacenamiento de 741 L - bandejas de 2 a 16 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FD/23-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FD/23-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FD</h1>
                  <p>Almacenamiento de 20 L - bandejas de 2 a 4 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FD/56-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FD/56-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FD</h1>
                  <p>Almacenamiento de 60 L - bandejas de 2 a 4 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FD/115-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FD/115-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FD</h1>
                  <p>Almacenamiento de 116 L - bandejas de 2 a 5</p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FD/260-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FD/260-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FD</h1>
                  <p>Almacenamiento de 259 L - bandejas de 2 a 8</p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/FD/720-1900x800.jpg",
      responsive: "img/gallery/calentamiento/FD/720-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE FD</h1>
                  <p>Almacenamiento de 741 L - bandejas de 2 a 16 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/ED/23-1900x800.jpg",
      responsive: "img/gallery/calentamiento/ED/23-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE ED</h1>
                  <p>Almacenamiento de 20 L - bandejas de 2 a 4 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/ED/56-1900x800.jpg",
      responsive: "img/gallery/calentamiento/ED/56-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE ED</h1>
                  <p>Almacenamiento de 57 L - bandejas de 2 a 4 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/ED/115-1900x800.jpg",
      responsive: "img/gallery/calentamiento/ED/115-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE ED</h1>
                  <p>Almacenamiento de 114 L - bandejas de 2 a 5 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/ED/260-1900x800.jpg",
      responsive: "img/gallery/calentamiento/ED/260-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE ED</h1>
                  <p>Almacenamiento de 255 L - bandejas de 2 a 8 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/ED/400-1900x800.jpg",
      responsive: "img/gallery/calentamiento/ED/400-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE ED</h1>
                  <p>Almacenamiento de 400 L - bandejas de 2 a 10 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/ED/720-1900x800.jpg",
      responsive: "img/gallery/calentamiento/ED/720-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE ED</h1>
                  <p>Almacenamiento de 743 L - bandejas de 2 a 16 </p>
              </div>`,
    },
    {
      src: "img/gallery/calentamiento/E/28-1900x800.jpg",
      responsive: "img/gallery/calentamiento/E/28-800x500.jpg 480",
      subHtml: `<div class="lightGallery-captions">
                  <h1>SERIE E</h1>
                  <p>Almacenamiento de 28 L - bandejas de 2 a 4 .</p>
              </div>`,
    }
  ];


  const secadoGallery = window.lightGallery(posterSecado, {
    mode: "lg-fade",
    dynamic: true,
    plugins: [lgAutoplay, lgZoom, lgFullscreen],
    dynamicEl: arrSecado,
    download: false,
    mobileSettings: {
      controls: true,
      showCloseIcon: true,
      download: false,
    },
  });

  posterSecado.addEventListener("click", () => {
    //secadoGallery.openGallery(0)
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



$('#smButton').addEventListener('click', e => {
  window.scrollTo({top: $('#Contacto'). offsetTop -85, behavior: 'smooth'})
})