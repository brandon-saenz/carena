<?php require_once(APP . '/vistas/inc/header.php'); ?>
<!--begin::Main-->
<div id="mapa" class="mapa d-none">
	<div id="btns_zoom">
		<a class="btn btn-icon btn-primary" @click="zoom('mas')"><i class="fas fa-plus" style="font-size: 1.8em;"></i></a>
		<a class="btn btn-icon btn-primary" @click="zoom('menos')"><i class="fas fa-minus" style="font-size: 1.8em;"></i></a>
		<a class="btn btn-icon btn-primary" @click="zoom('')"><i class="fas fa-undo-alt" style="font-size: 1.8em;"></i></a>
	</div>

	
	<div class="div-center" style="height: 100vh;">
		<img src="img/bg_carena.png?<?php echo filemtime(ROOT_DIR . 'static/img/bg_carena.png'); ?>" class="bg-carena">
		<img src="img/carena_logo.png?<?php echo filemtime(ROOT_DIR . 'static/img/carena_logo.png'); ?>" id="logo_map">
		<div class="content-map">
			<!--  -->
			<img src="img/bg_mapa.svg?<?php echo filemtime(ROOT_DIR . 'static/img/bg_mapa.svg'); ?>" class="svg_map">
			<img src="img/mapa_nomenclaturas.svg?<?php echo filemtime(ROOT_DIR . 'static/img/mapa_nomenclaturas.svg'); ?>" :class="vista_mapa=='nomenclaturas'?'svg_map':'d-none svg_map'">
			<img src="img/mapa_superficies.svg?<?php echo filemtime(ROOT_DIR . 'static/img/mapa_superficies.svg'); ?>" :class="vista_mapa=='medidas'?'svg_map':'d-none svg_map'">
			<svg id="items_map" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2158.15 1728">
				<template v-for="(item, i) in listado">
					<path :data-index="i" v-if="item.tipo_elemento === 'path'" :key="i" :d="item.points" :class="'item_map '+item.class"/>
					<polygon :data-index="i" v-else-if="item.tipo_elemento === 'polygon'" :key="i" :points="item.points" :class="'item_map '+item.class"/>
				</template>
			</svg>
		</div>
	</div>
	<form id="dropdown-item" action="" method="post" enctype="multipart/form-data" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold"
	style="z-index: 10; position: absolute; inset: 0px 0px auto auto; margin: 0px;" 
	data-popper-placement="bottom-end">
		<!--begin::Menu item-->
		<div class="menu-item" style="display: flex; justify-content: space-between;">
			<div class="menu-content fs-6 text-gray-900 fw-bold px-6 py-4">Detalles</div>
			<button type="button" class="btn" @click="hideDropdownItem()"><i class="fas fa-times" style="font-size: 1.3em;"></i></button>
		</div>
		<!--end::Menu item-->
		<!--begin::Menu separator-->
		<div class="separator mb-3 opacity-75"></div>
		<!--end::Menu separator-->
		<div class="content-detalles">
			<template v-if="modo=='ver'">
				<template v-if="elemento">
					<template v-if="elemento.tipo=='lote'">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Nomenclatura: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.nombre" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Sección: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.seccion" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Manzana: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.manzana" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Lote: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.lote" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Superficie: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.superficie+' m2'" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Clasificacion: </span>
								<input class="form-control form-control-solid form_item" style="text-transform: capitalize;" type="text" :value="elemento.clasificacion" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Inmobiliaria: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.inmobiliaria" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator opacity-75"></div>
						<!--end::Menu separator-->
						<div class="menu-item px-3" v-if="elemento">
							<div class="menu-content fs-6 text-gray-900 fw-bold px-6 py-4">Polígono y Manzanero</div>
						</div>
						<!--begin::Menu item-->
						<div class="menu-item px-3" style="margin-top: -1em;" v-if="elemento">
							<div class="menu-content">
								<a v-if="elemento.archivo_poligono" target="_blank" :href="'https://saevalcas.mx/data/privada/inventario/poligono/'+elemento.archivo_poligono" class="btn btn-light-primary btn-sm px-4" style="margin-right: 0.4em;">
									<i class="fas fa-file-pdf" style="font-size: 1.4em; margin-right: 0.2em;"></i>VER POLÍGONO
								</a>
								<a v-else class="btn btn-light-secondary btn-sm px-4" style="margin-right: 0.4em; opacity: 0.3; cursor: not-allowed;">
									<i class="fas fa-file-pdf" style="font-size: 1.4em; margin-right: 0.2em;"></i>VER POLÍGONO
								</a>
								<a v-if="elemento.archivo_manzanero" target="_blank" :href="'https://saevalcas.mx/data/privada/inventario/manzanero/'+elemento.archivo_manzanero" class="btn btn-light-primary btn-sm px-4">
									<i class="fas fa-file-pdf" style="font-size: 1.4em; margin-right: 0.2em;"></i>VER MANZANERO
								</a>
								<a v-else class="btn btn-light-secondary btn-sm px-4" style="margin-right: 0.4em; opacity: 0.3; cursor: not-allowed;">
									<i class="fas fa-file-pdf" style="font-size: 1.4em; margin-right: 0.2em;"></i>VER MANZANERO
								</a>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator opacity-75"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a class="menu-link px-3" style="cursor: not-allowed;">
								<span class="menu-title text-gray-900 fs-7" style="margin-left: 0.5em;">
									<i class="fas fa-tools fs-6 text-gray-900" style="margin-right: 0.5em; width: 1.6em;"></i>
									<span class="fs-6 text-gray-900" style="margin-right: 0.5em;">Ficha Técnica</span>
								</span>
								<span class="menu-arrow"></span>
							</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator opacity-75"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a class="menu-link px-3" style="cursor: not-allowed;">
								<span class="menu-title text-gray-900 fs-6" style="margin-left: 0.5em;">
									<i class="fas fa-file-invoice-dollar fs-6 text-gray-900" style="margin-right: 0.5em; width: 1.6em;"></i>
									<span class="fs-6 text-gray-900" style="margin-right: 0.5em;">Condiciones de Financiamiento</span>
								</span>
								<span class="menu-arrow"></span>
							</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator opacity-75"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a class="menu-link px-3" style="cursor: not-allowed;">
								<span class="menu-title text-gray-900 fs-6" style="margin-left: 0.5em;">
									<i class="fa fa-hands-helping fs-6 text-gray-900" style="margin-right: 0.5em; width: 1.6em;"></i>
									<span class="fs-6 text-gray-900" style="margin-right: 0.5em;">Solicitudes de Propietario</span>
								</span>
								<span class="menu-arrow"></span>
							</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator opacity-75"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a class="menu-link px-3" style="cursor: not-allowed;">
								<span class="menu-title text-gray-900 fs-6" style="margin-left: 0.5em;">
									<i class="fa fa-balance-scale fs-6 text-gray-900" style="margin-right: 0.5em; width: 1.6em;"></i>
									<span class="fs-6 text-gray-900" style="margin-right: 0.5em;">Expediente Legal</span>
								</span>
								<span class="menu-arrow"></span>
							</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator opacity-75"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a class="menu-link px-3" style="cursor: not-allowed;">
								<span class="menu-title text-gray-900 fs-6" style="margin-left: 0.5em;">
									<i class="la la-file-invoice fs-2 text-gray-900" style="margin-right: 0.5em; width: 1.1em;"></i>
									<span class="fs-6 text-gray-900" style="margin-right: 0.5em;">Clave Catastral</span>
								</span>
								<span class="menu-arrow"></span>
							</a>
						</div>
						<!--end::Menu item-->
					</template>
					<template v-if="elemento.tipo=='amenidad'">
						<!--begin::Menu item-->
						<div class="menu-item px-3" v-if="elemento.clasificacion!='lote'">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Descripción: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.nombre" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Superficie: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.superficie+' m2'" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Clasificacion: </span>
								<input class="form-control form-control-solid form_item" style="text-transform: capitalize;" type="text" :value="elemento.clasificacion" readonly>
							</div>
						</div>
						<!--end::Menu item-->
					</template>
					<template v-if="elemento.tipo=='calle'">
						<!--begin::Menu item-->
						<div class="menu-item px-3" v-if="elemento.clasificacion!='lote'">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Descripción: </span>
								<input class="form-control form-control-solid form_item" type="text" :value="elemento.nombre" readonly>
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3 d-flex" style="justify-content: space-between;">
								<span style="margin-right: 0.5em; margin-block: auto;">Clasificacion: </span>
								<input class="form-control form-control-solid form_item" style="text-transform: capitalize;" type="text" :value="elemento.clasificacion" readonly>
							</div>
						</div>
						<!--end::Menu item-->
					</template>
				</template>
			</template>
		</div>
		<!--begin::Menu separator-->
		<div class="separator opacity-75"></div>
		<!--end::Menu separator-->
		<!--begin::Menu item-->
		<div class="menu-item px-3">
			<div class="menu-content px-3 py-3 d-flex" style="justify-content: space-between;">
				<a v-if="modo=='ver'" class="btn btn-light-primary btn-sm px-4" @click="hideDropdownItem()"><i class="fas fa-times" style="font-size: 1.8em;"></i> CERRAR</a>
				<!-- <a v-if="modo=='ver'" class="btn btn-primary btn-sm px-4"  @click="setModo('editar')"><i class="la la-edit" style="font-size: 1.8em;"></i> EDITAR</a> -->
				<a v-if="modo=='editar'" class="btn btn-primary btn-sm px-4" ><i class="la la-check" style="font-size: 1.8em;"></i> GUARDAR</a>
				<a v-if="modo=='editar'" class="btn btn-light-primary btn-sm px-4"  @click="setModo('ver')"><i class="fas fa-times" style="font-size: 1.8em;"></i> CANCELAR</a>
			</div>
		</div>
		<!--end::Menu item-->
	</form>
</div>
<script src="aplicacion/scripts/main.js?<?php echo filemtime(ROOT_DIR . 'aplicacion/scripts/main.js'); ?>"></script>
<!--end:::Main-->
<?php require_once(APP . '/vistas/inc/footer.php'); ?>		