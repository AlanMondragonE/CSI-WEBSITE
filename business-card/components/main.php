<div id="business-card">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-8 m-0 p-0">

                <div class="card business-card shadow">

                    <div class="business-card-header">
                        <div class="row">
                            <div class="col-6">
                                <img src="assets/img/logo-white.png" class="business-card-logo">
                            </div>
                            <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                                <p class="text-white fw-light mb-0 small">División</p>
                                <div class="w-100 d-flex justify-content-end">
                                    <div class="me-2">
                                        <i :class="card.divisionicon" class="text-white"></i>
                                    </div>
                                    <p class="fw-bold text-white">{{ card.division }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="business-card-photo shadow-sm">
                            <img :src="'./assets/img/photos/' + card.photo">
                        </div>
                    </div>

                    <div class="card-body business-card-body mt-4">

                        <div class="w-100 mt-5 text-center">
                            <h5 class="fw-bold">{{ card.name }}</h5>
                            <p class="fw-light">{{ card.area }}</p>
                        </div>

                        <div class="w-100 mt-2" v-if="isOwner">
                            <div class="row">
                                <div class="col-5 mx-auto">
                                    <div class="card bg-white border-0 rounded-3 mx-auto" id="qrCode" style="width: 120px; height: 120px; "></div>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 mt-4">
                            <div class="row d-flex justify-content-center">

                                <div class="col-12" v-if="isOwner">
                                    <p class="fw-light text-dark mb-0 fs-5"><i class="fa-solid fa-phone me-1"></i> {{ card.phone }}</p>
                                    <p class="fw-light text-dark mb-0 fs-5"><i class="fa-solid fa-envelope me-1"></i> {{ card.email }}</p>
                                </div>

                               <div class="col-10 mb-2" v-if="!isOwner">
                                    <button class="btn btn-light rounded-5 w-100" @click="openPhone()">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-phone fs-5 me-2"></i>
                                            </div>
                                
                                            <div class="col-10 d-flex justify-content-start">
                                                {{ card.phone }}
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                
                                <div class="col-10 mb-2" v-if="!isOwner">
                                    <button class="btn btn-light rounded-5 w-100" @click="openEmail()">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-envelope fs-5 me-2"></i>
                                            </div>
                                
                                            <div class="col-10 d-flex justify-content-start">
                                                {{ card.email }}
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                
                                <div class="col-10 mb-2" v-if="!isOwner">
                                    <button class="btn btn-light rounded-5 w-100" @click="openWhatsApp()">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-brands fa-whatsapp fw-bold fs-5 me-2"></i>
                                            </div>
                                
                                            <div class="col-10 d-flex justify-content-start">
                                                WhatsApp
                                            </div>
                                        </div>
                                    </button>
                                </div>

                                
                                <div class="col-10 mt-2 d-flex justify-content-center" v-if="!isOwner">
                                    <button class="btn btn-success w-75 mx-auto" @click="downloadVCard()">
                                        Guardar Contacto
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-footer business-card-footer">
                        <div class="row">
                            <div class="col-8 mx-auto">

                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-center">
                                            <a href="https://inolab.com/" target="_blank" class="text-white text-decoration-none text-light">www.inolab.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="row mt-0">
                                    <div class="col-4">
                                        <div class="card border-0 text-white mx-auto">
                                            <div class="card-body text-center">
                                                <i class="fa-brands fa-linkedin-in fs-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card border-0 text-white mx-auto">
                                            <div class="card-body text-center">
                                                <i class="fa-brands fa-youtube fs-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card border-0 text-white mx-auto">
                                            <div class="card-body text-center">
                                                <i class="fa-brands fa-facebook fs-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center mt-2">
                                <p class="small text-white fw-light" style="font-size: 10px;">
                                    <i class="fa-regular fa-seedling text-success me-2 fs-6"></i>Empresa Ecológicamente Responsable.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>