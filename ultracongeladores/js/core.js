/**
 * @module Core
 * @description Clase Core: se encarga de realizar los procesos e instancias del sitio web
 * @date 08/07/2022
 */

/* Global */
const $ = (element) => document.querySelector(`${element}`);
const $$ = (element) => document.querySelectorAll(`${element}`);

export default class Core {

    /**
    * Asigna el titulo de la página de manera dinámica
    */
    initTitle() {

        document.title = $('main').getAttribute('data-title').toString() + ' | Inolab Especialistas'
    }

    /**
     * Inicia el scroll del sitio web dependiendo el dispositivo donde se abri el sitio.
     */
    initScroll() {

        window.addEventListener("scroll", () => {

            const mediaQuery = window.matchMedia("(max-width: 700px)");

            if (!mediaQuery.matches) {

                if (window.scrollY > 0) {
                    $('#inicio').style.display = 'none';
                    $('#menu_principal').style.cssText = 'margin-top: 0px !important; background-color: #0b0e10';
                    $('#menu_principal').classList.add('animate__animated');
                    $('#menu_principal').classList.add('animate__slideInDown');
                    $('#menu_principal').classList.add('animate__faster');
                } else {
                    $('#inicio').style.display = 'flex';
                    $('#menu_principal').style.cssText = 'margin-top: 39px !important';
                    $('#menu_principal').classList.remove('animate__animated');
                    $('#menu_principal').classList.remove('animate__slideInDown');
                    $('#menu_principal').classList.remove('animate__faster');
                }

                if(window.scrollY > 100){
                    $('.popup').style.display = 'flex';
                }else {
                    $('.popup').style.display = 'none';
                }
            }

        });


    }

    initAnimate(element, animation, prefix = 'animate__') {

        new Promise((resolve, reject) => {

            const animationName = `${prefix}${animation}`;
            const node = $(element);

            node.classList.add(`${prefix}animated`, animationName);

            function handleAnimationEnd(event) {
                event.stopPropagation();
                node.classList.remove(`${prefix}animated`, animationName);
                resolve('Animación completada')
            }


            node.addEventListener('animationend', handleAnimationEnd, { once: true });

        });

    }

    /**
    * Inicia el loader del sitio web
    */
    initLoader() {

        window.addEventListener('load', e => {
            $('#body').style.backgroundColor = '#FFF';
            $('#loading-page').classList.toggle('loader-two');
            $('#content-body').style.display = 'block';
            window.scrollTo(0, 0);
        });

    }

    /**
     * @param {int} number     Se recibe el número del carrusel en la página.
     * @param {object} config  Se recibe el objeto con la configuración del carrusel.
     */
    initCarousel(identifier, number, config) {

        return new Splide($$('.' + identifier)[number - 1], config).mount(window.splide.Extensions);

    }

    /**
     * 
     * @param {int} number      Se recibe el número del video en la página.
     * @param {object} config   Se recibe el objeto con la configuración del video.
     */
    initVideo(identifier, number, config) {
        return new Plyr($$('.' + identifier)[number - 1], config)
    }


    /**
     *  Muestra las alertas (sweet alert)
     */
    showAlert(title = "", text, icon) {
        swal.fire({
            title,
            text,
            icon,
            confirmButtonColor: '#2787f5',
            confirmButtonText: 'Aceptar',
            allowOutsideClick: false,
        })
    }

    /**
    *  Muestra el loader (sweet alert)
    */
    showLoading(title = "", text) {
        Swal.fire({
            title: title,
            html: text,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading()
            },
        });
    }

    /* Muestra los errores del DOM */
    showDOMmessage(msg) {
        console.clear();
        console.warn('INOLAB Layout: ' + msg);
    }

}