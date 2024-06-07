import Fuse from 'https://cdn.jsdelivr.net/npm/fuse.js@6.6.2/dist/fuse.esm.js';


const app = createApp({

    data() {
        return {
            searchInstance: null,
            searchWord: '',
            pages: [

                {
                    title: 'Espectrometría de masas',
                    link: 'https://inolab.com/espectrometria-de-masas.html',
                    description: '',
                    keywords: 'Espectrómetro de masas, mass spectometer, análisis de masas, estructura química, estructura molecular, espectro de masas, ms/ms, acoplado a masas, malditof, tof, cuadrupolo, trampa de iones, cromatografía de gases, relación masa carga, relación m/z, espectrómetro, espectrometro de masas, espectrometría de masas, espectrometria de masas, analisis de masas, masa tándem, masas masas, fragmentación, fragmentacion, qtof, qtrap, triplequad, triple quad, triple tof, zeno tof, qqq, tiempo de vuelo, time of fly'
                },

                {
                    title: 'Electroforesis capilar',
                    link: 'https://inolab.com/electroforesis-capilar.html',
                    description: '',
                    keywords: 'Separación de proteínas, electroforesis en gel de agarosa, electroforesis en gel, electroforesis de proteínas, separación por tamaño, separación de ADN DNA, separación de ARN RNA, separación por tamaño y carga, separación de moléculas, separacion de biomoléculas, movimiento por campo eléctrico, separación por campo eléctrico, dispersión por campo eléctrico, migración de biomoléculas, proteinas, biomoleculas, separacion, proteoma, análisis de proteínas, analisis de proteínas, proteínas, proteina'
                },

                {
                    title: 'Análisis de partículas',
                    link: 'https://inolab.com/analisis-de-particulas.html',
                    description: '',
                    keywords: 'vicell, multisizer, ls13320, iso 13320, viabilidad celular, exclusión por azul de tripano, tamaño celular, tamaño de partículas, distribución de tamaño, distribución de partícula, conteo de partículas, contador de partículas, conteo de células, contador de células, caracterización de partículas, analizador de partículas, Beckman coulter, cell viability, particle size, vi cell, viabilidad celular, multisizer 4e'
                },

                {
                    title: 'Centrifugación',
                    link: 'https://inolab.com/centrifugacion.html',
                    description: '',
                    keywords: 'Técnica de separación, separación por fuerza centrífuga, sedimentación, separación de particulas solidas de liquidas, separación por fuerza giratoria, sedimenta células, separación de células, separación solido-liquido, técnica de sedimentación, sedimentación acelerada, Beckman coulter, centrifuga de sobremesa, centrifuga de alto rendimiento, centrífuga, ultracentrífuga, centrífuga analítica, centrifuga, centrifugas, centrifugacion, centrifugadora, centrifugador, sedimentacion, particulas, partículas'
                },

                {
                    title: 'Bioprocesos Upstream',
                    link: 'https://inolab.com/upstream.html',
                    description: '',
                    keywords: 'Biorreactores, reactor biológico, reactores bioquímicos, tanques de agitado, biorreactor single use, control de pH, control de agitación, control de temperatura, viabilidad celular, conteo celular, vicell, incubadoras, crecimiento bacteriano, optimización de cultivos celulares, producción de biomoléculas, biorreactor'
                },

                {
                    title: 'Bioproesos Downstream',
                    link: 'https://inolab.com/downstream.html',
                    description: '',
                    keywords: 'Escalamiento, bioprocesos en laboratorio, bioprocesos en planta, producción de alta eficiencia, bioproducción, producción celular, purificación de proteínas, procesos de purificación, purificación de anticuerpos, centrifugación, centrifugas, separación de células, sistema de filtración biológica, fraccionamiento de muestras biológicas, concentración de biomoléculas, clarificación de cultivo celular, cosecha de cultivo celular'
                },

                {
                    title: 'Citometría de flujo',
                    link: 'https://inolab.com/citometria.html',
                    description: '',
                    keywords: 'Equipos de citometría, citometría laboratorio, detección monoclonal, detección vih, caracterización celular, análisis clínicos, fluorocromos, anticuerpos fluorescentes, análisis celular, linfocitos t, cd3 cd4 cd8, leucemias, histograma, diagnostico de leucemia, citómetro de flujo, citometría hemática, detección de anticuerpos, cytoflex, citómetros, cytometer, cytometry, Flow cytometer, Beckman coulter, cell sorter, cell sorting'
                },

                {
                    title: 'Inmunoensayos',
                    link: 'https://inolab.com/citometria.html',
                    description: '',
                    keywords: 'Unión anticuerpo antigeno, competitivos o no competitivos, examen de sangre Elisa, teste Elisa, lectores de microplacas, sistema biacore, Molecular Devices, Microplate Reader, lectores de absorbancia, lectores de luminiscencia, lectores de fluorescencia, lectores multimodales, anticuerpos, antígenos, antigeno, anticuerpo, antigenos'
                },

                {
                    title: 'Imagenología in vitro',
                    link: 'https://inolab.com/imagenolog%C3%ADa-in-vitro.html',
                    description: '',
                    keywords: 'Molecular Devices, imágenes celulares, imagenes celulares, imagen de celulas, imagen de células, modalidad de fluorescencia, modalidad bioluminiscencia, rayos x, diagnóstico celular, análisis clínicos y microbiológicos, medicina nuclear, diagnóstico de enfermedades, análisis de proteínas, análisis bioluminiscentes, análisis fluorescentes, imagenología in vitro, imagenología, imagenologia, imagenologia in vitro'
                },

                {
                    title: 'Bioconvergencia',
                    link: 'https://inolab.com/Bioconvergencia.html',
                    description: '',
                    keywords: 'Biorreactores, dispensadores celulares, dosificador celular, micro matrices, microarreglos, manipuladores de líquidos, dosificadores de líquidos, celula a celula, separación de células, separación de organoides, separación de esferoides, dispensador de organoides y esferoides, dosificador de organoides y esferoides, análisis de esferoides y tumoroides, lectores de microplacas, lectores de microarreglos, lavadores de microplacas, celula, célula, células, celulas, tumoroides, esferoides, microbiorreactores, microbiorreactor'
                },

                {
                    title: 'Secuenciación y expresión génica',
                    link: 'https://inolab.com/secuenciacion-y-expresion-genetica.html',
                    description: '',
                    keywords: 'Análisis genético, genética, genes, genomelab gexp, Beckman coulter, genoma, genoma humano, genoma completo, identificación microbiana, expresión génica, cuantificación génica, cuantificación de genes, sciex, secuenciador de adn, pcr cuantitativo, genotipado, SNP, polimorfismo nucleótido, análisis de fragmentos, biología, biologia, biología molecular, biologia molecular, adn, dna, sangre, genomica, identificacion microbiana, cuantificacion de genes'
                },

                {
                    title: 'Immunospot',
                    link: 'https://inolab.com/Immunospot.html',
                    description: '',
                    keywords: 'Monitoreo inmunológico, elispot, fluorospot, detección células b, medición de anticuerpos, firmas citoquinas, células T, neutralización de anticuerpos, linfocito B, recuento de PBMC, células vivas y muertas, citotoxicidad, ensayo TVA, células policlonales, biospot, células, celulas, celular, deteccion, monoclonalidad, monoclonal, monoclonales'
                },

                {
                    title: 'Microarreglos',
                    link: 'https://inolab.com/microarreglos.html',
                    description: '',
                    keywords: 'Gene Pix, Lectores gene pix, escáner de microarreglos, proteómica, genómica, transcriptómica, epigenómica, adquisición de imágenes, fluróforos, escáner de micromatrices, genes, metilacion adn, ChIP, cromatina, SNP, aCGH, matrices de tejido, matrices de hidratos de carbono, proteínas, péptidos, ELISA, anticuerpos, ARNi, miARN, proteomica, genomica, proteina, proteinas, imagenologia, lector, lector de microarreglos, lector de microarreglo'
                },

                {
                    title: 'PCR',
                    link: 'https://inolab.com/pcr.html',
                    description: '',
                    keywords: 'Equipos para pcr, dnapolimerasa, reacción en cadena de la polimerasa, pcr de punto final, pcr en tiempo real, termocicladores, amplificación de adn, cuantificación de adn, qpcr, detección de sars cov2, prueba de diagnóstico, detección de material genético, amplificar secuencias de adn, adn sintético, estudio del genoma, copias de adn, analytikjena, adn, dna, dna polimerasa'
                },

                {
                    title: 'Lectores de Microplacas',
                    link: 'https://inolab.com/lectores-de-microplacas.html',
                    description: '',
                    keywords: 'Lector de absorbancia, lector de fluorescencia, lector de luminiscencia, lector multimodal, molecular devices, spectramax, flexstation, medición de fluoescencia,TRF, PF, detección luminiscente, detección de absorbancia, alphascreen, inmunotransferencia, ELISA, cuantificación de proteínas, cuantificación de ácidos nucleicos, viabilidad celular, citotoxicidad, ensayos de calcio y cAMP, polarización de fluorescencia, cinética enzimática, proliferación microbiana, proliferación bacteriana, inmunoensayos'
                },

                {
                    title: 'Extracción y purificación de DNA/RNA',
                    link: 'https://inolab.com/extraccion-de-dna-rna.html',
                    description: '',
                    keywords: 'Perlas magnéticas, extracción de DNA ADN, extracción de RNA ARN, Separación de ácidos nucleicos, purificación de ácidos nucleicos, purificación de adn dna, separación selectiva por tamaño, kits de purificación, kits de extracción, kits de limpieza de ácidos nucleicos, dna de tejidos, dna de sangre, plásmidos, estudio del genoma, genómica, estudio de los genes, perlas magneticas, extraccion dna, extraccion adn, extraccion arn, extraccion arn, dna, adn, rna, arn, purificacion, separacion, separación, purificación'
                },

                {
                    title: 'Diagnóstico',
                    link: 'https://inolab.com/diagnostico.html',
                    description: '',
                    keywords: 'Kits de diagnóstico, kits de control de calidad en comida, kits de enfermedades de garrapatas, kits de diagnóstico ambiental, kits de diagnóstico veterinario, kits de diagnóstico humano, patógenos humanos, patógenos animales, contaminación, monitoreo de patógenos, enfermedades, control de salud, analytikjena, detección basada en tiras, contaminación cruzada, kits diagnostico, diagnostico, diagnóstico'
                },
                
                {
                    title: 'Bioseguridad',
                    link: 'https://inolab.com/bioseguridad.html',
                    description: '',
                    keywords: 'Filtración de aire, filtros de aire, protección en laboratorios, protección de personas, protección en procesos, campanas de laboratorio, cabinas de bioseguridad, cabina de seguridad, extracción de aire, extracción de gases, cabinas de PCR, protección contra contaminantes, campana extractora, campana de flujo laminar, mobiliario de laboratorio, muebles de laboratorio, gavetas, protección personal de laboratorio, para productos químicos nocivos, sistemas de flujo de aire, extraccion de aire, extraccion de gases, filtracion, proteccion'
                },

                {
                    title: 'Agitadores',
                    link: 'https://inolab.com/agitadoresLaboratorio.html',
                    description: '',
                    keywords: 'Agitadores de laboratorio, movimiento horizontal, movimiento orbital, movimiento intercalado, agitación de cultivos celulares, crecimiento celular, cultivos celulares, mezcla de muestras biológicas, inclinación lineal, inclinación orbital tridimensional, agitación con incubación, agitación de cajas Petri microplacas o matraces, agitadores universales, agitación alternada, incubadoras con agitación'
                },

                {
                    title: 'Tituladores',
                    link: 'https://inolab.com/tituladores.html',
                    description: '',
                    keywords: 'Tituladores protenciometricos, tituladores voltamperometricos, valoración de acidez, acidez titulable, titulador Karl Fischer, titulador coulometrico, sistema de titulación, acidez en vinos, acidez en jugos, valoración de agua, dureza de agua, cuantificación de acidez, cuantificación de dureza de agua, potenciometría, medidores de pH, electrodos combinados, electrodos de calomel, minitituladores, valoración de leche, valoración de productos lácteos, HANNA'
                },

                {
                    title: 'Esterilizadores',
                    link: 'https://inolab.com/esterilizadores.html',
                    description: '',
                    keywords: 'Esterilización, esterilizador de vapor saturado, esterilizador de vapor, esterilización al vacío, esterilizador de calor seco, esterilizador de plasma, esterilizador de oxido de etileno, esterilizador de baja temperatura, esterilización de baja temperatura, esterilización para ceyes, esterilizar instrumentos, inocuidad, bmt, mmm group, last technology, centrales de esterilización, autoclaves, esterilizador de peróxido'
                },

                {
                    title: 'Refrigeradores',
                    link: 'https://inolab.com/refrigeradores/',
                    description: '',
                    keywords: 'Refrigeradores de laboratorio, refrigeradores farmacéuticos, refrigeradores hospitalarios, refrigerador biomédico, de 2 a 8 grados, 4 grados, banco de sangre, refrigerador para sangre, refrigerador para farmacia, Meling, cadena de frío, vacunas, emulsiones, medicamentos, refrigeración biológica, refrigeración de cultivos, refrigerantes ecológicos, almacenamiento, refri laboratorio, refrigerador clínico, refrigerador-congelador, refrigerador combinado'
                },

                {
                    title: 'Congeladores',
                    link: 'https://inolab.com/congeladores.html',
                    description: '',
                    keywords: 'Congelador vertical, menos 20 grados, menos 40 grados, Meling, cadena de frío, criogénicos, red fría, congelación de productos, congelador biomedico, congelador farmacéutico, congelador de vacunas, congelador de células, congelador para vacunas, congelador de productos biológicos, baja temperatura, sistema de refrigeración, congelador grado médico, congelador clínico, congelador laboratorio'
                },

                {
                    title: 'Cuartos Fríos',
                    link: 'https://inolab.com/cuartos-frios.html',
                    description: '',
                    keywords: 'Cadena de frio, red fría, procesos en frio, cuarto de congelación, cuarto de almacenamiento en frio, enfriamiento de procesos, enfriamiento de productos, temperatura baja en procesos, cámara frigorífica, almacen de temperatura artificial, neveras, recepción de mercancía en frio, manipulación en frío, manipulación a baja temperatura'
                },

                {
                    title: 'Lavadora Termodesinfectante',
                    link: 'https://inolab.com/lavadoras.html',
                    description: '',
                    keywords: 'Lavado de materiales, lavadora de laboratorio, termodesinfección, desinfección en laboratorio, desinfección de material de vidrio, lavadora de material de vidrio, bmt, last technology, lavado y termodesinfección, lavado y desinfección, desinfectador laboratorio, lavadora hospitalaria, lavador de material quirúrgico, inocuidad en laboratorios, inocuidad en hospitales, lavadora para procesos, termodesinfección en procesos'
                },

                {
                    title: 'Ultracongeladores',
                    link: 'https://inolab.com/ultracongeladores.html',
                    description: '',
                    keywords: 'Lavado de materiales, lavadora de laboratorio, termodesinfección, desinfección en laboratorio, desinfección de material de vidrio, lavadora de material de vidrio, bmt, last technology, lavado y termodesinfección, lavado y desinfección, desinfectador laboratorio, lavadora hospitalaria, lavador de material quirúrgico, inocuidad en laboratorios, inocuidad en hospitales, lavadora para procesos, termodesinfección en procesos'
                },

                {
                    title: 'Ultracongeladores',
                    link: 'https://inolab.com/ultracongeladores.html',
                    description: '',
                    keywords: 'Binder, Meling, menos 90 grados, menos 86 grados, -90, -86, refrigeración por compresión en cascada, refrigerantes ecológicos, ultracongelación, ultracongelador, ultracongeladores, ultracongeladores para vacunas, vacunas covid, transporte de vacunas, red fría, cadena de frío, almacenamiento de muestras a largo plazo, aislamiento al vacío, ultracongelacion, temperatura baja, refrigeración, congelador, congeladores'
                },

                {
                    title: 'Cámaras climáticas',
                    link: 'https://inolab.com/camaras-climaticas.html',
                    description: '',
                    keywords: 'Cámaras de clima, cámara de clima, camaras de clima, cámara climatica, cámara climática, camara de clima, cámaras de clima, cámaras de clima constante, camaras de clima constante, camaras de clima variable, cámaras de clima variable, cámaras de temperatura, cámaras de humedad, cámara, camara, fotoestabilidad, pruebas de fotoestabilidad, cámaras de control de luz, pruebas aceleradas, pruebas de anaquel, vida útil de productos, pruebas de baterías, control de condiciones ambientales, control de clima, ambientación artificial, control ambiental, simulación medioambiental, simulación de condiciones climáticas, pruebas de estabilidad, ensayos de estabilidad, pruebas de estrés, ensayos de estrés, prueba de productos, cabinas medioambientales, pruebas de envejecimiento.'
                },
                

                {
                    title: 'Incubadoras',
                    link: 'https://inolab.com/incubadoras.html',
                    description: '',
                    keywords: 'Binder, incubadoras estándar, incubadora, incubador, incubadores, incubadoras, incubadora estándar, incubadora std, incubadora estándar, incubadoras estándar, incubadoras de co2, incubadora de co2, incubadoras refrigeradas, incubadora refrigerada, incubadora de cultivos, incubadora de cultivo, incubadora celular, incubadoras de células, incubadora de células, incubadoras celulares, incubadora microorganismos, incubadoras microorganismos, incubadora microorganismo, incubadoras de cultivos celulares, incubadoras microbianas, incubadora microbiana, incubadora bacteriana, incubadoras bacterianas, incubadora de laboratorio, incubadora para dbo, incubadora microbiología, incubador celular, incubadora hospitalaria, microbiología, biología, producción celular, crecimiento celular, crecimiento bacteriano, crecimiento microbiológico, producción bacteriana, terapia celular, incubación celular, incubación bacteriana, incubación microorganismos, hornos'
                },

                {
                    title: 'Cámaras de crecimiento',
                    link: 'https://inolab.com/incubadoras.html',
                    description: '',
                    keywords: 'Control de temperatura, control de humedad, control de luz, crecimiento de plantas, crecimiento de organismos, crecimiento de biológicos, crecimiento de productos biológicos, cámara de crecimiento con luz, condiciones de humedad y temperatura constante, estimulación de crecimiento, crecimiento de insectos, biología, microbiología, monitoreo de insectos, estudio de insectos, estudio de plantas, industria cosmética, embalaje, clínicas, diagnóstico clínico,'
                },

                {
                    title: 'Estufas y hornos',
                    link: 'https://inolab.com/incubadoras.html',
                    description: '',
                    keywords: 'Cámaras de calor de secado, cámara de calor de secado, cámara de calor de secado, cámaras de calor de secado, cámaras de seguridad, cámara de seguridad, cámara de seguridad, cámaras de secado de seguridad, cámaras de secado al vacío, camaras de secado al vacio, cámaras de secado al vacio, cámara de secado al vacio, convección natural, convección forzada, conveccion natural, conveccion forzada, almacenamiento térmico, almacenamiento térmico, tratamiento térmico, tratamiento térmico secado de materiales, secado de productos, secado de productos biológicos, secado de barnices, secado de solventes, secado de disolventes, cámaras de secado, protección contra explosivos, ATEX, estufa de laboratorio, horno de laboratorio, secado de disolventes inflamables y no inflamables, secado de seguridad, horno de vacío, hornos de vacío, hornos de calentamiento, hornos de seguridad, hornos de seguridad, horno de vacio, horno de seguridad, horno de secado, horno de calentamiento, horno, hornos, hornos de seguridad, horno de seguridad, hornos binder, horno binder, binder'
                },
                
                
                
                
                
            ],
        };
    },

    created() {


    },

    mounted() {


        nextTick(() => {
            const options = {
                shouldSort: true,
                includeMatches: true,
                includeScore: true,
                threshold: 0.4, 
                location: 0,
                distance: 1000,
                minMatchCharLength: 2,
                keys: ["keywords"]
            };

            this.searchInstance = new Fuse(this.pages, options);

        });

    },

    computed: {

        initSearch() {

            if (this.searchWord != '') {

                const result = this.searchInstance.search(this.searchWord);
                
                result.forEach(res => {
                    res.item.highlight = this.highlightText(res.item.keywords, this.getBestMatch(res.matches.filter(matches => matches.key == "keywords")));
                });
                
              

                return result.filter(element => parseInt(element.score) < 1)
            }

        },

    },

    methods: {


        highlightText(text, arr) {

            let start = arr[0], end = arr[1];

            return text.substr(0, start) +
                '<span style="background: #ffeaa7; border-radius: 5px; padding: 0 3px 0 3px">' +
                text.substr(start, end - start + 1) +
                '</span>' +
                text.substr(end + 1)
        },

        getBestMatch(matches) {
        
            if (matches.length) {
                let indices = matches[0].indices;
                if (indices) {
                    const lengthsArray = indices.map(indices => indices[1] - indices[0]);
                    return matches[0].indices[lengthsArray.indexOf(Math.max(...lengthsArray))];
                }
            }
        }

    }
});


app.mount("#search-bar");