<?php

class Gastos extends Controller {

	function Gastos()
	{
		parent::Controller();	
	}
	
	function index() {
	}
	
	function seleccionar_agregar() {
		if ( $this->dx_auth->is_logged_in()) {
			$this->load->view('gastos_seleccionar_agregar_view.php');
		}
		else {
			redirect('/auth', 'location', 301);
		}	
	}	
	
	function listar($tipo = 'varios', $pagina = 0) {
		if ( $this->dx_auth->is_logged_in()) {

			$data = array();
			$this->load->model('gastos_abm');
			$this->load->library('pagination');
			$config['base_url'] = site_url()."/gastos/listar/$tipo";
			
			if ($tipo == 'fijos') {
				$config['total_rows'] = $this->gastos_abm->cantidad($tipo);
				$this->config->load('pagination');
				$this->pagination->initialize($config);
				$data['pagination_links'] = $this->pagination->create_links();
				$data['resultados'] = $this->gastos_abm->obtener_gastos($tipo, $this->config->item('per_page'), $pagina);
				$this->load->view('gastosfijos_view', $data);			
			}
			else {
				$config['total_rows'] = $this->gastos_abm->cantidad($tipo);
				$this->config->load('pagination');
				$this->pagination->initialize($config);
				$data['pagination_links'] = $this->pagination->create_links();
				$data['resultados'] = $this->gastos_abm->obtener_gastos($tipo, $this->config->item('per_page'), $pagina);
				$this->load->view('gastosvarios_view', $data);			
			}

		}
		else {
			redirect('/auth', 'location', 301);
		}	
	}

	function agregar($tipo) {
		if ( $this->dx_auth->is_logged_in()) {
			if (isset($_POST["campofecha"])) {
				$campotipo = $tipo == 'varios' ? "1" : "0";
				$post = array (
					'campofecha' => $_POST["campofecha"],
					'camponombre' => $_POST["camponombre"],
					'campomonto' => $_POST["campomonto"],
					'campoobservaciones' => $_POST["campoobservaciones"],
					'campotipo' => $campotipo
				);
				$this->load->model('gastos_abm');
				$this->gastos_abm->agregar($post);				
				$this->load->view('gastos_agregar_post');
			}
			else {
				//$this->load->model('gastos_abm');
				//$data["arreglo_gastos"] = $this->gastos_abm->listado_gastos($tipo);
				//$this->load->view('gastos_agregar', $data);
				if ($tipo == 'varios') {
					$this->load->view("gastosvarios_agregar");
				}
				else {
					$this->load->view("gastosfijos_agregar");				
				}
			}
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}

	function modificar($idgasto) {
		if ( $this->dx_auth->is_logged_in()) {
			if (isset($_POST["campofecha"])) {
				$post = array (
					'FECHA' => $this->utilidades->fecha_mysql($_POST["campofecha"]),
					'NOMBRE' => $_POST["camponombre"],
					'MONTO' => $_POST["campomonto"],
					'OBSERVACIONES' => $_POST["campoobservaciones"]
				);
				$this->load->model('gastos_abm');
				$this->gastos_abm->modificar($post, $idgasto);				
				$this->load->view('gastos_agregar_post');
			}
			else {
				$this->load->model('gastos_abm');
				$data["arreglo_gasto"] = $this->gastos_abm->obtener_gasto($idgasto);
				$this->load->view('gastos_modificar', $data);
			}		
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}
	
	function eliminar($idgasto) {
		if ( $this->dx_auth->is_logged_in()) {
			$this->load->model('gastos_abm');
			$this->gastos_abm->eliminar($idgasto);
			$this->load->view('gastos_eliminar_post');
		}
		else {
			redirect('/auth', 'location', 301);
		}
	}
	
}