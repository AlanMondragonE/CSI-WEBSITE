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
                return item.EMPRESA.toLowerCase().includes(this.searchInput.toLowerCase()) ||
                       item.NOMBRE.toLowerCase().includes(this.searchInput.toLowerCase()) ||
                       item.CORREO.toLowerCase().includes(this.searchInput.toLowerCase());
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
                const response = await fetch('../website-assets/php/query.php', {
                    method: 'GET',
                    headers: {
                       'Content-Type': 'application/json'
                    }
                });
   
                const results = await response.json();
                this.data = results;

                console.log(results);

                this.actualizarPaginasVisibles(); // Llama a la actualización aquí después de obtener los datos

            } catch(e) {
                console.log('Error al momento de obtener los datos');
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
