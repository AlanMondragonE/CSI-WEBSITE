'use strict';

const { createApp, nextTick } = Vue;

const app = createApp({

    data() {
        return {

            baseURL: 'https://inolab-business-card-api-production.up.railway.app/api',
            card: {},
            defaultCard: {
                name: 'Inolab Especialistas',
                area: 'Departamento de Ventas',
                phone: '55 5524 2429',
                email: 'ventas@inolab.com',
                photo: 'logo-default.png'
            },
            isOwner: false

        }
    },

    created() {

            
            if (this.getCardToken() !== 0) {
      
                localStorage.setItem('business-card-token', this.getCardToken());
                this.getCardByToken();
    
            }else{
                 
                if(localStorage.getItem('business-card')){
                    this.card = JSON.parse(localStorage.getItem('business-card'));
                }else{
                    this.card = this.defaultCard;
                }
            }

            if (this.getCardUUID() !== 0) {
    
                 this.getCardByUUID();
    
            }else{
                
                if(localStorage.getItem('business-card')){
                    this.card = JSON.parse(localStorage.getItem('business-card'));
                }else{
                    this.card = this.defaultCard;
                }
            }
        


    },

    mounted() {

       

    },

    methods: {


        getCardUUID() {
            try {

                const urlParams = new URLSearchParams(window.location.search);
                const uuid = urlParams.get('uuid') ?? 0;
                return uuid;

            } catch (error) {

                console.error('Ocurrió un error al obtener el ID.', error);
                this.card = this.defaultCard;
            }
        },

        getCardToken() {
            try {

                const urlParams = new URLSearchParams(window.location.search);
                const token = urlParams.get('token') ?? 0;
                return token;

            } catch (error) {

                console.error('Ocurrió un error al obtener el Token.', error);
                this.card = this.defaultCard;
            }
        },


        async getCardByUUID() {

            try {

                const response = await fetch(`${this.baseURL}/getCardByUUID`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        uuid: this.getCardUUID()
                    })
                });

                const { status, message, data } = await response.json();

                if (status === 200) {

                    this.card = data;
                    this.isOwner = true;
                    
                    
                    nextTick(() => {
                        
                        new QRCode(document.getElementById("qrCode"), {
                            text: `${this.baseURL}/viewCard?uuid=` + this.getCardUUID(),
                            width: 120,
                            height: 120,
                            colorDark: "#000000",
                            colorLight: "#ffffff",
                            correctLevel: QRCode.CorrectLevel.H,
                        });
                    });

                    localStorage.setItem('business-card', JSON.stringify(this.card));
                    

                } else {
                    this.card = this.defaultCard;
                }

            } catch (error) {
                console.log('No se puede obtener la tarjeta a través del UUID');
                this.card = this.defaultCard;
                
            }

        },

        async getCardByToken() {

            try {


                const response = await fetch(`${this.baseURL}/getCardByToken`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('business-card-token')
                    }
                });

                const { status, message, data } = await response.json();
                
                if (status === 200) {

                    this.card = data;
                    this.isOwner = false;

                }else {
                     this.card = this.defaultCard;
                }

            } catch (error) {
                  console.log('No se puede obtener la tarjeta a través del token');
                  this.card = this.defaultCard;
            }

        },
        
        
        
        async downloadVCard() {
            
            try {

                const params = new URLSearchParams({
                        name: this.card.name,
                        area: this.card.area,
                        phone: this.card.phone,
                        email: this.card.email,
                        photo: this.card.photo
                    }).toString();
                window.open(`${this.baseURL}/downloadVCard?${params}`, '_blank');


            } catch (error) {
                console.error('Ha ocurrido un error al obtener la tarjeta.', error);
            }

        },

        shareURL() {

            if (navigator.share) {
                navigator.share({
                    title: `${this.card.name} | Inolab Especialistas`,
                    text: 'Hola 👋, te comparto mi tarjeta de presentación digital. ¡Conóceme!',
                    url: `${this.baseURL}/viewCard?uuid=${this.getCardUUID()}`,
                })
                    .then(() => console.log('Contenido compartido exitosamente'))
                    .catch((error) => console.log('Error al compartir', error));
            } else {
                console.log(`La Web Share API no está soportada en tu navegador`);
            }

        },
        
        openPhone() {
          const phoneNumber = this.card.phone; 
          window.open(`tel:${phoneNumber}`, '_self');
        },
        
        openEmail() {
          const email = this.card.email; 
          window.open(`mailto:${email}`, '_self');
        },
        
       
       async openWhatsApp() {
            const message = 'Hola, me gustaría mas información. 😀';
            const phoneNumber = this.card.phone;
            
            // Codifica el mensaje para usarlo en una URL
            const encodedMessage = encodeURIComponent(message);
            
            // Crea la URL de WhatsApp
            const whatsappURL = `https://api.whatsapp.com/send/?phone=${phoneNumber}&text=${encodedMessage}&type=phone_number&app_absent=0`;
            
            // Abre la URL de WhatsApp
            window.location.href = whatsappURL; 
        }

    }

});

app.mount('#business-card')