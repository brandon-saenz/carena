</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js?<?php echo filemtime(ROOT_DIR . 'static/assets/js/scripts.bundle.js'); ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
	</body>
	<!--end::Body-->
</html>
<script>
    var globalHeader = new Vue({
        el: '#kt_header',
        data(){
            return{
                // listaMenu: [
                //     {
                //         title: 'Inicio',
                //         ref: STASIS, 
                //         class: 'here show menu-here-bg menu-lg-down-accordion'
                //     },
                //     {
                //         title: 'Catalogos',
                //         ref: null, 
                //         class: 'menu-lg-down-accordion menu-sub-lg-down-indention',
                //         menu: [
                //             {
                //                 title: 'Postventa',
                //                 ref: null, 
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Propietarios',
                //                         ref: STASIS+'/catalogos/propietarios', 
                //                         class: ''
                //                     },
                //                 ]
                //             },
                //         ]
                //     },
                //     {
                //         title: 'Bitacoras',
                //         ref: STASIS+'/bitacoras/postventa', 
                //         class: 'menu-lg-down-accordion'
                //     },
                //     {
                //         title: 'Lotes',
                //         ref: null, 
                //         class: 'menu-lg-down-accordion menu-sub-lg-down-indention',
                //         menu: [
                //             {
                //                 title: 'Dashboard',
                //                 ref: STASIS+'/inventario/lotes/dashboard', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Inventario de Lotes',
                //                 ref: STASIS+'/inventario/lotes/inventario', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Claves Catastrales',
                //                 ref: STASIS+'/inventario/lotes/catastro', 
                //                 class: ''
                //             },
                //         ]
                //     },
                //     {
                //         title: 'Ventas',
                //         ref: null, 
                //         class: 'menu-lg-down-accordion menu-sub-lg-down-indention',
                //         menu: [
                //             {
                //                 title: 'Dashboard',
                //                 ref: STASIS+'/ventas/reportes/dashboard', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Comisiones',
                //                 ref: STASIS+'/ventas/comisiones', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Reporte de Ventas',
                //                 ref: STASIS+'/ventas/reportes/reporte_ventas', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Bitácora Propietarios',
                //                 ref: STASIS+'/telemarketing/cobranza', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Citas Prospectos',
                //                 ref: null, 
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Listado de citas',
                //                         ref: STASIS+'/prospectaje/citas', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Gestión de prospectos',
                //                         ref: STASIS+'/prospectaje/gestioncitas', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Manifiesto',
                //                         ref: STASIS+'/prospectaje/manifiesto', 
                //                         class: ''
                //                     },
                //                 ]
                //             },
                //             {
                //                 title: 'Inventario de Lotes',
                //                 ref: STASIS+'/ventas/lotes', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Hoja de Registro',
                //                 ref: STASIS+'/ventas/hoja_registro', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Ofertas de Compra',
                //                 ref: STASIS+'/ventas/ofertas_compra', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Contratos',
                //                 ref: STASIS+'/catalogos/contratos', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Expedientes Ley Antilavado',
                //                 ref: STASIS+'/ventas/expedientes', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Beneficios de Compra',
                //                 ref: null, 
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Generar',
                //                         ref: STASIS+'/movimientos/ventas', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Reporte',
                //                         ref: STASIS+'/movimientos/ventas/historial', 
                //                         class: ''
                //                     }
                //                 ]
                //             },
                //         ]
                //     },
                //     {
                //         title: 'Postventa',
                //         ref: null, 
                //         class: 'menu-lg-down-accordion menu-sub-lg-down-indention',
                //         menu: [
                //             {
                //                 title: 'Dashboard',
                //                 ref: STASIS+'/movimientos/solicitudes/dashboard', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Solicitudes',
                //                 ref: STASIS+'/movimientos/solicitudes/reporte', 
                //                 class: ''
                //             },
                //         ]
                //     },
                //     {
                //         title: 'Cobranza',
                //         ref: null, 
                //         class: 'menu-lg-down-accordion menu-sub-lg-down-indention',
                //         menu: [
                //             {
                //                 title: 'Facturación',
                //                 ref: null, 
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Generar Factura',
                //                         ref: STASIS+'/cobranza/facturacion/generar', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Reporte de Facturación',
                //                         ref: STASIS+'/cobranza/facturacion/reporte', 
                //                         class: ''
                //                     },
                //                 ]
                //             },
                //             {
                //                 title: 'Dashboard',
                //                 ref: STASIS+'/cobranza/dashboard', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Consumo de Agua',
                //                 ref: null, 
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Registro de Consumos',
                //                         ref: STASIS+'/cobranza/agua', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Recibos CESPTE',
                //                         ref: STASIS+'/cobranza/agua/recibo_cespte', 
                //                         class: ''
                //                     },
                //                 ]
                //             },
                //             {
                //                 title: 'Bitácora Propietarios',
                //                 ref: STASIS+'/telemarketing/cobranza/?com=1', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Notas de Crédito',
                //                 ref: null, 
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Cancelaciones',
                //                         ref: STASIS+'/cobranza/notas_credito', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Saldo a Favor',
                //                         ref: STASIS+'/cobranza/notas_credito/saldos', 
                //                         class: ''
                //                     },
                //                 ]
                //             },
                //             {
                //                 title: 'Asociación de Colonos',
                //                 ref: STASIS+'/cobranza/au', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'IBP',
                //                 ref: STASIS+'/cobranza/ibp', 
                //                 class: ''
                //             },
                //         ]
                //     },
                //     {
                //         title: 'Legal',
                //         ref: null, 
                //         class: 'menu-lg-down-accordion menu-sub-lg-down-indention',
                //         menu: [
                //             {
                //                 title: 'Bitácora Firmas Pendientes',
                //                 ref: STASIS+'/legal/bitacora', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Expedientes Digitales',
                //                 ref: STASIS+'/legal/expedientes', 
                //                 class: ''
                //             },
                //             {
                //                 title: 'Convenios de Propietarios',
                //                 ref: null,
                //                 class: '',
                //                 menu: [
                //                     {
                //                         title: 'Listado de Propietarios',
                //                         ref: STASIS+'/legal/carpeta', 
                //                         class: ''
                //                     },
                //                     {
                //                         title: 'Convenios Generados',
                //                         ref: STASIS+'/legal/carpeta/reportes', 
                //                         class: ''
                //                     },
                //                 ]
                //             },
                //             {
                //                 title: 'Documentos Inmobiliaria',
                //                 ref: STASIS+'/legal/contratos/inmobiliaria', 
                //                 class: ''
                //             },
                //         ]
                //     },
                // ],
                vista_mapa: 'nomenclaturas',
                listStatus: [
                    {title: 'SIN ASIGNAR', class: 'danger', num: 0, active: false, total: 0,},
                    {title: 'DISPONIBLE', class: 'success', num: 1, active: false, total: 0,},
                    {title: 'VENDIDO', class: 'primary', num: 2, active: false, total: 0,},
                    {title: 'APARTADO', class: 'warning', num: 3, active: false, total: 0,},
                    {title: 'PREVENTA', class: 'info', num: 4, active: false, total: 0,},
                    {title: 'NO DISPONIBLE', class: 'danger', num: 5, active: false, total: 0,},
                ]
            }
        },
        created(){
            this.setterData();
        },
        methods: {
            setterData(){
                const VT = this;
                var intervalID = setInterval(function(){
                    if(mapa.instancia){
                        for (let index = 0; index < mapa.totales.length; index++) {
                            VT.listStatus[index].total = mapa.totales[index];
                        }
                        clearInterval(intervalID);
                    }
                }, 10);
            },
            displayColorStatus(num){
                console.log(this.listStatus[num]);

                this.listStatus.forEach(itemStatus => {
                    if(num==itemStatus.num){
                        itemStatus.active = true;
                    }else{
                        itemStatus.active = false;
                    }
                });

                mapa.listado.forEach(item => {
                    if(item.status == num && item.tipo == 'lote'){
                        item.color_persistente = true;
                    }else{
                        item.color_persistente = false;
                    }
                });
            },
            setVistaMapa(){
                if(this.vista_mapa=='nomenclaturas'){
                    this.vista_mapa='medidas';
                    mapa.vista_mapa='medidas';
                }else{
                    this.vista_mapa='nomenclaturas';
                    mapa.vista_mapa='nomenclaturas';
                }
                console.log(this.vista_mapa);
            },
        },
    });
</script>