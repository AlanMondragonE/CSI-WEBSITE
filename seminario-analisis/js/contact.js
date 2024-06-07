// nombre_del_archivo.js

const { createApp, nextTick } = Vue;

const contact_app = createApp({
    data() {
        return {
            name: "",
            email: "",
            tel: "",
            company: "",
            friends: {
                selected: false,
                friendName: "",
                friendEmail: "",
            },

            sample: {
                selected: false,
                sampleText: "",
            },

            infoToSend: [],
            RegEmail: /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
            RegTel: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,
            isEmailValid: false,
            isEmailValid2: false,
            isTelValid: false,
            emptyFields: false,
            emptyFields2: false,
            emptyFields3: false,
            sections: [
                {
                    id: "secc-1",
                    isActive: false,
                    icon: "bi bi-chevron-down",
                    action: "Ver más...",
                },
                {
                    id: "secc-2",
                    isActive: false,
                    icon: "bi bi-chevron-down",
                    action: "Ver más...",
                },
            ],
        };
    },

    mounted() {
        this.initPopover();
    },

    computed: {
        invalidTel() {
            return !this.isTelValid && this.tel != ""
                ? "Por favor, ingresa un número válido"
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

        emptyInputs2() {
            return this.emptyFields2
                ? "No se han ingresado todos los datos, verifique su información"
                : "";
        },

        emptyInputs3() {
            return this.emptyFields3
                ? "No se han ingresado todos los datos, verifique su información"
                : "";
        },

        invalidEmail2() {
            return !this.isEmailValid2 && this.friends.friendEmail != ""
                ? "Por favor, ingresa un correo válido"
                : "";
        },
    },

    methods: {
        cleanInputs() {
            this.name = "";
            this.tel = "";
            this.email = "";
            this.company = "";
            this.message = "";
            this.isEmailValid2 = false;
            this.isEmailValid = false;
            this.isTelValid = false;
            this.emptyFields = false;
            this.emptyFields2 = false;
            this.emptyFields3 = false;
            this.friends.selected = false;
            this.friends.friendName = "";
            this.friends.friendEmail = "";
            this.infoToSend = [];
            this.assigments.forEach(({ products }) =>
                products.forEach((product) => (product.selected = false))
            );
            grecaptcha.reset();
            this.isExpanded = false;
            this.sample.selected = false;
            this.sample.sampleText = "";
        },

        validateData(...data) {
            return data.some((input) => input.length == 0 || input == "");
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

        toggleButton(index) {
            this.sections[index].isActive = !this.sections[index].isActive;
            this.sections[index].icon = this.sections[index].isActive
                ? "bi bi-chevron-up"
                : "bi bi-chevron-down";
            this.sections[index].action = this.sections[index].isActive
                ? "Ver menos..."
                : "Ver más...";
        },

        sendForm() {
            if (
                this.validateData(this.name, this.tel, this.email, this.company)
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
                if (
                    this.sample.selected &&
                    this.validateData(this.sample.sampleText)
                ) {
                    Swal.fire({
                        title: "Campo Vacío",
                        text: "Tiene que llenar el campo",
                        confirmButtonText: "Aceptar",
                        confirmButtonColor: "#58ace4",
                    });

                    this.emptyFields2 = true;

                    return;
                }

                if (this.friends.selected) {
                    if (
                        this.validateData(
                            this.friends.friendName,
                            this.friends.friendEmail
                        )
                    ) {
                        Swal.fire({
                            title: "Campo Vacío",
                            text: "Tiene que llenar el campos",
                            confirmButtonText: "Aceptar",
                            confirmButtonColor: "#58ace4",
                        });
                        this.emptyFields3 = true;
                        return;
                    } else {
                        if (!this.isEmailValid2) {
                            Swal.fire({
                                title: "Correo Inválido",
                                text: "Ingrese un correo válido por favor.",
                                confirmButtonText: "Aceptar",
                                confirmButtonColor: "#58ace4",
                            });
                            return;
                        }
                    }
                }

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
                    tel: this.tel,
                    company: this.company,
                    friendName: this.friends.friendName,
                    friendEmail: this.friends.friendEmail,
                    selectedSample: this.sample.selected
                        ? "Requiere Muestra"
                        : "No requiere Muestra",
                    sampleText: this.sample.sampleText
                        ? this.sample.sampleText
                        : "No aplica",
                };

                try {
                    const config = {
                        method: "POST",
                        header: { "Content-Type": "application/json" },
                        body: JSON.stringify(formData),
                    };

                    fetch("/website-assets/php/webinar_expo.php", config)
                        .then((response) => response.json())
                        .then((response) => {
                            const { status } = response;

                            if (status == 200) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Formulario ExpoFarma",
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
        },

        "friends.friendEmail"(val) {
            val != ""
                ? (this.isEmailValid2 = this.RegEmail.test(val))
                : (this.isEmailValid2 = true);
        },

        channel(val) {
            if (val == "attention") {
                this.emailsToSend[0] = "atencionclientes@inolab.com";
            } else {
                this.emailsToSend[0] = "ventas@inolab.com";
            }
        },
    },
});

contact_app.mount("#contact");
