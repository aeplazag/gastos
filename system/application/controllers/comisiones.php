<?php

class Comisiones extends Controller {

	function Comisiones()
	{
		parent::Controller();	
	}
	
	function index() {
		if ( $this->dx_auth->is_logged_in()) {
			$this->load->view('comisiones');
		}
		else {
			redirect('/auth', 'location', 301);
		}	
	}
	
	function listar($pagina = 0) {
	}
	
	function agregar() {
	}
}