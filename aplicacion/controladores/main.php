<?php
final class Main extends Controlador {

	function index() {
		// $acceso = $this->cargarModelo('acceso');
		// !$acceso->estaLoggeado()? $pagina = $this->redireccionar('./') : $pagina = $this->cargarVista('principal');
		$header = $this->cargarModelo('Header');


		// echo json_encode($dataMenu->getListado()); die;
		
		// $pagina->set('titulo', 'Administración Grupo Valcas');
		// $pagina->set('menu', 'principal');
		// $pagina->set('datos', $rh_asistencia->getUserCompromisos());
		// $pagina->set('empleados', $rh_asistencia->getEmpleados());
		// $pagina->set('estaLoggeado', $acceso->estaLoggeado());
		// $pagina->renderizar();
		$pagina = $this->cargarVista('main/page');
		$pagina->set('listado_menu', $header->getMenu());
		$pagina->renderizar();
	}
	
}