<!DOCTYPE html>
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
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
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
											<?php 
												foreach ($listado_menu as $itemN1) {
											?>
												<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" 
												data-kt-menu-placement="bottom-start" class="menu-item <?php echo $itemN1['class']; ?> me-0 me-lg-2">
													<!--begin:Menu link-->
													<?php if($itemN1['ref']){?>
														<a class="menu-link py-3" href="<?php echo $itemN1['ref']; ?>">
															<span class="menu-title text-white"><?php echo $itemN1['title']; ?></span>
														</a>
													<?php } else {?>
														<a class="menu-link py-3">
															<span class="menu-title text-white"><?php echo $itemN1['title']; ?></span>
															<span class="menu-arrow"></span>
														</a>
													<?php } ?>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<?php if($itemN1['menu']){?>
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
														<!--begin:Menu item-->
														<?php 
															foreach ($itemN1['menu'] as $itemN2) {
														?>
															<div class="menu-item <?php echo $itemN2['class']; ?>" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start">
															<!--begin:Menu link-->
															<?php if($itemN2['ref']){?>
																<a class="menu-link py-3" href="<?php echo $itemN2['ref']; ?>">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title"><?php echo $itemN2['title']; ?></span>
																</a>
															<?php } else {?>
																<a class="menu-link py-3">
																	<span class="menu-icon" style="margin-left: -7px;">
																		<i class="fas fa-angle-right fs-4"></i>
																	</span>
																	<span class="menu-title"><?php echo $itemN2['title']; ?></span>
																</a>
															<?php } ?>
															<!--end:Menu link-->
															<!--begin:Menu sub-->
															<?php if($itemN2['menu']){?>
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																<!--begin:Menu item-->
																<?php 
																	foreach ($itemN2['menu'] as $itemN3) {
																?>
																	<div class="menu-item <?php echo $itemN3['class']; ?>" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start">
																	<!--begin:Menu link-->
																	<?php if($itemN3['ref']){?>
																		<a class="menu-link py-3" href="<?php echo $itemN3['ref']; ?>">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title"><?php echo $itemN3['title']; ?></span>
																		</a>
																	<?php } else {?>
																		<a class="menu-link py-3">
																			<span class="menu-icon" style="margin-left: -7px;">
																				<i class="fas fa-angle-right fs-4"></i>
																			</span>
																			<span class="menu-title"><?php echo $itemN3['title']; ?></span>
																		</a>
																	<?php } ?>
																	<!--end:Menu link-->
																	<!--begin:Menu sub-->
																	<?php if($itemN3['menu']){?>
																		<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																			<!--begin:Menu item-->
																			<?php 
																				foreach ($itemN3['menu'] as $itemN4) {
																			?>
																				<div class="menu-item">
																					<!--begin:Menu link-->
																					<?php if($itemN4['ref']){?>
																						<a class="menu-link py-3" href="<?php echo $itemN4['ref']; ?>">
																							<span class="menu-bullet">
																								<span class="bullet bullet-dot"></span>
																							</span>
																							<span class="menu-title"><?php echo $itemN4['title']; ?></span>
																						</a>
																					<?php } ?>
																					<!--end:Menu link-->
																				</div>
																			<?php } ?>
																			<!--end:Menu item-->
																		</div>
																	<?php } ?>
																	<!--end:Menu sub-->
																	</div>
																<?php } ?>
																<!--end:Menu item-->
																</div>
															<?php } ?>
															<!--end:Menu sub-->
															</div>
														<?php } ?>
														<!--end:Menu item-->
														</div>
													<?php } ?>
													<!--end:Menu sub-->
												</div>
											<?php
												}
											?>
											<!--end:Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="topbar d-none align-items-stretch flex-shrink-0 toolbar-vue">
									<!--begin::EXPORTAR-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu toggle-->
										<a v-if="vista_mapa=='medidas'" href="<?php echo STASIS;?>/data/docs/mapa_superficies.pdf" target="_blank" class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-file-right" style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<a v-else href="<?php echo STASIS;?>/data/docs/mapa_nomenclaturas.pdf" target="_blank" class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-file-right" style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
									</div>
									<!--end::EXPORTAR-->
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
									<!--begin::Filtrar Status-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-down-square" style="font-size: 1.6em !important;">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-200px" data-kt-menu="true" data-kt-element="filtrar-status">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0" v-for="(item, i) in listStatus" :key="i">
												<a :class="item.active?'menu-link px-3 py-2 active':'menu-link px-3 py-2'" @click="displayColorStatus(item.num)">
													<!-- <span class="menu-icon" data-kt-element="icon">
														<i :class="'fas fa-square fs-1 color-'+item.class"></i>
													</span> -->
													<span :class="'badge badge-'+item.class+' fs-8 fw-bold'" style="margin-right: 0.8em;">{{item.total}}</span>
													<span class="menu-title">{{item.title}}</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Filtrar Status-->
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
						