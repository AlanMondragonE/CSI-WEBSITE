/**
 * @author José Armando Hernández Salamanca
 * @description Sección de contacto de la página web.
 * @module Contacto
 */

const { createApp, nextTick } = Vue;

const contact_app = createApp({

    data() {
        return {

            name: '',
            email: '',
            tel: '',
            company: '',
            message: '',
            captcha_key: '6LcowAsUAAAAADj3S7alY0UCq4bi95aUYRTinbo-',
            captcha_id: 0,
            assigments: [
                {
                    title: 'CIENCIAS DE LA SEPARACIÓN',
                    products: [
                        { title: 'Espectrometría de Masas', selected: false, brands: ['SCIEX'] },
                        { title: 'Tamaño y Distribución de Partículas', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Conteo de Partículas', selected: false, brands: ['BECKMAN COULTER', 'PAMAS'] },
                        { title: 'Electroforesis Capilar', selected: false, brands: ['SCIEX'] },
                        { title: 'Centrifugación', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'HPLC - Masas', selected: false, brands: [''] },
                        { title: 'GC - Masas', selected: false, brands: [''] },
                        { title: 'ICP - Masas', selected: false, brands: [''] },
                        { title: 'Absorción Atómica', selected: false, brands: [''] }
                    ]
                },
                {
                    title: 'BIOTECNOLOGÍA',
                    products: [
                        { title: 'Conteo de Células y Viabilidad Celular', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Microbiorreactores', selected: false, brands: ['BECKMAN COULTER)'] },
                        { title: 'Citometría de Flujo', selected: false, brands: ['BECKMAN COULTER)'] },
                        { title: 'Imagenología In Vitro', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Imagenología In Vivo', selected: false, brands: ['ECHOMRI'] },
                        { title: 'Manipuladores de líquidos', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Crecimiento de Microorganismos', selected: false, brands: ['BINDER'] }
                    ]
                },
                {
                    title: 'BIOLOGÍA MOLECULAR',
                    products: [
                        { title: 'Lectores de Microplacas', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'EliSpot/FluoroSpot', selected: false, brands: ['IMMUNOSPOT', 'CTL'] },
                        { title: 'Microscopía', selected: false, brands: ['ZEISS'] },
                        { title: 'Microscopía Electrónica', selected: false, brands: ['ZEISS'] },
                        { title: 'Microarreglos', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Cribado Celular', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Extracción de DNA/RNA', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'MALDITOF', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Identificación Bacteriana', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Resistencia Antimicrobiana', selected: false, brands: ['BECKMAN COULTER'] }
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
                        { title: 'Incubadoras', selected: false, brands: ['BINDER'] },
                        { title: 'Congeladores', selected: false, brands: ['MELING'] },
                        { title: 'Ultracongeladores', selected: false, brands: ['BINDER', 'MELING'] },
                        { title: 'Lavadoras Termodesinfectantes', selected: false, brands: ['BMT', 'MELAG'] },
                        { title: 'Cámaras de Crecimiento', selected: false, brands: ['BINDER'] },
                        { title: 'Hornos', selected: false, brands: ['BINDER'] }
                    ]

                },
                {
                    title: 'ESPECIALIDADES',
                    products: [
                        { title: 'Composición Corporal', selected: false, brands: ['ECHOMRI'] },
                        { title: 'Detergentes', selected: false, brands: ['FRANKLAB'] },
                        { title: 'Electrofisiología', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Cabinas de Bioseguridad', selected: false, brands: ['TOP AIR'] },
                        { title: 'Cabinas de PCR', selected: false, brands: ['TOP AIR'] },
                        { title: 'Campanas de Flujo Laminar', selected: false, brands: ['TOP AIR'] },
                        { title: 'Campanas de Extracción', selected: false, brands: ['TOP AIR'] },
                        { title: 'Mobiliario de Laboratorio', selected: false, brands: ['TOP AIR'] }
                    ]
                },

            ],
            infoToSend: [],
            emailsToSend: ['ventas@inolab.com', 'aarley@inolab.com', 'abelsanchez@inolab.com', 'ale_huazo@hotmail.com', 'marketing.contacto@inolab.com'],
            RegEmail: /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
            RegTel: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,
            isEmailValid: false,
            isTelValid: false,
            emptyFields: false,
            channel: 'sales',
            regions: {
                occident: [
                    'Michoacan',
                    'Jalisco',
                    'Colima',
                    'Aguascalientes',
                    'Nayarit',
                    'Zacatecas',
                    'Durango',
                    'Sinaloa',
                    'Chihuahua',
                    'Sonora',
                    'Baja California',
                    'Baja California Sur'
                ],
                center: [
                    'Yucatan',
                    'Quintana Roo',
                    'Campeche',
                    'Chiapas',
                    'Tabasco',
                    'Oaxaca',
                    'Guerrero',
                    'Puebla',
                    'Veracruz',
                    'Tlaxcala',
                    'Ciudad de Mexico',
                    'Morelos',
                    'Hidalgo',
                    'Querétaro',
                    'San Luis Potosi',
                    'Tamaulipas',
                    'Nuevo Leon',
                    'Coahuila'
                ],
            },
            currentRegion: 'center',
            region: ''
        }
    },

    created() {

        this.getRegion();


    },

    mounted() {

        if (window.grecaptcha) {
            this.captcha_id = grecaptcha.render(document.querySelector('.g-recaptcha'), { sitekey: this.captcha_key });
        }

        nextTick(() => {
            MicroModal.init({
                openTrigger: 'data-custom-open',
                closeTrigger: 'data-custom-close',
                openClass: 'is-open',
                disableScroll: true,
                disableFocus: false,
                awaitOpenAnimation: true,
                awaitCloseAnimation: true,
                debugMode: true
            });
        });
        
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
            this.message = '';
            this.isEmailValid = false;
            this.isTelValid = false;
            this.emptyFields = false;
            this.infoToSend = [];
            this.assigments.forEach(({ products }) => products.forEach(product => product.selected = false));
            grecaptcha.reset();

        },


        validateData(...data) {

            return data.some(input => input.length == 0 || input == '')

        },

        async getRegion() {

            await fetch('https://freeipapi.com/api/json', {
                method: 'GET'
            }).then(response => response.json())
                .then(data => {

                    const { regionName } = data;
                    this.region = regionName;

                    if(this.regions.occident.includes(regionName)){

                        this.currentRegion = 'occident';

                    }else{

                        this.currentRegion = 'center';
                    }

                }).catch((error) => {

                    console.error(error);
                });

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

            this.emailsToSend = [...new Set(this.emailsToSend)];


        },

        sendForm() {


            if (this.validateData(this.name, this.tel, this.email, this.company, this.message)) {

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

                if (this.getSelectedProducts.length == 0) {

                    Swal.fire({
                        title: 'Equipo / Tecnología',
                        text: 'Selecciona al menos un equipo y/o tecnología para enviar el formulario.',
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#58ace4',
                    });

                    this.emptyFields = true;

                    return;
                }

                if(this.currentRegion === 'occident'){

                    this.emailsToSend = ['ventas@inolab.com', 'aarley@inolab.com', 'ale_huazo@hotmail.com', 'marketing.contacto@inolab.com', 'rramirez@inolab.com'];
                }
                

                this.emptyFields = false;

                if (grecaptcha.getResponse(this.captcha_id).length != 0) {

                    Swal.fire({
                        title: 'Enviando Solicitud',
                        html: 'Enviado solicitud, por favor espere...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        },
                    });


                    const obj = {
                        name: this.name,
                        tel: this.tel,
                        email: this.email,
                        company: this.company,
                        message: this.message,
                        captcha: grecaptcha.getResponse(this.captcha_id).length != 0 ? grecaptcha.getResponse(this.captcha_id) : 0,
                        emails: this.emailsToSend.join(','),
                        interests: this.getInterests,
                        region: this.region
                    }

                    const config = {
                        method: 'POST',
                        header: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(obj)
                    }

                    fetch('/website-assets/php/sendInfo.php', config)
                        .then((response) => response.json())
                        .then(response => {

                            const { status } = response;

                            if (status == 200) {


                                Swal.fire({
                                    icon: 'success',
                                    title: '¡Solicitud Enviada!',
                                    text: 'Tu solicitud ha sido enviada correctamente, en breve nos comunicaremos contigo.',
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



                     } else {
    
                        Swal.fire({
                            title: 'reCAPTCHA',
                            text: 'Por favor comprueba que no eres un robot',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#58ace4',
                        });
                    } 

                }

            }

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

contact_app.mount('#contacto');

