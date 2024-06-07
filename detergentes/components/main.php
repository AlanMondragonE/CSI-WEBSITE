<!-- El main data title es para el nombre de la pagina en la ventana del browser -->
<main data-title="Detergentes" class="mt-3" id="app">
    <div class="modal inolab-modal" id="modal-detail" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1">
            <div class="modal__container" role="dialog" aria-modal="true" style="max-width: 100% !important;">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        {{ getSelectedCategory }}
                    </h2>
                    <button class="modal__close" @click="closeDetail()"><i class="fas fa-times-circle"></i></button>
                </header>
                <main class="modal__content">

                    <div class="e-grid-12 mobile-1 tablet-1">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img :src="getSelectedIMG" style="width: 300px; height: 200px">
                        </div>
                        <div class="col-8">
                            <div class="col-12 d-flex justify-content-center">
                                <p class="text">{{ getSelectedDescription }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center">

                                <ul class="list-group-primary">

                                    <li class="text" v-if="getSelectedSpecifications.formulacion">
                                        <b>Formulación:</b>
                                        {{ getSelectedSpecifications.formulacion }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.compatibilidad">
                                        <b>Compatibilidad:</b>
                                        {{ getSelectedSpecifications.compatibilidad }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.concentracion">
                                        <b>Concentracion:</b>
                                        {{ getSelectedSpecifications.concentracion }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.presentacion">
                                        <b>Presentación:</b>
                                        {{ getSelectedSpecifications.presentacion }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.tipo">
                                        <b>Actividad tipo:</b>
                                        {{ getSelectedSpecifications.tipo }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.tiempo">
                                        <b>Tiempo de contacto:</b>
                                        {{ getSelectedSpecifications.tiempo }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.volumenes">
                                        <b>Volúmenes:</b>
                                        {{ getSelectedSpecifications.volumenes }}
                                    </li>
                                    <li class="text" v-if="getSelectedSpecifications.flujo">
                                        <b>Flujo:</b>
                                        {{ getSelectedSpecifications.flujo }}
                                    </li>
                                </ul>

                            </div>
                            <a style="text-decoration: none;" class="btn-primary" v-if="getSelectedPDF" :href="getSelectedPDF" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-file-pdf"></i> Ficha Técnica</a>
                        </div>
                    </div>

                </main>
                <footer class="modal__footer">
                </footer>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <h1 class="subtitle-2 text-center">Productos innovadores para la limpieza y desinfección de áreas, en cumplimiento con NORMATIVAS ISO (1-9).</h1>
    </div>


    <div class="container show-only-desktop">


        <div class="d-flex">

            <div @click="categorySelected = 1" class="popover mr-2" style="width: 250px; padding: 15px; font-size: 16px; cursor: pointer" :style="{ 'background-color': categorySelected == 1 ? '#25B4B3' : '' }">
                <p> Todos los productos </p>
            </div>


            <div v-for="({ id, name }, index) in categories.slice(1)" @click="categorySelected = id" class="popover mr-2" style="width: auto; padding: 15px; font-size: 16px; cursor: pointer" :style="{ 'background-color': categorySelected == id ? '#25B4B3' : '' }">
                <p> Filtrar por: {{ name }}</p>
                <div class="popover-arrow animate__animated animate__fadeIn" v-if="categorySelected === id" :style="{ 'border-bottom': categorySelected == id ? '20px solid #25B4B3' : '' }"></div>
            </div>


        </div>
    </div>

    <section class="subcategories show-only-desktop" v-if="categorySelected > 1">
        <div class="container d-flex align-items-center justify-content-center" style="height: auto">
            <div class="e-grid-12 mobile-2" style="margin-top: 20px;">
                <div class="col-3" v-for="({id, name, icon }) in getSelectedSubcategories.subcategories">
                    <button :class="subcategorySelected == id ? 'subcategory-active' : ''" class="subcategory mb-2 animate__animated animate__fadeIn" :key="id" @click="subcategorySelected = id"><img :src="'https://img.icons8.com/windows/32/' + (subcategorySelected == id ? '25b4b3' : '000000') + icon" class="mr-1" /> {{ name }}</button>
                </div>
            </div>
        </div>
    </section>

    <section class="accordion-filter container hidden-desktop">

        <div class="accordion__container">

            <div class="accordion__item">
                <header class="accordion__header" @click="categorySelected = 2">
                    <i class='bx bx-plus accordion__icon'></i>
                    <h3 class="accordion__title">Filtrar por Aplicación</h3>
                </header>

                <div class="accordion__content">
                    <button v-for="({id, name }) in getSelectedSubcategories.subcategories" class="subcategory-responsive ml-2 mb-2 animate__animated animate__fadeIn" :class="(categorySelected == 2 && subcategorySelected == id ) ? 'subcategory-responsive-active' : ''" :key="id" @click="selectResponsiveSubcategory(id)">{{ name }}</button>
                </div>
            </div>

            <div class="accordion__item">
                <header class="accordion__header" @click="categorySelected = 3">
                    <i class='bx bx-plus accordion__icon'></i>
                    <h3 class="accordion__title">Filtrar por Compatibilidad</h3>
                </header>

                <div class="accordion__content">
                    <button v-for="({id, name }) in getSelectedSubcategories.subcategories" class="subcategory-responsive ml-2 mb-2 animate__animated animate__fadeIn" :class="(categorySelected == 3 && subcategorySelected == id) ? 'subcategory-responsive-active' : ''" :key="id" @click="selectResponsiveSubcategory(id)">{{ name }}</button>
                </div>
            </div>

            <div class="accordion__item">
                <header class="accordion__header" @click="categorySelected = 4">
                    <i class='bx bx-plus accordion__icon'></i>
                    <h3 class="accordion__title">Filtrar por Formulación</h3>
                </header>

                <div class="accordion__content">
                    <button v-for="({id, name }) in getSelectedSubcategories.subcategories" class="subcategory-responsive ml-2 mb-2 animate__animated animate__fadeIn" :class="(categorySelected == 4 && subcategorySelected == id) ? 'subcategory-responsive-active' : ''" :key="id" @click="selectResponsiveSubcategory(id)"> {{ name }}</button>
                </div>
            </div>

        </div>
    </section>


    <div class="container" style="margin-top: 20px;" id="product-container">

        <div class="mb-2">
            <h4>Resultados:  </h4>
        </div>

        <div style="height: 40vh" v-if="isLoading">
        </div>

        <div class="e-grid-10 mb-3 mobile-1 tablet-2 desktop-5">
            <div v-if="!isLoading" class="col animate__animated animate__fadeIn" v-for="({ id, title, subtitle, description, img }) in getRows()">
                <div class="card item action" style="height: auto" @click="openDetail(id)">
                    <div class="card-header show-only-mobile" style="height: auto">
                        <img :src="img">
                    </div>
                    <div class="card-header show-only-desktop" style="height: 160px;">
                        <img :src="img">
                    </div>
                    <div class="card-body" style="height: 160px">
                        <h2 class="card-title">{{ title }}</h2>
                        <p class="card-text"><small>{{ subtitle }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="e-grid-10" v-if="!isLoading">
            <div class="col-10 d-flex justify-content-end mb-2">
                <div>
                    <button style="background-color: #25b4b3;" v-if="pages > 1" class="pagination-item mr-2" @click="goToPage(currentPage-1)"><i class="fa-solid fa-angle-left"></i> Anterior</button>

                    <span class="text show-only-desktop">Página: {{currentPage}} de {{ pages }} </span>

                    <button style="background-color: #25b4b3;" v-if="pages > 1" class="pagination-item ml-2" @click="goToPage(currentPage + 1)">Siguiente <i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>

</main>