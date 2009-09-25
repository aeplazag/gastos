<?php

class gastosfijos_abm extends Model {

	function gastosfijos_abm()
    {
        parent::Model();
    }
	
    function agregar($arreglo_post) {
		$this->load->database();
		$datos = array (
			'NOMBRE' => $arreglo_post["camponombre"],
			'FECHA' => $this->utilidades->fecha_mysql($arreglo_post["campofecha"]),
			'MONTO' => $arreglo_post["campomonto"],
			'OBSERVACIONES' => nl2br($arreglo_post["campoobservaciones"])
		);
		$this->db->insert('itexa_gastosfijos', $datos); 		
    }
	
	function obtener_gastosfijos($cantidad, $desde) {
		$this->db->order_by("NOMBRE","ASC");
		$query = $this->db->get('itexa_gastosfijos', $cantidad, $desde);	
		return $query;
	}

	function obtener_gasto($idgasto) {
		$query = $this->db->query("SELECT * FROM itexa_gastosfijos WHERE ID=$idgasto");
		return $query;
	}
	
	function gastosfijos_modificar($arreglo_post, $idgasto) {
		$this->db->where('id', $param_id);
		$this->db->update('itexa_gastosfijos', $arreglo_post);
	}

	function modificar ($arreglo_post, $param_id) {
		$this->db->where('id', $param_id);
		$this->db->update('itexa_gastosfijos', $arreglo_post);
	}

	function eliminar($param_id) {
		$this->db->where('id', $param_id);
		$this->db->delete('itexa_gastosfijos'); 
	}
	
	function cantidad() {
		$query = $this->db->query("SELECT COUNT(*) AS CANTIDAD FROM itexa_gastosfijos");
		foreach ($query->result_array() as $row)
		{
			$resultado = $row['CANTIDAD'];
		}
		return $resultado;
	}
	
	function listado_gastosfijos() {
		$this->db->order_by("NOMBRE","ASC");
		$query = $this->db->query("SELECT * FROM itexa_gastosfijos");
		return $query;
	}
	
}

?>