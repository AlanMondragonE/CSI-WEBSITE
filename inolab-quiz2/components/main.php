<body>
    <div class="container d-flex align-items-center justify-content-center mx-auto" style=" max-width: 100%; height: 35vh; background-image: url('img/bgImg00.jpg'); background-size: cover; background-position: center;">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h4 class="text-light">ENCUESTA DE SATISFACIÓN</h4>
            </div>
            <div class="col-12 text-center mt-2">
                <img src="img/logoInolabEncuesta.png" alt="Inolab Logo" style="width: 180px; height: auto;">
            </div>
            <div class="col-12 text-center mt-3">
                <p class="text-light">SELECCIONE LA OPCIÓN QUE MEJOR DESCRIBA SU OPINIÓN SOBRE NUESTROS SERVICIOS</p>
            </div>
        </div>
    </div>
    <div id="quiz">
        <section>
            <div class="cointainer d-flex align-items-center justify-content-center">
                <div class="col-10 mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <div v-for="(pregunta, index) in preguntas" :key="index" v-show="index === preguntaActual">
                                <div class="col-12 p-2">
                                    <h4 class="text-center text-secondary" style="margin-bottom: 0;">{{ pregunta.section }}</h4>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-3 mt-2">
                                            <div class="linea"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-3">
                                    <p class="text-center" style="margin-bottom: 0; font-size:17px;">{{ pregunta.texto }}</sp>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-2">
                                        <div class="col-3 text-center" v-for="(respuesta, i) in pregunta.respuestas" :key="i" v-if="pregunta.tipo === 'radio'">
                                            <div class="p-2">
                                                <input class="form-check-input" type="radio" :name="'pregunta' + index" :id="'inlineRadio' + i" :value="respuesta" @change="seleccionarRespuesta(index, respuesta)">
                                                <label class="form-check-label">{{ respuesta }}</label>
                                            </div>
                                        </div>
                                        <div class="col-6" v-if="pregunta.observaciones">
                                            <input type="text" class="form-control" placeholder="Observaciones" v-model="pregunta.respuestaInput">
                                        </div>
                                        <div class="col-12" v-if="pregunta.final">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Deja un comentario aquí" id="floatingTextarea2" style="height: 100px" rows="4" v-model="preguntas[12].respuestaInput"></textarea>
                                                <label for="floatingTextarea2">Comentarios</label>
                                            </div>
                                        </div>
                                        <div class="col-12" v-if="pregunta.sendQuiz">
                                            <div class="d-flex justify-content-end">
                                                <div class="col-3 text-end mt-2">
                                                    <button type="button" class="btn btn-primary rounded-pill" @click.prevent="sendForm()">Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center" v-if="pregunta.nextQuestion">
                                            <div class="col-3 text-center mt-2">
                                                <button style="font-size: 16px;" type="button" class="btn btn-outline-primary btn-sm w-50" @click.prevent="siguientePregunta()">Siguiente</button>
                                            </div>
                                        </div>
                                        <div class="col-12" v-if="error">
                                            <p class="text-danger">{{ error }}</p>
                                        </div>
                                        <div class="col-12 mt-3 mb-3 d-flex justify-content-center">
                                            <div class="col-6">
                                                <div class="progress" role="progressbar" aria-valuenow="progreso" aria-valuemin="0" aria-valuemax="preguntas.length" style="height: 10px;">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" :style="{ width: (progreso / preguntas.length) * 100 + '%' }">
                                                        <span>{{ Math.round((progreso / preguntas.length) * 100) }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>