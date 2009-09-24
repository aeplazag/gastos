<?php

class Gastosfijos extends Controller {

	function Gastosfijos()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if ( $this->dx_auth->is_logged_in()) {
			$this->load->view('gastosfijos_view');
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}
	
	function agregar() {
		
	}
	
	function modificar($idgasto) {
		
	}
	
	function eliminar($idgasto) {
		
	}
	
}