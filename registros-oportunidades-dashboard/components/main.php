<body>
    <div id="dataBaseApp">
        <div class="container-fluid p-4">
            <div class="row mb-3">
                <div class="col-4 align-self-end">
                    <div class="position-relative">
                        <input class="form-control" type="search" placeholder="Buscar..." aria-label="Search" style="padding-left: 30px;">
                        <i class="position-absolute top-50 translate-middle-y bi bi-search" style="left: 10px;"></i>
                    </div>
                </div>
                <div class="col-2">
                </div>
                <div class="col-2 align-self-end">
                    <label for="fecha">Filtrar por fecha: </label>
                    <div class="d-flex justify-content-center">
                        <input class="form-control mt-2" type="text" name="daterange" id="daterange" style="font-size: 14px;">
                    </div>
                </div>
                <div class="col-2 align-self-end">
                    <div class="form-group text-start">
                        <label for="fecha">Filtrar por Marca:</label>
                        <div class="d-flex justify-content-center">
                            <select class="form-select" v-model="selectedCompany">
                                <option :value="null" disabled>Selecciona Marca</option>
                                <option v-for="(brand, index) in company[0].brands" :value="brand.title">{{ brand.title }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-2 align-self-end">
                    <div class="form-group text-start">
                        <label for="channel">Filtrar por Division:</label>
                        <div class="d-flex justify-content-center mt-2">
                            <select class="form-select" v-model="selectedDivision">
                                <option :value="null" disabled>Selecciona divison</option>
                                <option v-for="(division, index) in divisions" :value="division.title">{{ division.title }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <button type="button" class="btn btn-light btn-sm w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightAll" aria-controls="offcanvasExample">
                        <b style="color: green;"><i class="bi bi-sort-alpha-down mr-2"></i>
                            <span class="ml-3 mx-2 d-none d-sm-inline">Todos los filtros.</span></b>
                    </button>
                </div>
                <div class="col-2">
                    <button class="btn btn-sm btn-light text-danger fw-bold w-100"><i class="bi bi-trash3-fill fw-bold"></i> Borrar filtros</button>
                </div>
                <div class="col-2">
                    <button class="btn btn-sm btn-light text-primary fw-bold w-100" @click="showModal"><i class="bi bi-layout-three-columns fw-bold"></i> Personaliza Columnas</button>
                </div>
                <div class="col-2">
                </div>
                <div class="col-2">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive py-3">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: black;">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">No.</th>
                                    <th scope="col" v-show="selectedColumns.includes('Empresa')">Empresa/Institución</th>
                                    <th scope="col" v-show="selectedColumns.includes('Nombre')">Nombre</th>
                                    <th scope="col" v-show="selectedColumns.includes('Correo Electrónico')">Correo Electrónico</th>
                                    <th scope="col" v-show="selectedColumns.includes('Numero Telefónico')">Numero Telefónico</th>
                                    <th scope="col" v-show="selectedColumns.includes('Puesto')">Puesto</th>
                                    <th scope="col" v-show="selectedColumns.includes('Intereses')">Intereses</th>
                                    <th scope="col" v-show="selectedColumns.includes('Ubicación')">Ubicación</th>
                                    <th scope="col" v-show="selectedColumns.includes('Destinatario')">Destinatario</th>
                                    <th scope="col" v-show="selectedColumns.includes('Comentario')">Comentario</th>
                                    <th scope="col" v-show="selectedColumns.includes('Canal')">Canal</th>
                                    <th scope="col" v-show="selectedColumns.includes('Solicitud')">Solicitud</th>
                                    <th scope="col" v-show="selectedColumns.includes('Fecha')">Fecha</th>
                                    <th scope="col" v-show="selectedColumns.includes('Estatus')">Estatus</th>
                                    <th scope="col" v-show="selectedColumns.includes('Requerimiento')">Requerimiento</th>
                                    <th scope="col">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(contacto, index) in data" :key="index">
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-rounded btn-warning rounded-circle"><i class="bi bi-plus-lg"></i></button>
                                    </td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Empresa')">{{ contacto.ID_USUARIOS }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Empresa')">{{ contacto.EMPRESA }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Nombre')">{{ contacto.NOMBRE }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Correo Electrónico')">{{ contacto.CORREO }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Numero Telefónico')">{{ contacto.TELEFONO }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Puesto')">{{ contacto.PUESTO }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Intereses')">{{ contacto.INTERESES }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Ubicación')">{{ contacto.UBICACION }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Destinatario')">{{ contacto.DESTINATARIO }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Comentario')">{{ contacto.COMENTARIO }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Canal')">{{ contacto.CANAL }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Solicitud')">{{ contacto.SOLICITUD }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Fecha')">{{ contacto.FECHA }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Estatus')">{{ contacto.ESTATUS }}</td>
                                    <td class="text-start align-middle" v-show="selectedColumns.includes('Requerimiento')">{{ contacto.REQUERIMIENTO }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-dark rounded-circle" type="button" @click="showOffcanvas(data)">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- OffCanvas -->
        <div id="offcanvasRight" class="offcanvas w-50 offcanvas-end p-2" tabindex="-1" data-bs-backdrop="static">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form>
                    <div class="row mb-3">
                        <label for="nombre" class="col-12 col-form-label">Nombre:</label>
                        <div class="col-12">
                            <input type="text" id="nombre" class="form-control" v-model="selectedRow.title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-12 col-form-label">Correo Electrónico:</label>
                        <div class="col-12">
                            <input type="email" id="email" class="form-control" v-model="selectedRow.mail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-12 col-form-label">Número Telefónico:</label>
                        <div class="col-12">
                            <input type="tel" id="telefono" class="form-control" v-model="selectedRow.tel">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="empresa" class="col-12 col-form-label">Empresa:</label>
                        <div class="col-12">
                            <input type="text" id="empresa" class="form-control" v-model="selectedRow.company">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="medio" class="col-form-label">Medio:</label>
                        <div class="col-12">
                            <input type="text" id="medio" class="form-control" v-model="selectedRow.media">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="location" class="col-form-label">Ubicación:</label>
                        <div class="col-12">
                            <input type="text" id="location" class="form-control" v-model="selectedRow.location">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="interest" class="col-form-label">Intereses:</label>
                        <div class="col-12">
                            <div class="input-container">
                                <input type="search" class="form-control" v-model="searchTerm" @blur="hideList" @focus="showList" placeholder="Buscar...">
                                <ul v-if="showOptions && searchTerm && filteredOptions.length > 0" class="list-group autocomplete-list">
                                    <li class="list-group-item" v-for="option in filteredOptions" :key="option.id" @click="selectOption(option)">
                                        {{ option.name }}
                                    </li>
                                </ul>
                            </div>
                            <div class="selected-pills mt-3 d-flex flex-wrap gap-2">
                                <span class="badge bg-light text-dark pill position-relative border border-2" v-for="pill in selectedOptions" :key="pill.id">
                                    {{ pill.name }}
                                    <div @click="removePill(pill)" class="remove-icon position-absolute">
                                        <b>X</b>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="industry" class="col-form-label">Industria:</label>
                        <div class="col-12">
                            <div class="input-container">
                                <input class="form-control" class="form-control" v-model="searchIndustry" @blur="hideListIndustry" @focus="showListIndustry" placeholder="Buscar...">
                                <ul v-if="showIndustry && searchIndustry && filteredIndustry.length > 0" class="list-group autocomplete-list">
                                    <li class="list-group-item" v-for="option in filteredIndustry" :key="option.id" @click="selectedIndustryOption(option)">
                                        {{ option.name }}
                                    </li>
                                </ul>
                            </div>
                            <div class="selected-pills mt-3 d-flex flex-wrap gap-2">
                                <span class="badge bg-light text-dark pill position-relative border border-2" v-for="pill in selectedIndustry" :key="pill.id">
                                    {{ pill.name }}
                                    <div @click="removePillIndustry(pill)" class="remove-icon position-absolute">
                                        <b>X</b>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="bussinesActivity" class="col-12 col-form-label">Productos de la empresa:</label>
                        <div class="col-12">
                            <input type="text" id="bussinesActivity" class="form-control" v-model="selectedRow.bussinesActivity">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="bussinesActivity" class="col-12 col-form-label">¿Es cliente?</label>
                        <div class="col-12">
                            <select class="form-select" v-model="selectedOption" aria-label="Default select example">
                                <option value="0" disabled>No definido</option>
                                <option value="si">Si</option>
                                <option value="no">No</option>
                                <option value="perdido">Perdido</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea v-if="selectedOption === 'perdido'" class="form-control mt-2" placeholder="Especifique porque se perdió."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offcanvas-footer">
                <div class="container-fluid mb-3 text-start">
                    <button type="button" class="btn btn-success me-3" @click="saveChanges()">Guardar Cambios</button>
                </div>
            </div>
        </div>
        <!-- OffCanvas-->
        <!-- OffCanvas -->
        <div id="offcanvasRightAll" class="offcanvas offcanvas-start w-50 p-2" tabindex="-1">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Todos los filtros.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="col-12">
                    <p class="fw-bold">Representaciones (Marcas)</h6>
                    <div v-for="(company, indexA) in company" :key="indexA" class="w-100 mb-3">
                        <div class="row">
                            <div v-for="(brands, indexP) in company.brands" :key="indexP" class="col-6">
                                <label :for="'chk' + indexA + indexP" class="form-check-label">
                                    <input type="checkbox" :id="'chkBrands' + indexA + indexP" class="form-check-input" v-model="brands.selected">
                                    {{ brands.title }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h6 class="fw-bold">Categorias de Interes.</h6>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item" v-for="(assignment, indexA) in assigments" :key="indexA" class="w-100 mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="'#' + 'assignment' + indexA" aria-expanded="true" :aria-controls="'assignment' + indexA">
                                    <span class="badge rounded-pill bg-primary me-2">{{ countSelectedProducts(assignment.products) }}</span>
                                    {{ assignment.title }}
                                </button>
                            </h2>
                            <div :id="'assignment' + indexA" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div v-for="(product, indexP) in assignment.products" :key="indexP" class="col-6">
                                            <label :for="'chk' + indexA + indexP" class="form-check-label">
                                                <input type="checkbox" :id="'chkInterest' + indexA + indexP" class="form-check-input" v-model="product.selected">
                                                {{ product.title }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <p class="fw-bold">Lista de industrias.<span class="badge rounded-pill bg-primary ms-2">{{ selectedIndustries.length }}</span></p>
                    <div class="row">
                        <div class="col-auto" v-for="(industry, index) in optionsIndustry" :key="industry.id">
                            <button type="button" class="btn btn-sm rounded-pill m-1 border border-0" :class="{ 'btn-primary': isSelected(index), 'btn-dark': !isSelected(index) }" :style="{ backgroundColor: isSelected(index) ? industry.color : 'black', color: isSelected(index) ? 'white' : 'white' }" @click="toggleSelection(index)">
                                <i :class="industry.icon + ' me-1'"></i>{{ industry.name }}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <p class="fw-bold">Lista de Canales. <span class="badge rounded-pill bg-primary ms-2">{{ selectedChannels.length }}</span></p>
                    <div class="row">
                        <div class="col-auto" v-for="(channel, index) in optionsChannels" :key="channel.id">
                            <button type="button" class="btn btn-sm rounded-pill m-1 border border-0" :class="{ 'btn-primary': isSelectedChannel(index), 'btn-dark': !isSelectedChannel(index) }" :style="{ backgroundColor: isSelectedChannel(index) ? channel.color : 'black', color: isSelectedChannel(index) ? 'white' : 'white' }" @click="toggleSelectionChannel(index)">
                                <i :class="channel.icon + ' me-1'"></i>{{ channel.name }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas-->
        <!--MODAL-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Personaliza las Columnas.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 mt-3">
                            <p class="fw-bold">Columnas Seleccionadas <span class="badge rounded-pill bg-primary ms-2">{{ selectedColumns.length }}</span></p>
                            <div class="row">
                                <div v-for="(column, index) in columns" :key="column" class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" :id="column" :value="column" v-model="selectedColumns">
                                        <label class="form-check-label" :for="column">{{ column }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal-->
    </div>