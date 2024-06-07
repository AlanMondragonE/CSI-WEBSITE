const { createApp, nextTick } = Vue;

const dataBaseApp = Vue.createApp({
    data() {
        return {
            data: [],
            searchInput: '',
            tarjetasPorPagina: 12,
            paginaActual: 1,
            paginasVisibles: []
        }
    },

    created() {
        this.getData();
        this.actualizarPaginasVisibles();
    },

    computed: {
        search() {
            return this.data.filter((item) => {
                return item.client_name.toLowerCase().includes(this.searchInput.toLowerCase())
            });
        },
        numeroDePaginas() {
            return Math.ceil(this.search.length / this.tarjetasPorPagina);
        },
        tarjetasPaginadas() {
            let inicio = (this.paginaActual - 1) * this.tarjetasPorPagina;
            let fin = inicio + this.tarjetasPorPagina;
            return this.search.slice(inicio, fin);
        },
    },

    methods: {
        async getData() {
            try {
                const response = await fetch('../website-assets/php/client_quiz.php', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });

                const results = await response.json();
                this.data = results;

                console.log(results);

                this.actualizarPaginasVisibles();
            } catch (e) {
                console.log('Error al momento de obtener los datos');
                console.log(e);
            }

        },


        sendForm(client_id) {

            let index = this.data.findIndex(client => client.client_id === client_id);

            Swal.fire({
                title: "Enviando Encuesta...",
                html: "Enviado la encuesta, por favor espere...",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            // Crear un objeto con los datos del formulario
            const formsData = {
                id: this.data[index].client_id,
                name: this.data[index].client_name,
                lastName: this.data[index].client_lastName,
                date: this.data[index].client_date,
                folio: this.data[index].client_folio,
                email: this.data[index].client_email,
            };

            console.log('Form Datas:', formsData);

            try {
                const config = {
                    method: "POST",
                    header: { "Content-Type": "application/json" },
                    body: JSON.stringify(formsData),
                };

                fetch("/inolab-website/website-assets/php/send_quiz_email.php", config)
                    .then((response) => response.json())
                    .then((response) => {
                        const { status } = response;

                        if (status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "ENCUESTA DE SATISFACIÓN",
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

        },

        exportToExcel() {

            const wb = window.XLSX.utils.book_new();

            const ws = window.XLSX.utils.json_to_sheet(this.data);

            window.XLSX.utils.book_append_sheet(wb, ws, 'Expofarma 2024');

            const wbout = window.XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });

            const buf = new ArrayBuffer(wbout.length);
            const view = new Uint8Array(buf);
            for (let i = 0; i < wbout.length; i++) view[i] = wbout.charCodeAt(i) & 0xFF;
            window.saveAs(new Blob([buf], { type: 'application/octet-stream' }), 'Registro Prospectos Expofarma 2024.xlsx');
        },

        cambiarPagina(numero) {
            this.paginaActual = numero;
            this.actualizarPaginasVisibles();
        },

        actualizarPaginasVisibles() {
            const numPaginas = this.numeroDePaginas;
            let inicio = Math.max(this.paginaActual - 2, 1);
            let fin = Math.min(inicio + 4, numPaginas);

            // Ajustar el inicio y el fin si estamos en los extremos de la paginación visible
            if (this.paginaActual === 1) {
                inicio = 1;
                fin = Math.min(numPaginas, 5);
            } else if (this.paginaActual === numPaginas) {
                fin = numPaginas;
                inicio = Math.max(numPaginas - 4, 1);
            }

            this.paginasVisibles = [];
            for (let i = inicio; i <= fin; i++) {
                this.paginasVisibles.push(i);
            }
        },
    },

    watch: {
        paginaActual() {
            this.actualizarPaginasVisibles();
        },
    },
});

dataBaseApp.mount('#dataBaseApp');
