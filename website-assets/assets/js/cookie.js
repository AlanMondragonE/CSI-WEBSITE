const { createApp: newApp2 } = Vue;

const cookie_App = newApp2 ({
    data() {
        return {
            showCookies: false,
        };
    },
    mounted() {
        // Verificar si la cookie de aceptación existe
        const cookiesAceptadas = this.getCookie('inolab_cookie'); // Corregido el nombre de la cookie
        if (cookiesAceptadas === 'true') {
            // Si la cookie está presente y es "true", ocultar el popup de cookies
            this.ocultarPopupCookies();
        } else {
            this.adjustButtonPosition();
        }
    },
      
      methods: {
        getCookie(cookieName) {
          const name = cookieName + '=';
          const decodedCookie = decodeURIComponent(document.cookie);
          const cookieArray = decodedCookie.split(';');

          for (let i = 0; i < cookieArray.length; i++) {
            let cookie = cookieArray[i].trim();
            if (cookie.indexOf(name) === 0) {
              return cookie.substring(name.length, cookie.length);
            }
          }
          return '';
        },
        setCookie(cookieName, cookieValue, expirationDays) {
          const currentDate = new Date();
          currentDate.setTime(currentDate.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
          const expires = 'expires=' + currentDate.toUTCString();
          document.cookie = cookieName + '=' + cookieValue + '; ' + expires + '; path=/';
        },
        mostrarPopupCookies() {
          this.$refs.toCookiesSection.style.display = 'block';
        },
        aceptarCookies() {
          this.setCookie('inolab_cookie', 'true', 30);
          this.ocultarPopupCookies();
          // Ajusta la posición del botón
          this.adjustButtonPosition();
        },
        ocultarPopupCookies() {
          this.$refs.toCookiesSection.style.display = 'none';
        },
        adjustButtonPosition() {
            const cookieValue = this.getCookie('inolab_cookie'); // Use `this.getCookie`
            const flotante =  document.querySelector('#flotante'); 
            //const pagePromo = document.querySelector('#toPromotedPage'); 
            const isMobile = window.innerWidth <= 773;

            if (cookieValue) {
                flotante.style.bottom = '20px';
                //pagePromo.style.bottom = '20px';
            } else {
                flotante.style.bottom = isMobile ? 'calc(90px)' : '';
                //pagePromo.style.bottom = isMobile ? 'calc(150px)' : '';
            }
        }
    }
});

cookie_App.mount('#cookie');
