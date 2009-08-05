<?php

class clientes_abm extends Model {

	function clientes_abm()
    {
        parent::Model();
    }
	
    function agregar($arreglo_post)
    {
		$this->load->database();
		$datos = array (
			'NOMBRE' => $arreglo_post["camponombre"],
			'ENCARGADO' => $arreglo_post["campoencargado"],
			'CUIT' => $arreglo_post["campocuit"],
			'INGRESOSBRUTOS' => $arreglo_post["campoib"],
			'DIRECCION' => $arreglo_post["campodireccion"],
			'TELEFONO' => $arreglo_post["campotelefono"],
			'CELULAR' => $arreglo_post['campocelular'],
			'EMAIL' => $arreglo_post['campoemail']
		);
		$this->db->insert('itexa_cliente', $datos); 		
    }
	
	function obtener_clientes($cantidad, $desde) {
		$this->db->order_by("NOMBRE","ASC");
		$query = $this->db->get('itexa_cliente', $cantidad, $desde);	
		return $query;
	}
	
	function modificar ($arreglo_post, $param_id) {
		$this->db->where('id', $param_id);
		$this->db->update('eon_rubro', $arreglo_post);
	}
	
	function eliminar ($param_id) {
		$this->db->where('id', $param_id);
		$this->db->delete('eon_rubro'); 
	}
	
	function cantidad() {
		$query = $this->db->query("SELECT COUNT(*) AS CANTIDAD FROM itexa_cliente");
		foreach ($query->result_array() as $row)
		{
			$resultado = $row['CANTIDAD'];
		}
		return $resultado;
	}
}

?>