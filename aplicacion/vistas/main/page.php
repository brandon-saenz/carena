<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.4
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Mapa Carena</title>
		<base href="<?php echo STASIS; ?>/">
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="SAE VALCAS" />
        <meta property="og:url" content="https://saevalcas.mx" />
        <meta property="og:site_name" content="GRUPO VALCAS" />
        <link rel="canonical" href="https://saevalcas.mx" />
        <link rel="shortcut icon" href="img/favicon.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?<?php echo filemtime(ROOT_DIR . 'static/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css?<?php echo filemtime(ROOT_DIR . 'static/assets/plugins/custom/datatables/datatables.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css?<?php echo filemtime(ROOT_DIR . 'static/assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css?<?php echo filemtime(ROOT_DIR . 'static/assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<link href="assets/css/new.css?<?php echo filemtime(ROOT_DIR . 'static/assets/css/new.css'); ?>" rel="stylesheet" type="text/css" />
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
		<script
			src="https://code.jquery.com/jquery-3.6.1.js"
			integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
			crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js">Vue.config.silent = true</script>
		<script src="https://cdn.jsdelivr.net/npm/easyqrcodejs@4.6.1/dist/easy.qrcode.min.js"></script>
		<script src="https://hammerjs.github.io/dist/hammer.min.js"></script>

		<script> var STASIS = '<?php echo STASIS;?>';</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
		</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div id="mapa" class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch mb-5 mb-lg-10" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '0px', lg: '0px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center">
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Header Logo-->
							<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
								<a href="<?php echo STASIS;?>">
									<img alt="Logo" src="img/logo_color.png" class="logo-default h-35px" />
									<img alt="Logo" src="img/logo_color.png" class="logo-sticky h-35px" />
								</a>
							</div>
							<!--end::Header Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
										<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
												<!--begin:Menu link-->
												<a class="menu-link py-3" href="<?php echo STASIS;?>">
													<span class="menu-title">Inicio</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="topbar d-none align-items-stretch flex-shrink-0 toolbar-vue">
									<!--begin::Ver Medidas-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu toggle-->
										<a class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" 
										@click="setVistaMapa()" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-design-frame" v-if="vista_mapa=='medidas'" style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<i class="ki-duotone ki-note-2" v-else style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
									</div>
									<!--end::Ver Medidas-->
									<!--begin::Theme mode-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-night-day theme-light-show" style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
											<i class="ki-duotone ki-moon theme-dark-show" style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Theme mode-->
									<!--begin::User-->
									<div class="d-flex align-items-center me-lg-n2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img class="h-30px w-30px rounded" src="assets/media/avatars/blank.png" alt="" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="assets/media/avatars/blank.png" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5">Marlon Anguiano
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">procesos@grupovalcas.mx</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="<?php echo STASIS;?>" class="menu-link px-5">Cerrar Sesión</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User -->
									<!--begin::Aside mobile toggle-->
									<!--end::Aside mobile toggle-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start">
						
						<!--begin::Main-->
						<div class="mapa d-none">
							<div id="btns_zoom">
								<a class="btn btn-icon btn-primary" @click="zoom('mas')"><i class="fas fa-plus" style="font-size: 1.8em;"></i></a>
								<a class="btn btn-icon btn-primary" @click="zoom('menos')"><i class="fas fa-minus" style="font-size: 1.8em;"></i></a>
								<a class="btn btn-icon btn-primary" @click="zoom('')"><i class="fas fa-undo-alt" style="font-size: 1.8em;"></i></a>
							</div>

							
							<div class="div-center" style="height: 100vh;">
								<img src="img/bg_carena.png" class="bg-carena">
								<img src="img/carena_logo.png" id="logo_map">
								<div class="content-map">
									<!--  -->
									<img src="img/bg_mapa.svg" class="svg_map">
									<img src="img/mapa_nomenclaturas.svg" :class="vista_mapa=='nomenclaturas'?'svg_map':'d-none svg_map'">
									<img src="img/mapa_superficies.svg" :class="vista_mapa=='medidas'?'svg_map':'d-none svg_map'">
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
														<a class="btn btn-light-primary btn-sm px-4" style="margin-right: 0.4em;"><i class="fas fa-file-pdf" style="font-size: 1.4em; margin-right: 0.2em;"></i>VER POLÍGONO</a>
														<a class="btn btn-light-primary btn-sm px-4"><i class="fas fa-file-pdf" style="font-size: 1.4em; margin-right: 0.2em;"></i>VER MANZANERO</a>
													</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator opacity-75"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
													<a class="menu-link px-3">
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
													<a class="menu-link px-3">
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
													<a class="menu-link px-3">
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
													<a class="menu-link px-3">
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
													<a class="menu-link px-3">
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
						<!--end:::Main-->
						
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
		<script src="assets/js/scripts.bundle.js"></script>
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
		<script src="aplicacion/scripts/main.js?<?php echo filemtime(ROOT_DIR . 'aplicacion/scripts/main.js'); ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>