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
  initMainCarrusels();
  initBannerCards();
  openDetailCard();
  headerButtons();
  actionButtonsDetail();
});

/* Global */
const $ = (element) => document.querySelector(`${element}`);
const $$ = (element) => document.querySelectorAll(`${element}`);


/* Inicia las cards del banner */
const initBannerCards = () => {
  $$(".section-background-detail").forEach((section) => {
    $$(".card-image").forEach((product, index) => {
      product.addEventListener("click", (e) => {
        initVideos();
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

const openDetailCard = () => {

  $$(".card").forEach((card, index) => {

    card.addEventListener("click", (e) => {

      //Esta función es la mas nativa, y crea distintos tipos de eventos no solo los eventos click. 
      $$('.btn-close').forEach(btn => {
          const event = new Event("click");
          btn.dispatchEvent(event);
      });

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
      close.parentNode.parentNode
        .querySelectorAll(".item")
        .forEach((item) => item.classList.remove("d-none"));

      window.scrollTo({
        top: 550,
        behavior: "smooth",
      });
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
        const event = new Event("click");
        $$(".card")[index].dispatchEvent(event);
        initVideos();
      });
    });
};

const actionButtonsDetail = () => {
  $$(".btn-more-info").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      $("#Contacto").scrollIntoView({ behavior: "smooth" });
    });
  });

  $$(".btn-related-products").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      $("#relacionados").scrollIntoView({ behavior: "smooth" });
    });
  });
};

$('#smButton').addEventListener('click', e => {
  window.scrollTo({ top: $('#Contacto').offsetTop - 85, behavior: 'smooth'});
});

/* Inicia todos los carruseles */
const initCarrusels = () => {

  const sliderConfig = {
    type: "fade",
    perPage: 1,
    pagination: false,
    autoplay: true,
    width: '100%',
    height:"100vh",
    speed: 1000,
    rewind: true,
    heightRatio: 0.47,
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
    title: "Video Demo",
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
    videoPosters[index] != undefined &&
      (video.poster = videoPosters[index].src);
  });
};

const initProductGallery = () => {
  const posterFarmaceuticos = $("#poster-1");
  const posterBiomedicos = $("#poster-2");
  const posterCombinados = $("#poster-3");

  const arrProductosFarmaceuticos = [
    {
      src: "img/posters/posterVideoFarma.jpg",
      responsive:
        "https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=480&q=80 480, https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=800&q=80 800",
      subHtml: `<div class="lightGallery-captions">
                    <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke Cagle</a></h4>
                    <p>Description of the slide 1</p>
                </div>`,
    },
    {
      src: "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80",
      responsive:
        "https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=480&q=80 480, https://images.unsplash.com/photo-1477322524744-0eece9e79640?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80 800",
      subHtml: `<div class="lightGallery-captions">
                    <h4>Photo by <a href="https://unsplash.com/@brookecagle">Brooke Cagle</a></h4>
                    <p>Description of the slide 1</p>
                </div>`,
    },
  ];

  posterFarmaceuticos.addEventListener("click", () => {
    lightGallery(posterFarmaceuticos, {
      mode: "lg-fade",
      escKey: true,
      dynamic: true,
      dynamicEl: arrProductosFarmaceuticos,
    });
  });
};


