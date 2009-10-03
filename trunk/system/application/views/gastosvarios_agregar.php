<?
	include("inc_cabecera.php");
?>

<script type="text/javascript">

	$(document).ready(function(){	
		$.datepicker.setDefaults($.extend({showMonthAfterYear: false}, $.datepicker.regional['']));
		$("#campofecha").datepicker($.datepicker.regional['es']);
		$('#campofecha').datepicker('option', $.extend({showMonthAfterYear: false}, $.datepicker.regional['es']));
	});
	
</script>


	<div class="grid_12" id="cuerpo">

		<h2>Gastos Varios - Agregar</h2>
		
		<fieldset><legend>Por favor complete el siguiente formulario. Tenga en cuenta los campos obligatorios.<br />Los numeros deben ser ingresados sin simbolo $ y con coma en caso de ser numeros con decimal</legend>
		
		<?php 
			//$att = array('class' => 'formular', 'id' => 'formagregar');
			echo form_open($this->uri->uri_string());
		?>
			<dl>
				<dt>Fecha:</dt>
					<dd><input tabindex="1" name="campofecha" type="text" class="validate[required,length[0,10]]" id="campofecha" size="20" /></dd>

				<dt>Concepto:</dt>
					<dd><input tabindex="2" name="camponombre" type="text" class="validate[required,length[0,150]]" id="camponombre" size="45" /></dd>
										
				<dt>Monto:</dt>
					<dd><input tabindex="3" name="campomonto" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campomonto" size="15" /></dd>

				<dt>Observaciones:</dt>
					<dd><textarea tabindex="4" name="campoobservaciones" cols="30" class="validate[optional]" rows="4" id="campoobservaciones"></textarea></dd>

				<dt>&nbsp;</dt>	
					<dd><input tabindex="5" name="butAdd" type="submit" id="butAdd" value="Agregar" /></dd>
					
			</dl>
		<?php echo form_close()?>
		</fieldset>
		
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>