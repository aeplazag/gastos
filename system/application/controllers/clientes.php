<?php

class Clientes extends Controller {

	function Clientes()
	{
		parent::Controller();	
	}
	
	function index() {
	}
	
	function listar($pagina = 0) {
		if ( $this->dx_auth->is_logged_in()) {

			$data = array();
			$this->load->model('clientes_abm');
			$this->load->library('pagination');
			
			$config['total_rows'] = $this->clientes_abm->cantidad();
			$config['base_url'] = site_url().'/clientes/listar/';

			$this->config->load('pagination');
			$this->pagination->initialize($config);
			
			$data['pagination_links'] = $this->pagination->create_links();		
			$data['resultados'] = $this->clientes_abm->obtener_clientes($this->config->item('per_page'), $pagina);

			$this->load->view('clientes_listar', $data);
		}
		else {
			redirect('/auth', 'location', 301);
		}	
	}
	
	function agregar() {
		if ( $this->dx_auth->is_logged_in()) {
			if (isset($_POST["camponombre"])) {
				$post = array (
					'camponombre' => $_POST["camponombre"],
					'campoencargado' => $_POST["campoencargado"],
					'campocuit' => $_POST["campocuit"],
					'campoib' => $_POST["campoib"],
					'campodireccion' => $_POST["campodireccion"],
					'campotelefono' => $_POST["campotelefono"],
					'campocelular' => $_POST['campocelular'],
					'campoemail' => $_POST['campoemail']
				);
				$this->load->model('clientes_abm');
				$this->clientes_abm->agregar($post);				
				$this->load->view('clientes_agregar_post');
			}
			else {
				$this->load->view('clientes_agregar');
			}
		}
		else {
			redirect('/auth', 'location', 301);
		}		
	}
}