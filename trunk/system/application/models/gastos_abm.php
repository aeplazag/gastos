<?php

class gastos_abm extends Model {

	function gastos_abm()
    {
        parent::Model();
    }
	
    function agregar($arreglo_post) {
		$this->load->database();
		$datos = array (
			'NOMBRE' => $arreglo_post["camponombre"],
			'FECHA' => $this->utilidades->fecha_mysql($arreglo_post["campofecha"]),
			'MONTO' => $arreglo_post["campomonto"],
			'OBSERVACIONES' => nl2br($arreglo_post["campoobservaciones"]),
			'TIPO' => $arreglo_post["campotipo"]
		);
		$this->db->insert('itexa_gastos', $datos); 		
    }

	function cantidad($tipo = 'varios') {
		if ($tipo == 'varios') {
			$query = $this->db->query("SELECT COUNT(*) AS CANTIDAD FROM itexa_gastos WHERE TIPO=1");
		}
		else {
			$query = $this->db->query("SELECT COUNT(*) AS CANTIDAD FROM itexa_gastos WHERE TIPO=0");
		}
		
		foreach ($query->result_array() as $row) {
			$resultado = $row['CANTIDAD'];
		}
		return $resultado;
	}

	function obtener_gastos($tipo, $cantidad, $desde) {
		$this->db->order_by("NOMBRE","ASC");
		if ($tipo == 'varios') {
			$this->db->where('TIPO', 1);
		}
		else {
			$this->db->where('TIPO', 0);
		}
		$query = $this->db->get('itexa_gastos', $cantidad, $desde);	
		return $query;
	}

	function listado_gastos($tipo) {
		$this->db->order_by("NOMBRE","ASC");
		if ($tipo == 'varios') {
			$this->db->where('TIPO', 1);
		}
		else {
			$this->db->where('TIPO', 0);
		}	
		$query = $this->db->query("SELECT * FROM itexa_gastos");
		return $query;
	}
	
	function modificar ($arreglo_post, $param_id) {
		$this->db->where('id', $param_id);
		$this->db->update('itexa_gastos', $arreglo_post);
	}

	function eliminar($param_id) {
		$this->db->where('id', $param_id);
		$this->db->delete('itexa_gastos'); 
	}

	function obtener_gasto($idgasto) {
		$query = $this->db->query("SELECT * FROM itexa_gastos WHERE ID=$idgasto");
		return $query;
	}

/*	
	
	function gastosfijos_modificar($arreglo_post, $idgasto) {
		$this->db->where('id', $param_id);
		$this->db->update('itexa_gastosfijos', $arreglo_post);
	}

		
*/
	
}

?>