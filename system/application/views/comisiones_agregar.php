<?
	include("inc_cabecera.php");
?>

<script type="text/javascript">
	$(function() {
		$('#campofechafactura').datepicker({
			showButtonPanel: true,
			regional: es
		});
		
	});
</script>


	<div class="grid_12" id="cuerpo">

		<h2>Comisiones - Agregar</h2>
		
		<fieldset><legend>Por favor complete el siguiente formulario. Tenga en cuenta los campos obligatorios.</legend>
		<?php 
			//$att = array('class' => 'formular', 'id' => 'formagregar');
			echo form_open($this->uri->uri_string());
		?>
			<dl>
				<dt>ARREGLAAAAAAAAAAAAAAAAAAARRR !!Fecha de la Factura:</dt>
					<dd><input tabindex="1" name="campofechafactura" type="text" class="validate[required,length[0,10]]" id="campofechafactura" size="20" /></dd>

				<dt>Numero de Factura:</dt>
					<dd><input tabindex="2" name="camponumerofac" type="text" class="validate[optional,length[0,150]]" id="camponrofac" size="30" /></dd>

			</dl>
		<?php echo form_close()?>
		</fieldset>
		
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>