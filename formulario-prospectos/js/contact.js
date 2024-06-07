// nombre_del_archivo.js

const { createApp, nextTick } = Vue;

const contact_app = createApp({
    data() {
        return {
            name: "",
            email: "",
            tel: "",
            ext: "",
            company: "",
            job: "",
            comments: "",
            channel: 0,
            infoToSend: [],
            RegEmail: /^\w+([\.\+\-]?(\w|-)*)*@(\w+([\.\-\+]?(\w|-)*)*\.\w{2,4})+$/,
            RegTel: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,
            isEmailValid: false,
            isTelValid: false,
            emptyFields: false,

            channels: [
                
            { title: 'Visita Comercial'},
            { title: 'Llamada Telefónica' },
            { title: 'Correo Asesor'},
            { title: 'Referidos'},
            { title: 'Visita Servicio Técnico'},
        
           ],

            assigments: [

                {
                    title: 'CIENCIAS DE LA SEPARACIÓN',
                    products: [
                        { title: 'Espectrómetros de Masas', selected: false, brands: ['SCIEX'] },
                        { title: 'LS13320XR', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Multisizer 4E - PAMAS', selected: false, brands: ['BECKMAN COULTER', 'PAMAS'] },
                        { title: 'Electroforesis Capilar', selected: false, brands: ['SCIEX'] },
                        { title: 'Centrifugas', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'HPLC - Masas', selected: false, brands: [''] },
                        { title: 'GC - Masas', selected: false, brands: [''] },
                        { title: 'ICP - Masas', selected: false, brands: [''] },
                        { title: 'Absorción Atómica', selected: false, brands: [''] }
                    ]
                },
                {
                    title: 'BIOTECNOLOGÍA',
                    products: [
                        { title: 'Vi-CELL BLU', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Microbiorreactor', selected: false, brands: ['BECKMAN COULTER)'] },
                        { title: 'Citómetros de Flujo', selected: false, brands: ['BECKMAN COULTER)'] },
                        { title: 'Imagenología In Vitro', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Imagenología In Vivo', selected: false, brands: ['ECHOMRI'] },
                        { title: 'Manipuladores de líquidos', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Incubadoras', selected: false, brands: ['BINDER'] }
                    ]
                },
                {
                    title: 'BIOLOGÍA MOLECULAR',
                    products: [
                        { title: 'Lectores de Microplacas', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Immunospot', selected: false, brands: ['IMMUNOSPOT', 'CTL'] },
                        { title: 'Microscopios', selected: false, brands: ['ZEISS'] },
                        { title: 'Microscopios Electrónicos', selected: false, brands: ['ZEISS'] },
                        { title: 'Microarreglos', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Cribado Celular', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Extracción de DNA/RNA', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'MALDITOF', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Identificación Bacteriana y Antibiogramas', selected: false, brands: ['BECKMAN COULTER'] }
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

        };
    },

    mounted() {

        const modal = document.getElementById('interestModal');

        modal.addEventListener('hidden.bs.modal', () => {

            const collapses = document.querySelectorAll('#accordionExample .collapse');
            collapses.forEach((collapse) => {
                collapse.classList.remove('show');
            });

            const accordionbuttons = document.querySelectorAll('#accordionExample .accordion-button');
            accordionbuttons.forEach((btn) => {
                btn.classList.add('collapsed');
            });

        })

    },

    computed: {
        invalidTel() {
            let length = this.tel.length;
            return (!this.isTelValid || length == 11) && this.tel != ""
                ? "Ingresa un numero de 10 digitos"
                : "";
        },

        invalidEmail() {
            return !this.isEmailValid && this.email != ""
                ? "Por favor, ingresa un correo válido"
                : "";
        },

        emptyInputs() {
            return this.emptyFields
                ? "No se han ingresado todos los datos, verifique su información"
                : "";
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
        },

        visibleProducts() {
            let totalLength = 0;
            let visibleCount = 0;

            for (let i = 0; i < this.getSelectedProducts.length; i++) {
                totalLength += this.getSelectedProducts[i].title.length;
                if (totalLength > 38) break;
                visibleCount++;
            }

            return this.getSelectedProducts.slice(0, visibleCount);
        },
        remainingCount() {
            return this.getSelectedProducts.length - this.visibleProducts.length;
        },

        closeModal() {
            this.assigments.forEach(assignment => {
                assignment.isOpen = false;
            });
        },

    },

    methods: {
        cleanInputs() {
            this.name = "";
            this.tel = "";
            this.ext = "";
            this.email = "";
            this.company = "";
            this.job = "";
            this.comments = "";
            this.channel = 0;
            this.isEmailValid = false;
            this.isTelValid = false;
            this.emptyFields = false;
            this.assigments.forEach(({ products }) => products.forEach(product => product.selected = false));

            his.infoToSend = [];
            grecaptcha.reset();
        },

        validateData(...data) {
            return data.some((input) => input.length == 0 || input == "" || input == 0);
        },

        initPopover() {
            this.$nextTick(() => {
                const popovers = document.querySelectorAll(
                    '[data-bs-toggle="popover"]'
                );
                popovers.forEach((popover) => {
                    return new bootstrap.Popover(popover, {
                        html: true,
                        trigger: "hover",
                    });
                });
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



        },

        onlyNumber($event) {
            let keyCode = ($event.keyCode ? $event.keyCode : $event.which);
            if ((keyCode < 48 || keyCode > 57) && keyCode !== 46) { // 48-57 son los códigos de tecla para los números 0-9
                $event.preventDefault();
            }
        },

        limitInput() {
            if (this.ext.length > 6) {
                this.ext = this.ext.slice(0, 6);
            }
        },

        sendForm() {
            if (
                this.validateData(this.name, this.tel, this.email, this.company, this.comments, this.channel)
            ) {
                Swal.fire({
                    title: "Campos Vacíos",
                    text: "Verifique la información proporcionada",
                    confirmButtonText: "Aceptar",
                    confirmButtonColor: "#58ace4",
                });

                this.emptyFields = true;

                return;
            } else {

                if (!this.isEmailValid) {
                    Swal.fire({
                        title: "Correo Inválido",
                        text: "Ingrese un correo válido por favor.",
                        confirmButtonText: "Aceptar",
                        confirmButtonColor: "#58ace4",
                    });

                    return;
                }

                if (!this.isTelValid) {
                    Swal.fire({
                        title: "Teléfono Inválido",
                        text: "Ingrese un número de teléfono válido por favor.",
                        confirmButtonText: "Aceptar",
                        confirmButtonColor: "#58ace4",
                    });

                    return;
                }

                Swal.fire({
                    title: "Enviando Solicitud",
                    html: "Enviado solicitud, por favor espere...",
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                // Crear un objeto con los datos del formulario
                const formData = {
                    name: this.name,
                    email: this.email,
                    tel: this.tel + (this.ext ? ' Ext. ' + this.ext : ''),
                    company: this.company,
                    job: this.job ? this.job : 'No se propociono el puesto',
                    comments: this.comments,
                    interests: this.infoToSend.length > 0 ? this.getInterests : 'No se agregaron los intereses',
                    channel: this.channel
                };

                try {
                    const config = {
                        method: "POST",
                        header: { "Content-Type": "application/json" },
                        body: JSON.stringify(formData),
                    };

                    fetch("/inolab-website/website-assets/php/Reister_Prospect.php", config)
                        .then((response) => response.json())
                        .then((response) => {
                            const { status } = response;

                            if (status == 200) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Formulario Prospecto",
                                    text: "Enviado Exitosamente",
                                    confirmButtonText: "Aceptar",
                                    confirmButtonColor: "#58ace4",
                                    allowOutsideClick: false,
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.cleanInputs();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops... Ocurrió un error",
                                    text: "Error de comunicación, inténtalo más tarde",
                                    confirmButtonText: "Aceptar",
                                    confirmButtonColor: "#58ace4",
                                    allowOutsideClick: false,
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.cleanInputs();
                                    }
                                });
                            }
                        });
                } catch (error) {
                    console.error("Error en la solicitud:", error);
                }
            }
        },
    },

    watch: {
        tel(val) {
            val != ""
                ? (this.isTelValid = this.RegTel.test(val))
                : (this.isTelValid = true);
        },

        email(val) {
            val != ""
                ? (this.isEmailValid = this.RegEmail.test(val))
                : (this.isEmailValid = true);
        }
    },
});

contact_app.mount("#main");
