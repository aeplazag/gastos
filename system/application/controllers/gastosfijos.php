<?php

class Gastosfijos extends Controller {

	function Gastosfijos()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if ( $this->dx_auth->is_logged_in()) {
			//$this->load->view('gastosfijos_view');
			redirect('/gastosfijos/listar', 'location', 301);
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}
	
	function listar($pagina = 0) {
		if ( $this->dx_auth->is_logged_in()) {

			$data = array();
			$this->load->model('gastosfijos_abm');
			$this->load->library('pagination');
			
			$config['total_rows'] = $this->gastosfijos_abm->cantidad();
			$config['base_url'] = site_url().'/gastosfijos/listar/';

			$this->config->load('pagination');
			$this->pagination->initialize($config);
			
			$data['pagination_links'] = $this->pagination->create_links();		
			$data['resultados'] = $this->gastosfijos_abm->obtener_gastosfijos($this->config->item('per_page'), $pagina);

			$this->load->view('gastosfijos_view', $data);
		}
		else {
			redirect('/auth', 'location', 301);
		}	
	}
	
	function agregar() {
		if (isset($_POST["campofecha"])) {
			$post = array (
				'campofecha' => $_POST["campofecha"],
				'camponombre' => $_POST["camponombre"],
				'campomonto' => $_POST["campomonto"],
				'campoobservaciones' => $_POST["campoobservaciones"]
			);
			$this->load->model('gastosfijos_abm');
			$this->gastosfijos_abm->agregar($post);				
			$this->load->view('gastosfijos_agregar_post');
		}
		else {
			$this->load->model('gastosfijos_abm');
			$data["arreglo_gastosfijos"] = $this->gastosfijos_abm->listado_gastosfijos();
			$this->load->view('gastosfijos_agregar', $data);
		}
	}
	
	function modificar($idgasto) {
		if (isset($_POST["campofecha"])) {
			$post = array (
				'FECHA' => $this->utilidades->fecha_mysql($_POST["campofecha"]),
				'NOMBRE' => $_POST["camponombre"],
				'MONTO' => $_POST["campomonto"],
				'OBSERVACIONES' => $_POST["campoobservaciones"]
			);
			$this->load->model('gastosfijos_abm');
			$this->gastosfijos_abm->modificar($post, $idgasto);				
			$this->load->view('gastosfijos_agregar_post');
		}
		else {
			$this->load->model('gastosfijos_abm');
			$data["arreglo_gastosfijos"] = $this->gastosfijos_abm->obtener_gasto($idgasto);
			$this->load->view('gastosfijos_modificar', $data);
		}		
	}
	
	function eliminar($idgasto) {
		
	}
	
}