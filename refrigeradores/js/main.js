/**
 * @module Main
 * @description Script que se encarga inicializar todo el sitio web
 */

import core from './core.js';
const clsCore = new core();


document.addEventListener('DOMContentLoaded', e => {

    clsCore.initTitle();
    clsCore.initLoader();
    clsCore.initScroll();
    initBannerCards();
    openDetailCard();
    headerButtons();
    actionButtonsDetail();
    initMainVideos();
    initMainCarrusels();
    initCarrusels();
    initProductGallery();

});


/* Global */
const $ = (element) => document.querySelector(`${element}`);
const $$ = (element) => document.querySelectorAll(`${element}`);



/* Inicia las cards del banner */
const initBannerCards = () => {

    $$('.section-background-detail').forEach(section => {

        $$('.card-image').forEach((product, index) => {

            product.addEventListener('click', e => {
                initVideos();
                $$('.container-details')[index] ? $$('.container-details')[index].classList.remove('d-none') : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
                $$('.container-details')[index] ? hideProductCards(section) : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
                $$('.container-details')[index] ? initCloseButtonBannerCards($$('.container-details')[index]) : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
                $$('.container-details')[index] ? initAccordions(section, index) : clsCore.showDOMmessage('Importante: No se ha integrado el contenido de la tarjeta: ' + (index + 1))
            })
        })

    });

}

/* Oculta las tarjetas de los productos principales mostrados en el banner */
const hideProductCards = (section) => {
    $$('.item').forEach(item => {
        item.classList.add('d-none');
    });
}

/* Inicia el boton de cerrar de cada detalle de producto */
const initCloseButtonBannerCards = (activeSection) => {
    activeSection.querySelectorAll('button')[0].addEventListener('click', e => {
        activeSection.classList.add('d-none');
        $$('.item').forEach(item => {
            item.classList.remove('d-none');
        });
    });
}

/* Inicia los acordeones de cada uno de los detalles de producto */
const initAccordions = (section, activeSection) => {
    const template = $('template').content;
    const fragment = document.createDocumentFragment();

    section.querySelectorAll('.accordion')[activeSection] != undefined && (section.querySelectorAll('.accordion')[activeSection].innerHTML = '');

    section.querySelectorAll('.item').forEach((item, index) => {
        if (index != activeSection) {
            template.querySelector('span').textContent = item.querySelector('h1').textContent;
            template.querySelector('div').dataset.id = index;
            const clone = template.cloneNode(true);
            fragment.appendChild(clone);
        }
    });

    if (section.querySelectorAll('.accordion')[activeSection] != undefined) {

        section.querySelectorAll('.accordion')[activeSection].appendChild(fragment);

        section.querySelectorAll('.accordion')[activeSection].querySelectorAll('.accordion-item').forEach((item, index) => {
            item.addEventListener('click', e => {
                section.querySelectorAll('.container-details')[item.getAttribute('data-id')].classList.remove('d-none');
                section.querySelectorAll('.container-details')[activeSection] && section.querySelectorAll('.container-details')[activeSection].classList.add('d-none');
                section.querySelectorAll('.container-details')[activeSection] && initCloseButtonBannerCards(section.querySelectorAll('.container-details')[item.getAttribute('data-id')]);
                section.querySelectorAll('.container-details')[activeSection] && initAccordions(section, item.getAttribute('data-id'));
            })
        });
    }

}

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
                console.log($$('.section-background-detail'))

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
}

// const headerButtons = () => {

//     $('.header-options').querySelectorAll('.btn-action').forEach((btn, index) => {
//         btn.addEventListener('click', e => {
//             const event = new Event("click");
//             $$('.more-card')[index].dispatchEvent(event);
//             initVideos();
//         });
//     })
// }

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

    $$('.btn-more-info').forEach(btn => {
        btn.addEventListener('click', e => {

            window.scrollTo({ top: $('#Contacto').offsetTop - 75, behavior: 'smooth' });

        });
    });

    /*     $$('.btn-related-products').forEach(btn => {
            btn.addEventListener('click', e => {
    
                window.scrollTo({ top: $('#relacionados').offsetTop - 80, behavior: 'smooth' });
    
            });
        }) */
}

$('#smButton').addEventListener('click', e => {
    window.scrollTo({ top: $('#Contacto').offsetTop - 85, behavior: 'smooth' });
});

/* Inicia las Modales */

const initModals = () => {

    MicroModal.init({

        onClose: (modal) => {

            document.querySelectorAll('.plyr').forEach((ply) => {
                const video = new Plyr(ply);
                video.stop();
            });

        },
        openTrigger: 'data-custom-open',
        closeTrigger: 'data-custom-close',
        openClass: 'is-open',
        disableScroll: true,
        disableFocus: false,
        awaitOpenAnimation: true,
        awaitCloseAnimation: true,
        debugMode: true
    });
}


