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
			'FECHAFACTURA' => $this->utilidades->fecha_mysql($arreglo_post["campofechafactura"]),
			'NROFAC' => $arreglo_post["camponumerofac"],
			'IDCLIENTE' => $arreglo_post["campocliente"],
			'PXCOSTO' => $arreglo_post["campopreciocosto"],
			'PXVENTA' => $arreglo_post["campoprecioventa"],
			'IVACOMPRA' => $arreglo_post["campoivacompra"],
			'IVAVENTA' => $arreglo_post['campoivaventa'],
			'COMISIONXVTA' => $arreglo_post['campocomisionxvta'],
			'GANANCIA' => $arreglo_post['campogananciacash'],
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

	function obtener_comisiones_mes($param_anio, $param_mes) {
		$this->db->order_by("FECHAFACTURA","ASC");
		if ($param_mes == 0) {
			$params = array(
				'YEAR(FECHAFACTURA)' => $param_anio
			);
			$query = $this->db->get_where('itexa_comision', $params);
			return $query;			
		}
		else {
			$params = array(
				'MONTH(FECHAFACTURA)' => $param_mes,
				'YEAR(FECHAFACTURA)' => $param_anio
			);
			$query = $this->db->get_where('itexa_comision', $params);
			return $query;
		}
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