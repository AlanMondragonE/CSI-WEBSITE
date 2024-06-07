const { createApp, nextTick } = Vue;

const contact_app = createApp({
    data() {
        return {

        name: '',
        email: '',
        tel: '',
        company: '',
        job: '',
        comments: '',
        assigments: [
            {
                title: 'CIENCIAS DE LA SEPARACIÓN',
                products: [
                    { title: 'Espectrómetros de Masas', selected: false, brands: ['SCIEX'] },
                    { title: 'Tamaño y Distribución de Partículas', selected: false, brands: ['BECKMAN COULTER'] },
                    { title: 'Conteo de Partículas', selected: false, brands: ['BECKMAN COULTER', 'PAMBAS'] },
                    { title: 'Electroforesis Capilar', selected: false, brands: ['SCIEX'] },
                    { title: 'Centrifugación ', selected: false, brands: ['BECKMAN COULTER'] }
                ]
            },
            {
                title: 'BIOTECNOLOGÍA',
                products: [
                    { title: 'Conteo de Células y Viabilidad Celular ', selected: false, brands: ['BECKMAN COULTER)'] },
                    { title: 'Microbiorreactor', selected: false, brands: ['BECKMAN COULTER'] },
                    { title: 'Citometría de Flujo', selected: false, brands: ['BECKMAN COULTER'] },
                    { title: 'Imagenología In Vitro', selected: false, brands: ['MOLECULAR DEVICES'] },
                    { title: 'Imagenología In Vivo ', selected: false, brands: ['ECHOMRI'] },
                    { title: 'Manipuladores de líquidos ', selected: false, brands: ['BECKMAN COULTER'] },
                    { title: 'Crecimiento de Microorganismos ', selected: false, brands: ['BINDER'] }
                ]
            },
            {
                title: 'BIOLOGÍA MOLECULAR',
                products: [
                    { title: 'Lectores de microplacas', selected: false, brands: ['MOLECULAR DEVICES'] },
                    { title: 'EliSpot/FluoroSpot', selected: false, brands: ['CTL'] },
                    { title: 'Microscopios', selected: false, brands: ['ZEISS'] },
                    { title: 'Microscopios Electrónicos ', selected: false, brands: ['ZEISS'] },
                    { title: 'Microarreglos', selected: false, brands: ['MOLECULAR DEVICES'] },
                    { title: 'Cribado Celular', selected: false, brands: ['MOLECULAR DEVICES'] },
                    { title: 'Extracción de DNA/RNA ', selected: false, brands: ['BECKMAN COULTER'] },
                    { title: 'MALDITOF', selected: false, brands: ['BECKMAN COULTER'] },
                    { title: 'Identificación Bacteriana y Antibiogramas ', selected: false, brands: ['BECKMAN COULTER'] }
                ]
            },
            {
                title: 'ESPECIALIDADES',
                products: [
                    { title: 'Composición Corporal', selected: false, brands: ['ECHOMRI'] },
                    { title: 'Detergentes', selected: false, brands: ['FRANKLAB'] },
                    { title: 'Agitadores', selected: false, brands: ['EDMUND BÜHLER'] },
                    { title: 'Electrofisiología', selected: false, brands: ['MOLECULAR DEVICES'] },
                    { title: 'Cabinas de bioseguridad', selected: false, brands: ['TOP AIR'] },
                    { title: 'Cabinas de PCR', selected: false, brands: ['TOP AIR'] },
                    { title: 'Campanas de Flujo Laminar', selected: false, brands: ['TOP AIR'] },
                    { title: 'Campanas de Extracción', selected: false, brands: ['TOP AIR'] },
                    { title: 'Mobiliario de Laboratorio ', selected: false, brands: ['TOP AIR'] }

                ]
            },
            {
                title: 'TEMPERATURA',
                products: [
                    { title: 'Esterilizadores', selected: false, brands: ['BMT', 'MELAG'] },
                    { title: 'Cámaras Climáticas', selected: false, brands: ['BINDER'] },
                    { title: 'Cuartos Climáticos', selected: false, brands: ['BINDER', 'PARAMETER'] },
                    { title: 'Cuartos fríos', selected: false, brands: ['PARAMETER'] },
                    { title: 'Refrigeradores', selected: false, brands: ['MELING'] },
                    { title: 'Incubadoras', selected: false, brands: ['MELING'] },
                    { title: 'Congeladores', selected: false, brands: ['MELING'] },
                    { title: 'Ultracongeladores', selected: false, brands: ['BINDER'] },
                    { title: 'Lavadoras Termodesinfectantes ', selected: false, brands: ['MELAG', 'BMT'] },
                    { title: 'Cámaras de Crecimiento', selected: false, brands: ['BINDER'] },
                    { title: 'Hornos ', selected: false, brands: ['BINDER'] }
                ]

            }

        ],
        infoToSend: [],
        RegEmail: /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        RegTel: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,
        isEmailValid: false,
        isTelValid: false,
        emptyFields: false,

        };
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
        getSelectedProducts() {

            let selected = [];
            this.assigments.forEach(line => {
                line.products.forEach(product => {
                    if (product.selected) {
                        selected.push(product);
                    }
                })
            })

            return selected
        },
        getInterests() {

            let interestsSelected = [];

            this.infoToSend.forEach(interest => {
                interestsSelected.push(interest.title);
            });

            return interestsSelected.join(', ')
        }
        
    
    },
    
    
    methods: {
    
        cleanInputs() {
    
            this.name = '';
            this.tel = '';
            this.email = '';
            this.company = '';
            this.job = '';
            this.comments = '';
            this.message = '';
            this.isEmailValid = false;
            this.isTelValid = false;
            this.emptyFields = false;
            this.infoToSend = [];
            this.assigments.forEach(({ products }) => products.forEach(product => product.selected = false));
    
        },
    
    
        validateData(...data) {
    
            return data.some(input => input.length == 0 || input == '')
    
        }, 
        setStatusProduct(status, indexA, indexP) {

            this.assigments[indexA].products[indexP].selected = !status;

            let unSelected = [];

            this.assigments.forEach(assigments => {

                assigments.products.forEach(({ title, selected, brands }) => {
                    if (selected) {
                        this.infoToSend.push({ title: title + ' (' + brands.join(', ') + ')', });
                    } else {
                        unSelected.push({ title: title + ' (' + brands.join(', ') + ')' });
                    }
                });
            });

            const hash = {};
            this.infoToSend = this.infoToSend.filter(o => hash[o.title] ? false : hash[o.title] = true);

            this.infoToSend.forEach((product, indexProduct) => {
                unSelected.forEach(item => {
                    if (item.title === product.title) {
                        this.infoToSend.splice(indexProduct, 1)
                    }
                })
            });

        

        },
        
        sendForm() {
        if (this.validateData(this.name, this.tel, this.email, this.company)) {
    
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

      
              const formData = {
                  name: this.name,
                  email: this.email,
                  tel: this.tel,
                  company: this.company,
                  job: this.job,
                  comments: this.comments,
                  interests: this.getInterests,
              };
              
    
    
              try {
                  
                  
                  const config = {
                        method: 'POST',
                        header: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(formData)
                    }

                    fetch('/website-assets/php/prospectos_expo.php', config)
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
    
            
    
            channel(val) {
                if (val == 'attention') {
                    this.emailsToSend[0] = 'atencionclientes@inolab.com';
                } else {
                    this.emailsToSend[0] = 'ventas@inolab.com';
                } 
            }
        }
    
    
});


contact_app.mount('#main');