/* Inicia todos los carruseles */
const initCarrusels = () => {

    const config = {
        type: 'slide',
        perPage: 3,
        pagination: false,
        breakpoints: {
            1024: {
                perPage: 1
            },
            375: {
                perPage: 1
            }
        },
        perMove: 1
    }

    clsCore.initCarousel('related-splide', 1, config);

}

const initMainCarrusels = () => {

    const config = {
        type: 'slide',
        perPage: 1,
        pagination: false,
        breakpoints: {
            1024: {
                perPage: 1
            },
            375: {
                perPage: 1
            },

        },
        perMove: 1
    }

    $$('.main-splide').forEach((splide, index) => {
        clsCore.initCarousel('main-splide', (index + 1), config);
    });
}


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
        title: 'Secondary Video',
        autoplay: false,
        autopause: true,
        volume: 1,
        muted: false,
        clickToPlay: true,
        hideControls: true,
        resetOnEnd: false,
        keyboard: {
            focused: true,
            global: false
        },
        tooltips: {
            controls: true,
            seek: true
        },
        displayDuration: true,
        fullscreen: {
            enabled: true
        },
        quality: {
            default: 576,
            options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240]
        },
        loop: {
            active: false
        }
    }

    $$('.player').forEach((ply, index) => {
        const video = clsCore.initVideo('player', (index + 1), config);
        video.muted = true;
        videoPosters[index] != undefined && (video.poster = videoPosters[index].src);
    });
}


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
            src: 'img/posters/posterVideoFarma.jpg'
        },
        {
            id: 2,
            src: 'img/posters/posterVideoBiomedicos.jpg'
        },
        {
            id: 3,
            src: 'img/posters/posterVideoCombinados.jpg'
        }
    ];

    const config = {
        title: 'Main Video',
        autoplay: false,
        autopause: true,
        volume: 1,
        muted: false,
        clickToPlay: true,
        hideControls: true,
        resetOnEnd: false,
        keyboard: {
            focused: true,
            global: false
        },
        tooltips: {
            controls: true,
            seek: true
        },
        displayDuration: true,
        fullscreen: {
            enabled: true
        },
        quality: {
            default: 576,
            options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240]
        },
        loop: {
            active: false
        }
    }

    $$('.main-player').forEach((ply, index) => {
        const video = clsCore.initVideo('main-player', (index + 1), config);
        video.muted = true;
        videoPosters[index] != undefined && (video.poster = videoPosters[index].src);
    });

    initModals();

}


