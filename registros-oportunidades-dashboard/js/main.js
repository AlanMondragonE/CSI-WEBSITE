const { createApp, nextTick, ref, watch } = Vue

const dataBaseApp = createApp({
    data() {
        return {

            selectedOption: '0',
            data: [],
            searchTerm: '',
            selectedOptions: [],
            selectedRow: {},
            showOptions: false,
            showIndustry: false,
            searchIndustry: '',
            selectedIndustry: [],
            selectedCompany: null,
            selectedDivision: null,
            selectedSecondChannel: null,
            selectedIndustries: [],
            selectedChannels: [],

            columns: ['Empresa', 'Nombre', 'Correo Electrónico', 'Numero Telefónico', 'Puesto', 'Intereses', 'Ubicación', 'Destinatario', 'Comentario', 'Canal', 'Solicitud', 'Fecha', 'Estatus', 'Requerimiento'],
            selectedColumns: ['Empresa', 'Nombre', 'Correo Electrónico', 'Numero Telefónico', 'Puesto', 'Intereses', 'Ubicación', 'Destinatario', 'Comentario', 'Canal', 'Solicitud', 'Fecha', 'Estatus', 'Requerimiento'],

            optionsList: [
                { id: 1, name: 'Espectrometos de masa' },
                { id: 2, name: 'Option 2' },
                { id: 3, name: 'Option 3' },
            ],

            divisions: [
                { title: 'Life Science' },
                { title: 'temperatura' }
            ],

            channelMap: {

                'Visitia': ['Visita Comercial', 'Visita Servicio Tecnico'],
                'Evento': ['Food Forum', 'Expo Farma'],
            },

            optionsChannels: [
                { id: 1, name: 'Visitia', color: '#007bff', icon: 'fa fa-truck' },
                { id: 2, name: 'WhatsApp', color: '#28a745', icon: 'fab fa-whatsapp' },
                { id: 3, name: 'Evento', color: '#dc3545', icon: 'fa fa-calendar-alt' },
                { id: 4, name: 'WebForm', color: '#ffc107', icon: 'fa fa-globe' },
                { id: 5, name: 'Email', color: '#17a2b8', icon: 'fa fa-envelope' },
                { id: 6, name: 'CompraNet', color: '#6610f2', icon: 'fa fa-credit-card' }
            ],

            optionsIndustry: [
                { id: 1, name: 'Metalmecánica', color: '#007bff', icon: 'fas fa-cogs' },
                { id: 2, name: 'Fertilizantes', color: '#28a745', icon: 'fas fa-seedling' },
                { id: 3, name: 'Química', color: '#dc3545', icon: 'fas fa-flask' },
                { id: 4, name: 'Materiales', color: '#ffc107', icon: 'fas fa-cubes' },
                { id: 5, name: 'Farmacia', color: '#17a2b8', icon: 'fas fa-pills' },
                { id: 6, name: 'Sector Salud', color: '#6610f2', icon: 'fas fa-hospital-alt' },
                { id: 7, name: 'Veterinaria', color: '#fd7e14', icon: 'fas fa-paw' },
                { id: 8, name: 'Dispositivos Médicos', color: '#20c997', icon: 'fas fa-medkit' },
                { id: 9, name: 'Distribuidor', color: '#6c757d', icon: 'fas fa-truck' },
            ],

            company: [
                {
                    title: 'Nuestras Representaciones',
                    brands: [
                        { title: 'SCIEX', selected: false },
                        { title: 'BECKMAN COULTER', selected: false },
                        { title: 'CYTIVA', selected: false },
                        { title: 'BICO', selected: false },
                        { title: 'MOLECULAR DEVICES', selected: false },
                        { title: 'ANALYTIK JENA', selected: false },
                        { title: 'IMMUNOSPOT', selected: false },
                        { title: 'EDMUND BÜHLER', selected: false },
                        { title: 'HANNA', selected: false },
                        { title: 'TOP AIR', selected: false },
                        { title: 'BMT', selected: false },
                        { title: 'BINDER', selected: false },
                    ]
                }
            ],
            assigments: [
                {
                    title: 'CIENCIAS DE LA SEPARACIÓN',
                    products: [
                        { title: 'Espectrómetros de Masas', selected: false },
                        { title: 'Electroforesis Capilar', selected: false },
                        { title: 'LS13320XR (Tamaño de Partícula)', selected: false },
                        { title: 'Vi-CELL BLU (Viabilidad Celular)', selected: false },
                        { title: 'Conteo de Partículas', selected: false },
                        { title: 'Centrífugas', selected: false }
                    ]
                },

                {
                    title: 'BIOTECNOLOGÍA',
                    products: [
                        { title: 'Biorreactores', selected: false },
                        { title: 'Medios de cultivo', selected: false },
                        { title: 'Sistema de mezclado', selected: false },
                        { title: 'Sistema de filtración', selected: false },
                        { title: 'ÄKTA (Purificación de proteínas)', selected: false },
                        { title: 'Citómetros de flujo', selected: false },
                        { title: 'Inmunoensayos', selected: false },
                        { title: 'Imagenología in vitro', selected: false },
                        { title: 'Manipuladores de líquidos', selected: false },
                        { title: 'Dosificadores de células/agregados', selected: false }
                    ]
                },

                {
                    title: 'BIOLOGÍA MOLECULAR',
                    products: [
                        { title: 'Lectores de microplacas', selected: false },
                        { title: 'Microarreglos (Micromatrices)', selected: false, brands: ['MOLECULAR DEVICES', 'BICO'] },
                        { title: 'PCR', selected: false, brands: ['ANALYTIK JENA'] },
                        { title: 'Estudios genómicos', selected: false, brands: ['BECKMAN COULTER'] },
                        { title: 'Extracción de DNA/RNA', selected: false, brands: ['ANALYTIK JENA'] },
                        { title: 'Immunospot', selected: false, brands: ['IMMUNOSPOT'] }
                    ]
                },

                {
                    title: 'ESPECIALIDADES',
                    products: [
                        { title: 'Agitadores', selected: false, brands: ['EDMUND BÜHLER'] },
                        { title: 'Tituladores', selected: false, brands: ['HANNA'] },
                        { title: 'Electrofisiología', selected: false, brands: ['MOLECULAR DEVICES'] },
                        { title: 'Cabinas de PCR', selected: false, brands: ['TOP AIR'] },
                        { title: 'Cabinas de bioseguridad', selected: false, brands: ['TOP AIR'] },
                        { title: 'Mobiliario de laboratorio', selected: false, brands: ['TOP AIR'] },
                        { title: 'Campanas extractoras', selected: false, brands: ['TOP AIR'] },
                        { title: 'Campanas de flujo laminar', selected: false, brands: ['TOP AIR'] }
                    ]
                },

                {
                    title: 'TEMPERATURA',
                    products: [
                        { title: 'Esterilizadores', selected: false, brands: ['BMT'] },
                        { title: 'Refrigeradores', selected: false, brands: ['MELING'] },
                        { title: 'Congeladores', selected: false, brands: ['MELING'] },
                        { title: 'Cuartos fríos', selected: false, brands: ['MELING'] },
                        { title: 'Ultracongeladores', selected: false, brands: ['BINDER'] },
                        { title: 'Cámaras climáticas', selected: false, brands: ['BINDER'] },
                        { title: 'Lavadoras termodesinfectantes', selected: false, brands: ['BMT'] },
                        { title: 'Cámaras de crecimiento', selected: false, brands: ['BINDER'] },
                        { title: 'Incubadoras', selected: false, brands: ['BINDER'] },
                        { title: 'Hornos de secado', selected: false, brands: ['BINDER'] }
                    ]

                }

            ],
        }
    },

    mounted() {
        this.initPopover();
        this.initOffCanvas();
        this.getData();

        this.$nextTick(function () {
            $(function () {
                $('input[name="daterange"]').daterangepicker({
                    opens: 'left',
                    ranges: {
                        'Hoy': [moment(), moment()],
                        'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Últimos 7 Días': [moment().subtract(6, 'days'), moment()],
                        'Últimos 30 Días': [moment().subtract(29, 'days'), moment()],
                        'Este Mes': [moment().startOf('month'), moment().endOf('month')],
                        'Mes Pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                        'Rango Personalizado': [moment().subtract(3, 'month'), moment().add(3, 'month')] // Este es tu rango personalizado
                    }
                }, function (start, end, label) {
                    console.log("Un nuevo rango de fechas ha sido seleccionado: " + start.format('YYYY-MM-DD') + ' a ' + end.format('YYYY-MM-DD'));
                });
            });
        })
    },

    computed: {


        filteredOptions() {
            return this.optionsList.filter(option =>
                option.name.toLowerCase().includes(this.searchTerm.toLowerCase())
            );
        },

        filteredIndustry() {
            return this.optionsIndustry.filter(option =>
                option.name.toLowerCase().includes(this.searchIndustry.toLowerCase()
                ));
        }
    },
    methods: {


        async getData() {
            try {
                const response = await fetch('../website-assets/php/edit_db_query.php', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });

                const results = await response.json();
                this.data = results;

                console.log(results);

                //this.actualizarPaginasVisibles(); // Llama a la actualización aquí después de obtener los datos

            } catch (e) {
                console.log('Error al momento de obtener los datos');
            }
        },

        hideList() {
            setTimeout(() => {
                this.showOptions = false;
            }, 200);
        },

        isSelected(column) {
            return this.selectedColumns.includes(column);
        },

        showList() {
            this.showOptions = true;
        },

        showListIndustry() {
            this.showIndustry = true;
        },

        hideListIndustry() {
            setTimeout(() => {
                this.showIndustry = false;
            }, 200);
        },

        selectOption(option) {
            this.searchTerm = option.name;
            this.hideList();
        },

        initOffCanvas() {
            this.$nextTick(() => {
                const offCanvasElements = document.querySelectorAll('[data-bs-target="offcanvasRight"]');
                offCanvasElements.forEach(openOffcanvas => {
                    new bootstrap.Offcanvas(openOffcanvas, {
                        html: true,
                        trigger: 'click'
                    });
                });
            });
        },

        showOffcanvas(data) {
            this.selectedRow = data;
            var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
            offcanvas.show();
        },


        initPopover() {
            this.$nextTick(() => {
                const popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
                popovers.forEach(popover => {
                    return new bootstrap.Popover(popover, {
                        html: true,
                        trigger: 'hover'
                    });
                });
            })
        },
        selectOption(option) {
            if (!this.selectedOptions.some(o => o.id === option.id)) {
                this.selectedOptions.push(option);
                this.searchTerm = '';
            }
        },

        selectedIndustryOption(option) {
            if (!this.selectedIndustry.some(o => o.id === option.id)) {
                this.selectedIndustry.push(option);
                this.searchIndustry = '';
            }
        },

        removePill(pill) {
            const index = this.selectedOptions.indexOf(pill);
            if (index !== -1) {
                this.selectedOptions.splice(index, 1);
            }
        },

        removePillIndustry(pill) {
            const index = this.selectedIndustry.indexOf(pill);
            if (index !== 1) {
                this.selectedIndustry.splice(index, 1);
            }
        },

        clearSearchTerm() {
            this.searchTerm = '';
        },

        isSelectedChannel(index){
            return this.selectedChannels.includes(index);
        },

        toggleSelectionChannel(index){
            const indexOfChannel = this.selectedChannels.indexOf(index);
            if(indexOfChannel !== -1){
                this.selectedChannels.splice(indexOfChannel, 1);
            }  else{
                this.selectedChannels.push(index)
            }
        },

        isSelected(index) {
            return this.selectedIndustries.includes(index);
        },

        toggleSelection(index) {
            const indexOfIndustry = this.selectedIndustries.indexOf(index);
            if (indexOfIndustry !== -1) {
                this.selectedIndustries.splice(indexOfIndustry, 1);
            } else {
                this.selectedIndustries.push(index);
            }
        },

        countSelectedProducts(products) {
            return products.filter(product => product.selected).length;
        },

        showModal() {
            $('#myModal').modal('show');
        }
    },
});

dataBaseApp.mount('#dataBaseApp');
