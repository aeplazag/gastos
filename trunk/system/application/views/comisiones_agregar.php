<?
	include("inc_cabecera.php");
?>

<script type="text/javascript">
	$(document).ready(function(){
		$.datepicker.setDefaults($.extend({showMonthAfterYear: false}, $.datepicker.regional['']));
		$("#campofechafactura").datepicker($.datepicker.regional['es']);
		$('#campofechafactura').datepicker('option', $.extend({showMonthAfterYear: false}, $.datepicker.regional['es']));
/*
		var dateFormat = $('#campofechafactura').datepicker('option', 'dateFormat'); 
		$('#campofechafactura').datepicker('option', 'dateFormat', 'dd-mm-yy');		
*/		
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
				<dt>Fecha de la Factura:</dt>
					<dd><input tabindex="1" name="campofechafactura" type="text" class="validate[required,length[0,10]]" id="campofechafactura" size="20" /></dd>

				<dt>Numero de Factura:</dt>
					<dd><input tabindex="2" name="camponumerofac" type="text" class="validate[optional,length[0,150]]" id="camponrofac" size="30" /></dd>
					
					
				<dt>Cliente:</dt>
					<dd><select tabindex="3" name="campocliente" id="campocliente">
					  <option value="-1">== SELECCIONAR CLIENTE ==</option>
				<?
					foreach ($arreglo_clientes->result_array() as $row) {
						//print_r ($row);
						echo '<option value="'.$row["ID"].'">'.$row["NOMBRE"].' - CUIT('.$row["CUIT"].')</option>';
					}
				?>	
					</select></dd>	
					
				<dt>Precio de Costo:</dt>
					<dd><input tabindex="4" name="campopreciocosto" type="text" class="validate[required,length[0,30]]" id="campopreciocosto" size="15" /></dd>

				<dt>Precio de Venta:</dt>
					<dd><input tabindex="5" name="campoprecioventa" type="text" class="validate[required,length[0,30]]" id="campoprecioventa" size="15" /></dd>

				<dt>IVA Compra:</dt>
					<dd><input tabindex="6" name="campoivacompra" type="text" class="validate[required,length[0,30]]" id="campoivacompra" size="15" /></dd>

				<dt>IVA Venta:</dt>
					<dd><input tabindex="7" name="campoivaventa" type="text" class="validate[required,length[0,30]]" id="campoivaventa" size="15" /></dd>
					
				<dt>** Comision por Venta:</dt>	
					<dd><input tabindex="8" name="campocomisionxvta" type="text" class="validate[optional,length[0,30]]" id="campocomisionxvta" size="15" disabled="disabled" /></dd>

				<dt>** Ganancia Cash:</dt>
					<dd><input tabindex="8" name="campogananciacash" type="text" class="validate[optional,length[0,30]]" id="campogananciacash" size="15" disabled="disabled" /></dd>

				<dt>** IVA Debito:</dt>
					<dd><input tabindex="9" name="campoivadebito" type="text" class="validate[optional,length[0,30]]" id="campoivadebito" size="15" disabled="disabled" /></dd>

				<dt>Comentario / Estado:</dt>
					<dd>
					  <textarea name="campocomentario" cols="40" rows="6" id="campocomentario" tabindex="10"></textarea>
					</dd>
					
				<dt>&nbsp;</dt>	
					<dd><input tabindex="9" name="butAdd" type="submit" id="butAdd" value="Agregar" /></dd>
					
			</dl>
		<?php echo form_close()?>
		</fieldset>
		
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>