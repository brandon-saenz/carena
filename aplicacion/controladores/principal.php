<?php
final class Principal extends Controlador {

	function index() {
		// $acceso = $this->cargarModelo('acceso');
		// $rh_asistencia = $this->cargarModelo('Rh_Asistencia');

		// !$acceso->estaLoggeado()? $pagina = $this->redireccionar('./') : $pagina = $this->cargarVista('principal');

		// // echo json_encode($rh_asistencia->getUserCompromisos()); die;
		
		// $pagina->set('titulo', 'Administración Grupo Valcas');
		// $pagina->set('menu', 'principal');
		// $pagina->set('datos', $rh_asistencia->getUserCompromisos());
		// $pagina->set('empleados', $rh_asistencia->getEmpleados());
		// $pagina->set('temas', $rh_asistencia->getTemas());
		// $pagina->set('estaLoggeado', $acceso->estaLoggeado());
		// $pagina->renderizar();
		$pagina = $this->cargarVista('principal/page');
		$pagina->renderizar();
	}

}