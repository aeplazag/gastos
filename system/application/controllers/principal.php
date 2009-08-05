<?php

class Principal extends Controller {

	function Principal()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if ( $this->dx_auth->is_logged_in()) {
			$this->load->view('principal_view');
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}
}