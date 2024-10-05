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
					<path :data-index="i" v-if="item.tipo_elemento === 'path'" :key="i" :d="item.points" 
					:class="'item_map '+item.class+' lote_status-'+item.color_status" :style="item.color_persistente?'opacity: 0.7;':''"/>
					<polygon :data-index="i" v-else-if="item.tipo_elemento === 'polygon'" :key="i" :points="item.points" 
					:class="'item_map '+item.class+' lote_status-'+item.color_status" :style="item.color_persistente?'opacity: 0.7;':''"/>
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
								<span style="margin-right: 0.5em; margin-block: auto;">Status: </span>
								<input :class="'form-control form-control-solid form_item text-white lote_status-'+elemento.color_status" type="text" :value="elemento.label_status" readonly>
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
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-bs-toggle="modal" data-bs-target="#ver_ficha_tecnica">
							<a class="menu-link px-3" style="cursor: pointer;">
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
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-bs-toggle="modal" data-bs-target="#ver_condiciones_financ">
							<a class="menu-link px-3" style="cursor: pointer;">
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
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-bs-toggle="modal" data-bs-target="#ver_solicitudes">
							<a class="menu-link px-3" style="cursor: pointer;">
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
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-bs-toggle="modal" data-bs-target="#ver_exp_legal">
							<a class="menu-link px-3" style="cursor: pointer;">
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
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-bs-toggle="modal" data-bs-target="#ver_catastro">
							<a class="menu-link px-3" style="cursor: pointer;">
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
				<template v-if="elemento">
					<template v-if="elemento.tipo=='lote'">
						<template v-if="elemento.status!=2">
							<a v-if="modo=='ver'" class="btn btn-light-primary btn-sm px-4" target="_blank" href="https://saevalcas.mx/carena/ventas/ofertas_compra/nueva">
								<i class="ki-duotone ki-price-tag" style="font-size: 1.65rem !important;">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>	
								<span>GENERAR OFERTA DE COMPRA</span>
							</a>
						</template>
						<template v-else>
							<a v-if="modo=='ver'" class="btn btn-light-secondary btn-sm px-4" style="opacity: 0.6;">
								<i class="ki-duotone ki-price-tag" style="font-size: 1.65rem !important;">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>	
								<span>GENERAR OFERTA DE COMPRA</span>
							</a>
						</template>
					</template>
				</template>
			</div>
		</div>
		<!--end::Menu item-->
	</form>


	<div class="modal fade" tabindex="-1" id="ver_ficha_tecnica">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header" style="justify-content: space-between;">
					<h3 class="modal-title">Ficha Técnica</h3>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<label class="btn btn-outline btn-outline-dashed p-7 d-flex align-items-center mb-5" style="cursor: default;">
						<i class="ki-duotone ki-information-3 fs-4x me-4">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
						</i>
						<span class="d-block fw-semibold text-start">                            
							<span class="text-gray-900 fw-bold d-block fs-3">Servicios de Infraestructura No Disponibles</span>
							<span class="text-muted fw-semibold fs-6">
								Éste lote aún no cuenta con los servicios de infraestructura disponible.
							</span>
						</span>
					</label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">REGRESAR</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" id="ver_condiciones_financ">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header" style="justify-content: space-between;">
					<h3 class="modal-title">Condiciones de Financiamiento</h3>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body" style="padding-inline: 0.5em;">
					<div class="card" style="box-shadow: unset; border: 0; border-radius: 0; padding: 0; margin: 0;">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Precios por M<sup>2</sup></span>
								<span class="text-muted mt-1 fw-semibold fs-7">En relación al porcentaje de enganche</span>
							</h3>
							<div class="card-toolbar">
								<a class="btn btn-sm btn-light-success btn-active-light-success" style="cursor: default;">
									Precio M<sup>2</sup> de lista {{precio_m2}}
								</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-3">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr class="fw-bold text-muted">
											<th class="w-50px text-center">
												<i class="ki-duotone ki-percentage fs-2x">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</th>
											<th class="min-w-200px text-center"><span style="line-height: 2.4em;">VALOR M<sup>2</sup></span></th>
											<th class="min-w-150px text-center"><span style="line-height: 2.4em;">PRECIO POR LOTE</span></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody>
										<tr v-for="item in financiamiento">
											<td>
												<a class="text-gray-900 fw-bold text-hover-primary d-block fs-6 text-center">{{item.porcentaje}}%</a>
											</td>
											<td>
												<a class="text-gray-900 fw-bold text-hover-primary d-block fs-6 text-center">{{item.valor_m2}}</a>
											</td>
											<td>
												<a class="text-gray-900 fw-bold text-hover-primary d-block fs-6 text-center">{{item.precio_lote}}</a>
											</td>
										</tr>
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--begin::Body-->
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">REGRESAR</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" id="ver_solicitudes">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header" style="justify-content: space-between;">
					<h3 class="modal-title">Solicitudes de Propietario</h3>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<label class="btn btn-outline btn-outline-dashed p-7 d-flex align-items-center mb-5" style="cursor: default;">
						<i class="ki-duotone ki-information-3 fs-4x me-4">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
						</i>
						<span class="d-block fw-semibold text-start">                            
							<span class="text-gray-900 fw-bold d-block fs-3">Disponibilidad de Solicitudes</span>
							<span class="text-muted fw-semibold fs-6">
								Éste lote necesita de un propietario registrado y validado para poder realizar solicitudes.
							</span>
						</span>
					</label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">REGRESAR</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" id="ver_exp_legal">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header" style="justify-content: space-between;">
					<h3 class="modal-title">Expediente Legal</h3>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<label class="btn btn-outline btn-outline-dashed p-7 d-flex align-items-center mb-5" style="cursor: default;">
						<i class="ki-duotone ki-information-3 fs-4x me-4">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
						</i>
						<span class="d-block fw-semibold text-start">                            
							<span class="text-gray-900 fw-bold d-block fs-3">Disponibilidad de Expediente</span>
							<span class="text-muted fw-semibold fs-6">
								Éste lote no contiene un expediente diponible.
							</span>
						</span>
					</label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">REGRESAR</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" id="ver_catastro">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header" style="justify-content: space-between;">
					<h3 class="modal-title">Clave Catastral</h3>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<label class="btn btn-outline btn-outline-dashed p-7 d-flex align-items-center mb-5" style="cursor: default;">
						<i class="ki-duotone ki-information-3 fs-4x me-4">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
						</i>
						<span class="d-block fw-semibold text-start">                            
							<span class="text-gray-900 fw-bold d-block fs-3">Disponibilidad de Clave Catastral</span>
							<span class="text-muted fw-semibold fs-6">
								No existe un proceso de subdivisión para la obtención de clave catastral en éste lote.
							</span>
						</span>
					</label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">REGRESAR</button>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="loading-mapa" style="width: 100%; height: 100%; display: flex; justify-content: center;">
	<button type="button" class="btn" data-kt-indicator="on">
		<span class="indicator-progress fs-1">
			Cargando Mapa... <span class="spinner-border spinner-border-page spinner-page align-middle ms-2"></span>
		</span>
	</button>
</div>
<script src="aplicacion/scripts/main.js?<?php echo filemtime(ROOT_DIR . 'aplicacion/scripts/main.js'); ?>"></script>
<!--end:::Main-->
<?php require_once(APP . '/vistas/inc/footer.php'); ?>		