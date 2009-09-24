<?php

class Gastosvarios extends Controller {

	function Gastosvarios()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if ( $this->dx_auth->is_logged_in()) {
			$this->load->view('gastosotros_view');
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}
	
}