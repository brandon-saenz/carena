<?php
class Login extends Controlador {

	function index() {
		$pagina = $this->cargarVista('login');
		$pagina->renderizar();
	}
}