<?php

class comisiones_abm extends Model {

	function comisiones_abm()
    {
        parent::Model();
    }
	
    function agregar($arreglo_post)
    {
		$this->load->database();
		$datos = array (
			'FECHAFACTURA' => $arreglo_post["campofechafactura"],
			'NROFAC' => $arreglo_post["camponrofac"],
			'IDCLIENTE' => $arreglo_post["campoidcliente"],
			'PXCOSTO' => $arreglo_post["campopxcosto"],
			'PXVENTA' => $arreglo_post["campopxventa"],
			'IVACOMPRA' => $arreglo_post["campoivacompra"],
			'IVAVENTA' => $arreglo_post['campoivaventa'],
			'COMISIONXVTA' => $arreglo_post['campocomisionxvta'],
			'GANANCIA' => $arreglo_post['campoganancia'],
			'IVADEBITO' => $arreglo_post['campoivadebito'],
			'COMENTARIO' => $arreglo_post['campocomentario']
		);
		$this->db->insert('itexa_comision', $datos); 		
    }
	
	function obtener_comisiones($cantidad, $desde) {
		$this->db->order_by("FECHAFACTURA","ASC");
		$query = $this->db->get('itexa_comision', $cantidad, $desde);	
		return $query;
	}
	
	function modificar ($arreglo_post, $param_id) {
/*
		$this->db->where('id', $param_id);
		$this->db->update('eon_rubro', $arreglo_post);
**/		
	}
	
	function eliminar ($param_id) {
/*
		$this->db->where('id', $param_id);
		$this->db->delete('eon_rubro'); 
*/		
	}
	
	function cantidad() {
		$query = $this->db->query("SELECT COUNT(*) AS CANTIDAD FROM itexa_comision");
		foreach ($query->result_array() as $row)
		{
			$resultado = $row['CANTIDAD'];
		}
		return $resultado;
	}
}

?>