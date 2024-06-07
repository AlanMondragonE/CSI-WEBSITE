const { createApp, nextTick } = Vue;

const quiz_app = createApp({

    data() {
        return {


            progreso: 0,

            preguntaActual: 0,

            seleccion: null,

            error: null,

            jsonRespuestas: null,

            preguntas: [

                { id: 1, section: 'General', texto: 'La atención prestada por su asesor comercial fue:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 2, section: 'General', texto: 'El tiempo de respuesta a su cotización fue:', respuestas: ['Excelente', 'Bueno', 'Regular', ' Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 3, section: 'Programación', texto: 'La Coordinación de su servicio fue:', respuestas: ['Excelente', 'Bueno', 'Regular', ' Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 4, section: 'Programación', texto: 'El tiempo de respuesta para la realización de su servicio fue:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 5, section: 'Programación', texto: 'El servicio que recibió en sus instalaciones fue:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 6, section: 'Soporte Técnico', texto: 'El conocimiento técnico que demostró el ingeniero de servicio fue:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 7, section: 'Soporte Técnico', texto: 'El ingeniero de servicio siguió las políticas de su empresa durante el servicio de manera:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 8, section: 'Soporte Técnico', texto: 'El ingeniero de servicio trabajo con limpieza y orden:', respuestas: ['Si', 'No',], tipo: 'radio', columnas: 12, observaciones: true, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 9, section: 'Soporte Técnico', texto: 'El servicio se realizó de acuerdo a los requerimientos establecidos:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 10, section: 'Documentación', texto: 'La calidad y el contenido de sus informes es:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 11, section: 'Documentación', texto: '¿La emisión y entrega de su factura se realiza en tiempo?', respuestas: ['Si', 'No'], tipo: 'radio', columnas: 12, observaciones: true, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 12, section: 'Documentación', texto: '¿Valore su satisfacción general con nuestro servicio:', respuestas: ['Excelente', 'Bueno', 'Regular', 'Pesimo'], tipo: 'radio', columnas: 12, observaciones: false, final: false, respuestaInput: '', sendQuiz: false, nextQuestion: true },
                { id: 13, section: 'General', texto: 'Ayúdenos a mejorar nuestro servicio, proporcione las aéreas de oportunidad.', respuestas: [], tipo: 'radio', columnas: 12, observaciones: false, final: true, respuestaInput: '', sendQuiz: true, nextQuestion: false },

            ],

            respuestas: {},

            clientId: null,
        }
    },

    mounted() {

        // console.log(id);

        // let id = urlParams.get('idClient');
       
        const parameters = window.location.search;
        // const url = window.location.href;
        // history.pushState({}, url);

        // const idClient = urlParams.get('idClient');

        // console.log(id);
        // console.log(url);
        console.log(parameters);
    },

    computed: {

    },

    methods: {


        seleccionarRespuesta(index, respuesta) {
            this.seleccion = respuesta;
            this.error = null;
        },

        siguientePregunta() {
            if (this.seleccion !== null) {
                this.responder(this.preguntaActual, this.seleccion);
                this.preguntaActual++;
                this.seleccion = null;
            } else {
                this.error = 'Por favor, selecciona una opción antes de continuar.';
            }
        },

        responder(index, respuesta) {
            this.respuestas[this.preguntas[index].id] = respuesta;
            if (this.preguntas[index].observaciones) {
                this.respuestas[this.preguntas[index].id + ' (Observaciones)'] = this.preguntas[index].respuestaInput;
            }

            this.progreso++;

            this.jsonRespuestas = JSON.stringify(this.respuestas);
            console.log('JSON Respuestas:', this.jsonRespuestas);
        },

        sendForm() {

            Swal.fire({
                title: "Enviando Encuesta...",
                html: "Enviado la encuesta, por favor espere...",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            let respuestas = JSON.parse(this.jsonRespuestas);
            let formData = {};
            for (let pregunta in respuestas) {
                formData[pregunta] = respuestas[pregunta] ? respuestas[pregunta] : 'No se proporcionó una respuesta';
            }

            formData['13 (Comentarios)'] = this.preguntas[12].respuestaInput;

            console.log('Form Data:', formData);


            // Crear un objeto con los datos del formulario
            const formsData = {
                q1: this.respuestas[1],
                q2: this.respuestas[2],
                q3: this.respuestas[3],
                q4: this.respuestas[4],
                q5: this.respuestas[5],
                q6: this.respuestas[6],
                q7: this.respuestas[7],
                q8: this.respuestas[8],
                q9: this.respuestas[8 + ' (Observaciones)'],
                q10: this.respuestas[9],
                q11: this.respuestas[10],
                q12: this.respuestas[11],
                q13: this.respuestas[11 + ' (Observaciones)'],
                q14: this.respuestas[12],
                q15: this.preguntas[12].respuestaInput,
            };

            console.log('Form Datas:', formsData);

            try {
                const config = {
                    method: "POST",
                    header: { "Content-Type": "application/json" },
                    body: JSON.stringify(formsData),
                };

                fetch("/inolab-website/website-assets/php/register_quiz.php", config)
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

        }

    },

    watch: {

    }
});

quiz_app.mount('#quiz')
