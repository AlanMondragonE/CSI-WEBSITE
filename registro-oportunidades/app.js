/**
 * @author José Armando Hernández Salamanca
 * @description Formulario de registro de oportunidades
 * @module Contacto
 */

const { createApp, nextTick } = Vue;

const contact_app = createApp({
    data() {
        return {
            channel: 0,
            name: "",
            email: "",
            tel: "",
            company: "",
            charge: "",
            message: "",
            comments: "",
            assigments: [
                {
                    title: "CIENCIAS DE LA SEPARACIÓN",
                    products: [
                        {
                            title: "Espectrómetros de Masas",
                            selected: false,
                            brands: ["SCIEX"],
                        },
                        {
                            title: "Electroforesis Capilar",
                            selected: false,
                            brands: ["SCIEX"],
                        },
                        {
                            title: "LS13320XR (Tamaño de Partícula)",
                            selected: false,
                            brands: ["BECKMAN COULTER"],
                        },
                        {
                            title: "Vi-CELL BLU (Viabilidad Celular)",
                            selected: false,
                            brands: ["BECKMAN COULTER"],
                        },
                        {
                            title: "Conteo de Partículas (BECKMAN COULTER)",
                            selected: false,
                            brands: ["BECKMAN COULTER"],
                        },
                        {
                            title: "Centrífugas",
                            selected: false,
                            brands: ["BECKMAN COULTER"],
                        },
                    ],
                },
                {
                    title: "BIOTECNOLOGÍA",
                    products: [
                        {
                            title: "Biorreactores",
                            selected: false,
                            brands: ["CYTIVA", "BICO"],
                        },
                        {
                            title: "Medios de cultivo",
                            selected: false,
                            brands: ["CYTIVA"],
                        },
                        {
                            title: "Sistema de mezclado",
                            selected: false,
                            brands: ["CYTIVA"],
                        },
                        {
                            title: "Sistema de filtración",
                            selected: false,
                            brands: ["CYTIVA"],
                        },
                        {
                            title: "ÄKTA (Purificación de proteínas)",
                            selected: false,
                            brands: ["CYTIVA"],
                        },
                        {
                            title: "Citómetros de flujo",
                            selected: false,
                            brands: ["BECKMAN COULTER"],
                        },
                        {
                            title: "Inmunoensayos",
                            selected: false,
                            brands: ["MOLECULAR DEVICES"],
                        },
                        {
                            title: "Imagenología in vitro",
                            selected: false,
                            brands: ["MOLECULAR DEVICES"],
                        },
                        {
                            title: "Manipuladores de líquidos",
                            selected: false,
                            brands: ["BICO"],
                        },
                        {
                            title: "Dosificadores de células/agregados",
                            selected: false,
                            brands: ["BICO"],
                        },
                    ],
                },
                {
                    title: "BIOLOGÍA MOLECULAR",
                    products: [
                        {
                            title: "Lectores de microplacas",
                            selected: false,
                            brands: ["MOLECULAR DEVICES"],
                        },
                        {
                            title: "Microarreglos (Micromatrices)",
                            selected: false,
                            brands: ["MOLECULAR DEVICES", "BICO"],
                        },
                        {
                            title: "PCR",
                            selected: false,
                            brands: ["ANALYTIK JENA"],
                        },
                        {
                            title: "Estudios genómicos",
                            selected: false,
                            brands: ["BECKMAN COULTER"],
                        },
                        {
                            title: "Extracción de DNA/RNA",
                            selected: false,
                            brands: ["ANALYTIK JENA"],
                        },
                        {
                            title: "Immunospot",
                            selected: false,
                            brands: ["IMMUNOSPOT"],
                        },
                    ],
                },
                {
                    title: "ESPECIALIDADES",
                    products: [
                        {
                            title: "Agitadores",
                            selected: false,
                            brands: ["EDMUND BÜHLER"],
                        },
                        {
                            title: "Tituladores",
                            selected: false,
                            brands: ["HANNA"],
                        },
                        {
                            title: "Electrofisiología",
                            selected: false,
                            brands: ["MOLECULAR DEVICES"],
                        },
                        {
                            title: "Cabinas de PCR",
                            selected: false,
                            brands: ["TOP AIR"],
                        },
                        {
                            title: "Cabinas de bioseguridad",
                            selected: false,
                            brands: ["TOP AIR"],
                        },
                        {
                            title: "Mobiliario de laboratorio",
                            selected: false,
                            brands: ["TOP AIR"],
                        },
                        {
                            title: "Campanas extractoras",
                            selected: false,
                            brands: ["TOP AIR"],
                        },
                        {
                            title: "Campanas de flujo laminar",
                            selected: false,
                            brands: ["TOP AIR"],
                        },
                    ],
                },
                {
                    title: "TEMPERATURA",
                    products: [
                        {
                            title: "Refrigeradores",
                            selected: false,
                            brands: ["MELING"],
                        },
                        {
                            title: "Congeladores",
                            selected: false,
                            brands: ["MELING"],
                        },
                        {
                            title: "Cuartos fríos",
                            selected: false,
                            brands: ["MELING"],
                        },
                        {
                            title: "Ultracongeladores",
                            selected: false,
                            brands: ["BINDER"],
                        },
                        {
                            title: "Cámaras climáticas",
                            selected: false,
                            brands: ["BINDER"],
                        },
                        {
                            title: "Cámaras de crecimiento",
                            selected: false,
                            brands: ["BINDER"],
                        },
                        {
                            title: "Incubadoras",
                            selected: false,
                            brands: ["BINDER"],
                        },
                        {
                            title: "Hornos de secado",
                            selected: false,
                            brands: ["BINDER"],
                        },
                    ],
                },
            ],
            infoToSend: [],
            // emailsToSend: ['ventas@inolab.com', 'aarley@inolab.com', 'abelsanchez@inolab.com', 'ale_huazo@hotmail.com', 'marketing.contacto@inolab.com'],
            emailsToSend: ["ricardocarrillo@inolab.com"],
            RegEmail: /^\w+([\.+\-]?\w+)*@\w+([\.+\-]*\w+)*(\.\w{2,63})+$/,
            RegTel: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,
            isTelValid: false,
            emptyFields: false,
            regions: {
                occident: [
                    "Michoacan",
                    "Jalisco",
                    "Colima",
                    "Aguascalientes",
                    "Nayarit",
                    "Zacatecas",
                    "Durango",
                    "Sinaloa",
                    "Chihuahua",
                    "Sonora",
                    "Baja California",
                    "Baja California Sur",
                ],
                center: [
                    "Yucatan",
                    "Quintana Roo",
                    "Campeche",
                    "Chiapas",
                    "Tabasco",
                    "Oaxaca",
                    "Guerrero",
                    "Puebla",
                    "Veracruz",
                    "Tlaxcala",
                    "Ciudad de Mexico",
                    "Morelos",
                    "Hidalgo",
                    "Querétaro",
                    "San Luis Potosi",
                    "Tamaulipas",
                    "Nuevo Leon",
                    "Coahuila",
                ],
            },
            currentRegion: "center",
            region: "",
        };
    },

    created() {
        this.getRegion();
    },

    mounted() {},

    computed: {
        invalidTel() {
            return !this.isTelValid && this.tel != ""
                ? "Por favor, ingresa un número válido"
                : "";
        },

        emptyInputs() {
            return this.emptyFields
                ? "No se han ingresado todos los datos, verifique su información"
                : "";
        },

        getSelectedProducts() {
            let selected = [];
            this.assigments.forEach((line, indexA) => {
                line.products.forEach((product, indexP) => {
                    if (product.selected) {
                        selected.push({
                            indexA: indexA,
                            indexP: indexP,
                            title: product.title,
                            selected: product.selected,
                        });
                    }
                });
            });

            return selected;
        },

        getInterests() {
            let interestsSelected = [];

            this.infoToSend.forEach((interest) => {
                interestsSelected.push(interest.title);
            });

            return interestsSelected.join(", ");
        },
    },

    methods: {
        cleanInputs() {
            this.name = "";
            this.tel = "";
            this.email = "";
            this.company = "";
            this.charge = "";
            this.message = "";
            this.channel = 0;
            this.comments = "";
            this.isTelValid = false;
            this.emptyFields = false;
            this.infoToSend = [];
            this.assigments.forEach(({ products }) =>
                products.forEach((product) => (product.selected = false))
            );
        },

        validateData(...data) {
            return data.some((input) => input.length == 0 || input == "");
        },

        getChannel() {
            let setChannel = "";
            switch (this.channel) {
                case 1:
                    setChannel = "WhatsApp";
                    break;
                case 2:
                    setChannel = "Ecommerce";
                    break;
                case 3:
                    setChannel = "Correo Electrónico";
                    break;
                case 4:
                    setChannel = "Expo/Conferencia";
                    break;
                case 5:
                    setChannel = "CompraNet";
                    break;
                case 6:
                    setChannel = "Directorio Industrial";
                    break;
                default:
                    setChannel = "";
                    break;
            }
            return setChannel;
        },


        async getRegion() {
            await fetch("https://freeipapi.com/api/json", {
                method: "GET",
            })
                .then((response) => response.json())
                .then((data) => {
                    const { regionName } = data;
                    console.log(`Usted esta en: ${regionName}`);
                    this.region = regionName;

                    if (this.regions.occident.includes(regionName)) {
                        this.currentRegion = "occident";
                    } else {
                        this.currentRegion = "center";
                    }
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        setStatusProduct(status, indexA, indexP) {
            this.assigments[indexA].products[indexP].selected = !status;

            let unSelected = [];

            this.assigments.forEach((assigments) => {
                assigments.products.forEach(({ title, selected, brands }) => {
                    if (selected) {
                        this.infoToSend.push({
                            title: title + " (" + brands.join(", ") + ")",
                        });
                    } else {
                        unSelected.push({
                            title: title + " (" + brands.join(", ") + ")",
                        });
                    }
                });
            });

            const hash = {};
            this.infoToSend = this.infoToSend.filter((o) =>
                hash[o.title] ? false : (hash[o.title] = true)
            );

            this.infoToSend.forEach((product, indexProduct) => {
                unSelected.forEach((item) => {
                    if (item.title === product.title) {
                        this.infoToSend.splice(indexProduct, 1);
                    }
                });
            });

            this.emailsToSend = [...new Set(this.emailsToSend)];
        },

        sendForm() {
            if (
                this.validateData(
                    this.name,
                    this.tel,
                    this.email,
                    this.company,
                    this.message
                )
            ) {
                Swal.fire({
                    title: "Campos Vacíos",
                    text: "Verifique la información proporcionada",
                    confirmButtonText: "Aceptar",
                    confirmButtonColor: "#58ace4",
                });

                this.emptyFields = true;

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

            const parsedChannel = this.getChannel();

            if (parsedChannel === "") {
                Swal.fire({
                    title: "Selecciona un canal de contacto",
                    text: "Selecciona el canal antes de enviar el formulario.",
                    confirmButtonText: "Aceptar",
                    confirmButtonColor: "#58ace4",
                });

                return;
            }

            // if (this.getSelectedProducts.length == 0) {

            //     Swal.fire({
            //         title: 'Intereses',
            //         text: 'Selecciona al menos un equipo y/o tecnología para enviar el formulario.',
            //         confirmButtonText: 'Aceptar',
            //         confirmButtonColor: '#58ace4',
            //     });

            //     this.emptyFields = true;

            //     return;
            // }

            if (this.currentRegion === "occident") {
                // this.emailsToSend = ['ventas@inolab.com', 'aarley@inolab.com', 'abelsanchez@inolab.com', 'ale_huazo@hotmail.com', 'marketing.contacto@inolab.com'];
                this.emailsToSend = ["ricardocarrillo@inolab.com"];
            }

            this.emptyFields = false;

            Swal.fire({
                title: "Registrando oportunidad",
                html: "Registrando oportunidad, por favor espere...",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            const obj = {
                name: this.name,
                tel: this.tel,
                email: this.email,
                company: this.company,
                charge: this.charge
                    ? this.charge
                    : "No se proporcionó el puesto",
                message: this.message,
                captcha: 1,
                emails: this.emailsToSend.join(","),
                interests:
                    this.getSelectedProducts.length == 0
                        ? "No se seleccionaron intereses"
                        : this.getInterests,
                comments: this.comments
                    ? this.comments
                    : "No se proporcionaron comentarios",
                channel: parsedChannel,
                region: this.region,
            };

            const config = {
                method: "POST",
                header: { "Content-Type": "application/json" },
                body: JSON.stringify(obj),
            };

            fetch("../website-assets/php/sendInfo.php", config)
                .then((response) => response.json())
                .then((response) => {
                    const { status } = response;

                    if (status == 200) {
                        Swal.fire({
                            icon: "success",
                            title: "Oportunidad registrada",
                            text: "Contacto registrado correctamente",
                            confirmButtonText: "Aceptar",
                            confirmButtonColor: "#58ace4",
                            allowOutsideClick: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.cleanInputs();
                                window.location.reload()
                                return;
                            }
                        });

                        this.channel = 0;
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
                                window.location.reload()
                                return;
                            }
                        });
                    }
                });
        },
    },

    watch: {
        tel(val) {
            val != ""
                ? (this.isTelValid = this.RegTel.test(val))
                : (this.isTelValid = true);
        },
    },
});

contact_app.mount("#contact-form");
