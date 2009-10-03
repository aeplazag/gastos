<?php

class Comisiones extends Controller {

	function Comisiones()
	{
		parent::Controller();	
	}
	
	function index() {
	}
	
	function listar($pagina = 0) {
	/*
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
	*/
		$anio = date("Y");
		$mes = date("n");
		redirect("/comisiones/listar_mes/$anio/$mes", "location", 301);		
	}
	
	function listar_mes ($param_anio, $param_mes) {
		if ( $this->dx_auth->is_logged_in()) {
			$data = array();
			$this->load->model('comisiones_abm');
			$data['resultados'] = $this->comisiones_abm->obtener_comisiones_mes($param_anio, $param_mes);
			$data['param_anio'] = $param_anio;
			$data['param_mes'] = $param_mes;
			$this->load->view('comisiones_listar_mes', $data);		
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
					'camponumerofac' => $_POST["camponumerofac"],
					'campocliente' => $_POST["campocliente"],
					'campopreciocosto' => $_POST["campopreciocosto"],
					'campoprecioventa' => $_POST["campoprecioventa"],
					'campoivacompra' => $_POST["campoivacompra"],
					'campoivaventa' => $_POST["campoivaventa"],
					'campocomisionxvta' => $_POST['campocomisionxvta1'],
					'campogananciacash' => $_POST['campogananciacash1'],
					'campoivadebito' => $_POST['campoivadebito1'],
					'campocomentario' => $_POST['campocomentario']
				);
				$this->load->model('comisiones_abm');
				$this->comisiones_abm->agregar($post);				
				$this->load->view('comisiones_agregar_post');
			}
			else {
				$this->load->model('clientes_abm');
				$data["arreglo_clientes"] = $this->clientes_abm->listado_clientes();
				$this->load->view('comisiones_agregar', $data);
			}
		}
		else {
			redirect('/auth', 'location', 301);
		}		
	}
}