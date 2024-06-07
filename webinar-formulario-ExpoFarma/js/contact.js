// nombre_del_archivo.js

const { createApp, nextTick } = Vue;

const contact_app = createApp({

    data() {
        return {

            name: '',
            email: '',
            tel: '',
            company: '',
            job: '',
            RegEmail: /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
            RegTel: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,
            isEmailValid: false,
            isTelValid: false,
            emptyFields: false,
            infoToSend: [],

            sections: [
                {
                    id: 'secc-1',
                    isActive: false,
                    icon: 'bi bi-chevron-down',
                    action: 'Ver más...'

                },
                {
                    id: 'secc-2',
                    isActive: false,
                    icon: 'bi bi-chevron-down',
                    action: 'Ver más...'
                }
            ]

        }
    },

    mounted() {
        this.initPopover();
    },

    computed: {

        invalidTel() {
            return (!this.isTelValid && this.tel != '') ? 'Por favor, ingresa un número válido' : ''
        },

        invalidEmail() {
            return (!this.isEmailValid && this.email != '') ? 'Por favor, ingresa un correo válido' : ''
        },

        emptyInputs() {
            return (this.emptyFields) ? 'No se han ingresado todos los datos, verifique su información' : ''
        },
    },



    methods: {

        cleanInputs() {

            this.name = '';
            this.tel = '';
            this.email = '';
            this.company = '';
            this.job = '';
            this.isEmailValid = false;
            this.isTelValid = false;
            this.emptyFields = false;
            this.infoToSend = [];
            this.isExpanded = false;
        },


        validateData(...data) {

            return data.some(input => input.length == 0 || input == '')

        },

        initPopover() {
            this.$nextTick(() => {
                const popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
                popovers.forEach(popover => {
                    return new bootstrap.Popover(popover, {
                        html: true,
                        trigger: 'hover'
                    });
                });
            })
        },

        toggleButton(index){

            this.sections[index].isActive = !this.sections[index].isActive;
            this.sections[index].icon = this.sections[index].isActive ? 'bi bi-chevron-up' : 'bi bi-chevron-down';
            this.sections[index].action = this.sections[index].isActive ? 'Ver menos...' : 'Ver más...';

        },


        sendForm() {
            if (this.validateData(this.name, this.tel, this.email, this.company, this.job)) {

                Swal.fire({
                    title: 'Campos Vacíos',
                    text: 'Verifique la información proporcionada',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: '#58ace4',
                });

                this.emptyFields = true;

                return;

            } else {

                if (!this.isEmailValid) {


                    Swal.fire({
                        title: 'Correo Inválido',
                        text: 'Ingrese un correo válido por favor.',
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#58ace4',
                    });

                    return;
                }

                if (!this.isTelValid) {

                    Swal.fire({
                        title: 'Teléfono Inválido',
                        text: 'Ingrese un número de teléfono válido por favor.',
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#58ace4',
                    });

                    return;
                }

                Swal.fire({
                    title: 'Enviando Solicitud',
                    html: 'Enviado solicitud, por favor espere...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });


                // Crear un objeto con los datos del formulario
                const formData = {
                    name: this.name,
                    email: this.email,
                    tel: this.tel,
                    company: this.company,
                    job: this.job,
                };

                try {
                  
                  
                    const config = {
                          method: 'POST',
                          header: { 'Content-Type': 'application/json' },
                          body: JSON.stringify(formData)
                      }
  
                      fetch('../website-assets/php/webinar_expo.php', config)
                          .then((response) => response.json())
                          .then(response => {
  
                              const { status } = response;
  
                              if (status == 200) {
  
  
                                  Swal.fire({
                                      icon: 'success',
                                      title: 'Formulario ExpoFarma',
                                      text: 'Enviado Exitosamente',
                                      confirmButtonText: 'Aceptar',
                                      confirmButtonColor: '#58ace4',
                                      allowOutsideClick: false
                                  }).then((result) => {
                                      if (result.isConfirmed) {
  
                                          this.cleanInputs();
                                      }
                                  });
  
  
  
                              } else {
  
                                  Swal.fire({
                                      icon: 'error',
                                      title: 'Oops... Ocurrió un error',
                                      text: 'Error de comunicación, inténtalo más tarde',
                                      confirmButtonText: 'Aceptar',
                                      confirmButtonColor: '#58ace4',
                                      allowOutsideClick: false
                                  }).then((result) => {
                                      if (result.isConfirmed) {
  
                                          this.cleanInputs();
                                      }
                                  });
  
  
                              }
  
                          });
  
                   
                    
                } catch (error) { 
                        console.error('Error en la solicitud:', error);
                }
                
            }
        },
    },

    watch: {
        tel(val) {
            val != '' ? (this.isTelValid = this.RegTel.test(val)) : (this.isTelValid = true)
        },

        email(val) {
            val != '' ? (this.isEmailValid = this.RegEmail.test(val)) : (this.isEmailValid = true)
        },

        channel(val) {
            if (val == 'attention') {
                this.emailsToSend[0] = 'atencionclientes@inolab.com';
            } else {
                this.emailsToSend[0] = 'ventas@inolab.com';
            }
        }

    }
});

contact_app.mount('#contact');