const initProductGallery = () => {


    const posterFarmaceuticos = $("#poster-1");
    const posterBiomedicos = $("#poster-2");
    const posterCombinados = $("#poster-3");

    const arrProductosFarmaceuticos = [
        {
            src: "img/gallery/farmaceuticos/55-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/55-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-56L</h1>
                  <p>Almacenamiento de 56 Litros.</p>
                  <p>2 Charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/75-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/75-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-75L</h1>
                  <p>Almacenamiento de 75 Litros.</p>
                  <p>3 Charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/130-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/130-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-130L</h1>
                  <p>Almacenamiento de 130 Litros.</p>
                  <p>3 Charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/150-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/150-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-150L</h1>
                  <p>Almacenamiento de 150 Litros.</p>
                  <p>Refrigerador tipo cofre</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/275-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/275-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-275L</h1>
                  <p>Almacenamiento de 275 Litros.</p>
                  <p>Refrigerador tipo cofre</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/315-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/315-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-315L</h1>
                  <p>Almacenamiento de 315 Litros.</p>
                  <p>5 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/360-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/360-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-360L</h1>
                  <p>Almacenamiento de 360 Litros.</p>
                  <p>A prueba de explosiones</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/395-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/395-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-395L</h1>
                  <p>Almacenamiento de 395 Litros.</p>
                  <p>7 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/525-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/525-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-525L</h1>
                  <p>Almacenamiento de 525 Litros.</p>
                  <p>6 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/650-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/650-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-650L</h1>
                  <p>Almacenamiento de 650 Litros.</p>
                  <p>5 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/725-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/725-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-725</h1>
                  <p>Almacenamiento de 725 Litros.</p>
                  <p>12 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/1015-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/1015-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-1015L</h1>
                  <p>Almacenamiento de 1015 Litros.</p>
                  <p>12 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/1320-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/1320-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-1320L</h1>
                  <p>Almacenamiento de 1320 Litros.</p>
                  <p>10 charolas ajustables</p>
              </div>`,
        },
        {
            src: "img/gallery/farmaceuticos/1505-1900x800.jpg",
            responsive: "img/gallery/farmaceuticos/1505-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>Y-1505L</h1>
                  <p>Almacenamiento de 1505 Litros.</p>
                  <p>18 charolas ajustables</p>
              </div>`,
        },
    ];

    const arrProductsBiomedicos = [
        {
            src: "img/gallery/biomedicos/88-1900x800.jpg",
            responsive: "img/gallery/biomedicos/88-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>XC-88L</h1>
                  <p>Almacenamiento de 88 Litros.</p>
                  <p>3 estantes revestidos de acero</p>
              </div>`,
        },
        {
            src: "img/gallery/biomedicos/90-1900x800.jpg",
            responsive: "img/gallery/biomedicos/90-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>XC-90W</h1>
                  <p>Almacenamiento de 90 Litros.</p>
                  <p>Refrigerador tipo cofre</p>
              </div>`,
        },
        {
            src: "img/gallery/biomedicos/168-1900x800.jpg",
            responsive: "img/gallery/biomedicos/168-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>XC-168L</h1>
                  <p>Almacenamiento de 168 Litros.</p>
                  <p>Pantalla con sistema Android</p>
              </div>`,
        },
        {
            src: "img/gallery/biomedicos/268-1900x800.jpg",
            responsive: "img/gallery/biomedicos/268-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>XC-268L</h1>
                  <p>Almacenamiento de 268 Litros.</p>
                  <p>5 Estantes revestidos de acero</p>
              </div>`,
        },
        {
            src: "img/gallery/biomedicos/368-1900x800.jpg",
            responsive: "img/gallery/biomedicos/368-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>XC-368L</h1>
                  <p>Almacenamiento de 368 Litros.</p>
                  <p>5 Estantes revestidos de acero</p>
              </div>`,
        },
        {
            src: "img/gallery/biomedicos/618-1900x800.jpg",
            responsive: "img/gallery/biomedicos/618-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>XC-618L</h1>
                  <p>Almacenamiento de 618 Litros.</p>
                  <p>Pantalla con sistema Android</p>
              </div>`,
        },
    ];

    const arrProductsCombinados = [
        {
            src: "img/gallery/combinados/289-1900x800.jpg",
            responsive: "img/gallery/biomedicos/289-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-289EL</h1>
                  <p>Almacenamiento de 289 Litros.</p>
                  <p>2°C a 8°C y -10°C a -26°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/289-1900x800.jpg",
            responsive: "img/gallery/biomedicos/289-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-289FL</h1>
                  <p>Almacenamiento de 289 Litros.</p>
                  <p>2°C a 8°C y -10°C a -40°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/300-1900x800.jpg",
            responsive: "img/gallery/biomedicos/300-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-300EL</h1>
                  <p>Almacenamiento de 300 Litros.</p>
                  <p>2°C a 8°C y -10°C a -26°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/300-1900x800.jpg",
            responsive: "img/gallery/biomedicos/300-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-300FL</h1>
                  <p>Almacenamiento de 300 Litros.</p>
                  <p>2°C a 8°C y -10°C a -40°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/450-1900x800.jpg",
            responsive: "img/gallery/biomedicos/450-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-450EL</h1>
                  <p>Almacenamiento de 450 Litros.</p>
                  <p>2°C a 8°C y -10°C a -26°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/450-1900x800.jpg",
            responsive: "img/gallery/biomedicos/450-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-450FL</h1>
                  <p>Almacenamiento de 450 Litros.</p>
                  <p>2°C a 8°C y -10°C a -40°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/519-1900x800.jpg",
            responsive: "img/gallery/biomedicos/519-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-519EL</h1>
                  <p>Almacenamiento de 519 Litros.</p>
                  <p>2°C a 8°C y -10°C a -26°C</p>
              </div>`,
        },
        {
            src: "img/gallery/combinados/519-1900x800.jpg",
            responsive: "img/gallery/biomedicos/519-800x500.jpg 480",
            subHtml: `<div class="lightGallery-captions">
                  <h1>YCD-519FL</h1>
                  <p>Almacenamiento de 519 Litros.</p>
                  <p>2°C a 8°C y -10°C a -40°C</p>
              </div>`,
        },
    ];


    const farmaGallery = window.lightGallery(posterCombinados, {
        mode: "lg-fade",
        dynamic: true,
        plugins: [lgVideo, lgAutoplay, lgZoom, lgFullscreen],
        dynamicEl: arrProductosFarmaceuticos,
        download: false,
        mobileSettings: {
            controls: false, showCloseIcon: true, download: true
        }
    });

    posterFarmaceuticos.addEventListener("click", () => farmaGallery.openGallery(0));

    const biomedicoGallery = window.lightGallery(posterCombinados, {
        mode: "lg-fade",
        dynamic: true,
        plugins: [lgVideo, lgAutoplay, lgZoom, lgFullscreen],
        dynamicEl: arrProductsBiomedicos,
        download: false,
        mobileSettings: {
            controls: false, showCloseIcon: true, download: true
        }
    });


    posterBiomedicos.addEventListener("click", () => biomedicoGallery.openGallery(0));

    const combinadosGallery = window.lightGallery(posterCombinados, {
        mode: "lg-fade",
        dynamic: true,
        plugins: [lgVideo, lgAutoplay, lgZoom, lgFullscreen],
        dynamicEl: arrProductsCombinados,
        download: false,
        mobileSettings: {
            controls: false, showCloseIcon: true, download: true
        }
    });


    posterCombinados.addEventListener("click", () => combinadosGallery.openGallery(0));


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
  
