<?php

class Comisiones extends Controller {

	function Comisiones()
	{
		parent::Controller();	
	}
	
	function index() {
	}
	
	function listar($pagina = 0) {
		if ( $this->dx_auth->is_logged_in()) {

			$data = array();
			$this->load->model('comisiones_abm');
			$this->load->library('pagination');
			
			$config['total_rows'] = $this->comisiones_abm->cantidad();
			$config['base_url'] = site_url().'/comisiones/listar/';

			$this->config->load('pagination');
			$this->pagination->initialize($config);
			
			$data['pagination_links'] = $this->pagination->create_links();		
			$data['resultados'] = $this->comisiones_abm->obtener_comisiones($this->config->item('per_page'), $pagina);

			$this->load->view('comisiones_listar', $data);
		}
		else {
			redirect('/auth', 'location', 301);
		}	
	}
	
	function agregar() {
		if ( $this->dx_auth->is_logged_in()) {
			if (isset($_POST["campofechafactura"])) {
				$post = array (
					'campofechafactura' => $_POST["campofechafactura"],
					'camponrofac' => $_POST["camponrofac"],
					'campoidcliente' => $_POST["campoidcliente"],
					'campopxcosto' => $_POST["campopxcosto"],
					'campopxventa' => $_POST["campopxventa"],
					'campoivacompra' => $_POST["campoivacompra"],
					'campoivaventa' => $_POST["campoivaventa"],
					'campocomisionxvta' => $_POST['campocomisionxvta'],
					'campoganancia' => $_POST['campoganancia'],
					'campoivadebito' => $_POST['campoivadebito'],
					'campocomentario' => $_POST['campocomentario']
				);
				$this->load->model('comisiones_abm');
				$this->comisiones_abm->agregar($post);				
				$this->load->view('comisiones_agregar_post');
			}
			else {
				$this->load->view('comisiones_agregar');
			}
		}
		else {
			redirect('/auth', 'location', 301);
		}		
	}
}