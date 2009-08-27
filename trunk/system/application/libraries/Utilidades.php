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
	
}

?>