<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Utilidades
 *
 * Funciones Varias
 *
 */
 
class Utilidades
{

	function fecha_normal($fecha){
		ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
		$lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
		return $lafecha;
	}
	
	function fecha_mysql($fecha){
		ereg( "([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha);
		$lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
		return $lafecha;
	}
	
	function mescadena($param_mes) {
		$res = "";
		switch ($param_mes) {
			case 1: $res = "Enero"; break;
			case 2: $res = "Febrero"; break;
			case 3: $res = "Marzo"; break;
			case 4: $res = "Abril"; break;
			case 5: $res = "Mayo"; break;
			case 6: $res = "Junio"; break;
			case 7: $res = "Julio"; break;
			case 8: $res = "Agosto"; break;
			case 9: $res = "Septiembre"; break;
			case 10: $res = "Octubre"; break;
			case 11: $res = "Noviembre"; break;
			case 12: $res = "Diciembre"; break;
		}
		return $res;
	}
	
}

?>