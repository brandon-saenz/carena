var main_page_ = document.getElementById('main_page');
var mapa_ = document.getElementById('mapa');
if(main_page_){
    var main_page = new Vue({
        el: '#main_page',
        data(){
            return{
                value: 'main_page ON',
                empresas: [
                    {
                        title: 'Grupo Valcas',
                        url: '/principal',
                        icon: `
                        <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>`
                    },
                    {
                        title: 'IRT',
                        url: '/principal',
                        icon: `
                        <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>`
                    },
                    {
                        title: 'RGR',
                        url: '/principal',
                        icon: `
                        <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>`
                    },
                    {
                        title: 'Carena',
                        url: '/principal',
                        icon: `
                        <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>`
                    },
                    {
                        title: 'Serena',
                        url: '/principal',
                        icon: `
                        <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>`
                    }
                ]
            }
        },
        created() {
            this.setterData();
        },
        methods: {
            setterData(){
                console.log(this.value);
            }
        },
    });
}else if(mapa_){

    document.addEventListener('click', function() {
        // Mostrar el mensaje cuando se haga clic en cualquier parte del DOM
        // mapa.hideDropdownItem();
        
    });

    // window.onclick = function(event) {
    //     var dropdownContent = document.getElementById('dropdown-item');

    //     if (!event.target.matches('.item_map') && !event.target.matches('.menu-item')) {
    //       if (dropdownContent.classList.contains('show')) {
    //         dropdownContent.classList.remove('show');
    //       }
    //     }
    // }

    var mapa = new Vue({
        el: '#mapa',
        data(){
            return{
                elemento: null,
                listado: [],
                modo: 'ver',
                scale: 1,
                vista_mapa: 'nomenclaturas',
                totales: [],
                instancia: false,
                financiamiento: [],
                precio_m2: '0.00'
            }
        },
        created() {
            this.setterData();
        },
        methods: {
            setterData(){
                this.getListado();
            },
            zoom(type){
                const ancho = document.documentElement.clientWidth;
                this.hideDropdownItem();

                if(type=='mas'){
                    this.scale+= 0.1;

                    if(ancho<1000){
                        let widthContent = ancho*this.scale;
    
                        var content = document.querySelector('.content-map');
                        content.style.maxWidth = widthContent+'px';
                        content.style.width = widthContent+'px';

                        content.style.left = '0';
                    }else{
                        let widthContent = 1000*this.scale;

                        var content = document.querySelector('.content-map');
                        content.style.maxWidth = widthContent+'px';
                        content.style.width = widthContent+'px';

                        if(widthContent>ancho){
                            content.style.left = '0';
                        }else{
                            content.style.left = 'auto';
                        }
                    }

                }else if(type=='menos'){
                    this.scale-= 0.1;

                    if(ancho<1000){
                        let widthContent = ancho*this.scale;
    
                        var content = document.querySelector('.content-map');
                        content.style.maxWidth = widthContent+'px';
                        content.style.width = widthContent+'px';

                        content.style.left = '0';
                    }else{
                        let widthContent = 1000*this.scale;

                        var content = document.querySelector('.content-map');
                        content.style.maxWidth = widthContent+'px';
                        content.style.width = widthContent+'px';

                        if(widthContent>ancho){
                            content.style.left = '0';
                        }else{
                            content.style.left = 'auto';
                        }
                    }

                }else{
                    this.scale = 1;

                    var content = document.querySelector('.content-map');
                    
                    if(ancho<1000){
                        content.style.width = ancho+'px';
                        content.style.maxWidth = ancho+'px';
                        content.style.left = '0';
                    }else{
                        content.style.width = '100vw';
                        content.style.maxWidth = '1000px';
                        content.style.left = 'auto';
                    }
                }

                console.log(this.scale);
            },
            setActiveLote(json){
                console.log('setActiveLote()');
                console.log(json);

                this.financiamiento = json.condiciones_financiamiento;
                this.precio_m2 = json.precio_m2;
            },
            getListado(){
                const VT = this;
                // var baseURL = 'http://localhost/devvalcas';
                var baseURL = 'https://saevalcas.mx';

                $.ajax({
                    type: "get",
                    url: baseURL+"/carena/externo/carena/get_listado",
                    beforeSend: function(){
                    },
                    success: function(data, status, xhr){
                        console.log(data);
                        var res = JSON.parse(data);
                        VT.listado = res.data;
                        VT.totales = res.totales;
                        console.log(VT.listado);

                        VT.instancia = true;

                        setTimeout(() => {
                            const pathsAndPolygons = document.querySelectorAll('.item_map');
    
                            pathsAndPolygons.forEach(item => {
                                item.addEventListener('click', () => {
                                    var index = parseInt(item.getAttribute('data-index'));
                                    console.log('Elemento clickeado:', item);
                                    console.log(index);

                                    var dump = VT.listado[index];
                                    console.log('lote: '+dump.nombre);
                                    console.log('superficie: '+dump.superficie);
                                    VT.elemento = dump;
                                    VT.showDropdownItem();

                                    console.log(VT.elemento);

                                    var listaItems = document.querySelectorAll('.item_map');
                                    listaItems.forEach(elem => {
                                        var elemIndex = parseInt(elem.getAttribute('data-index'));
                                        if(elemIndex==index){
                                            elem.classList.add('item_map_selected');
                                        }else{
                                            elem.classList.remove('item_map_selected');
                                        }
                                    });

                                    VT.setActiveLote(dump);

                                });
                            });

                            var toolbar_vue = document.querySelector('.toolbar-vue');
                            toolbar_vue.classList.remove('d-none');
                            toolbar_vue.classList.add('d-flex');

                            var loading_mapa = document.querySelector('.loading-mapa');
                            loading_mapa.classList.add('d-none');

                            var mapa = document.querySelector('.mapa');
                            mapa.classList.remove('d-none');

                        }, 100);
                    },
                    error:function(data){
                        console.log('ERROR | '+data);
                        var res = JSON.parse(data);
                        console.log(res);
                    }
                });
            },
            setModo(modo){
                this.modo = modo;
            },
            setVistaMapa(){
                if(this.vista_mapa=='nomenclaturas'){
                    this.vista_mapa='medidas';
                }else{
                    this.vista_mapa='nomenclaturas';
                }
                console.log(this.vista_mapa);
            },
            hideDropdownItem(){
                var dropdown_item = document.getElementById('dropdown-item');
                dropdown_item.classList.remove('show');
            },
            showDropdownItem(data){
                this.hideDropdownItem();
                setTimeout(() => {
                    var dropdown_item = document.getElementById('dropdown-item');
                    dropdown_item.classList.add('show');
                }, 100);
                // dropdown_item.style.left = '20px';
                // dropdown_item.style.top = '90px';
            },
            // generarListado(){
            //     setTimeout(() => {
            //         const pathsAndPolygons = document.querySelectorAll('.item_map');

            //         var id = 1;
            //         pathsAndPolygons.forEach(item => {
            //             var getItem = {};

            //             var draw = '';
            //             if(item.tagName=='polygon'){
            //                 draw = item.getAttribute('points');
            //             }else{
            //                 draw = item.getAttribute('d');
            //             }

            //             getItem = {
            //                 id: id,
            //                 tipo_elemento: item.tagName,
            //                 class: 'class_item_lote',
            //                 points: draw,
            //                 seccion: 'CR',
            //                 manzana: '00',
            //                 lote: '00',
            //                 inmobiliaria: 'IBP',
            //                 clasificacion: 'lote',
            //                 nombre: 'CR-00-00',
            //                 superficie: '0.000',
            //             };

            //             this.listado.push(getItem);

            //             item.addEventListener('click', () => {
            //                 // var index = item.getAttribute('data-index');
            //                 // var dump = this.listaItems[index];
            //                 console.log('Elemento clickeado:', getItem);
                            
            //                 // console.log('Index: '+index);
            //                 // console.log('lote: '+dump.lote);
            //                 // console.log('superficie: '+dump.superficie);
            //                 // console.log(dump);
            //                 this.elemento = getItem;
            //                 this.showDropdownItem();
            //             });
            //             id++;
            //         });

            //         console.log(this.listado);
                    
            //         var baseURL = 'http://localhost/devvalcas';

            //         var formData = new FormData();
            //         formData.append('listado', JSON.stringify(this.listado));

            //         $.ajax({
            //             type: "post",
            //             url: baseURL+"/externo/cerena/generar_listado",
            //             data: formData,
            //             contentType: false,
            //             processData: false,
            //             beforeSend: function(){
            //             },
            //             success: function(data, status, xhr){
            //                 console.log(data);
            //                 var res = JSON.parse(data);
            //                 console.log(res);
            //             },
            //             error:function(data){
            //                 console.log('ERROR | '+data);
            //                 var res = JSON.parse(data);
            //                 console.log(res);
            //             }
            //         });
            //     }, 500);
            // },
        },
    });
}