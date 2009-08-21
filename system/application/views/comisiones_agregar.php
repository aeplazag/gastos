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
	
	$(document).ready(function(){
	
		var campopreciocosto = $("#campopreciocosto");
		var campoprecioventa = $("#campoprecioventa");
		var campoivacompra = $("#campoivacompra");
		var campoivaventa = $("#campoivaventa");
		var campocomisionxvta = $("#campocomisionxvta");
		var campogananciacash = $("#campogananciacash");
		var campoivadebito = $("#campoivadebito");

		$("#campopreciocosto, #campoprecioventa, #campoivacompra, #campoivaventa")
			.bind("blur change click dblclick focus keydown keyup mouseenter mouseleave",
			function(event) { 
				if ((campopreciocosto.val() == "") || (campoprecioventa.val() == "") || (campoivacompra.val() == "") || (campoivaventa.val() == "")) {			
					$("#butAdd").attr("disabled","disabled") .attr("style", "background-color:gray; color:white;") .val("No puede Agregar Aun");
				}
		});

/*
		$("#campocomisionxvta, #campogananciacash, #campoivadebito")
			.bind("blur change click dblclick focus keydown keyup mouseenter mouseleave",
			function(event) { 
				if ((campocomisionxvta.val() != "") && (campogananciacash.val() != "") && (campoivadebito.val() != "")) {			
					$("#butAdd").removeAttr("disabled") .attr("style", "background-color:lime; color:black;") .focus() .val("Agregar Comision");
				}
		});
*/		
			
		$("#butCalc").click(function() { 			
			//Debo verificar los valores de los campos primero
			if ( (campopreciocosto.val() == "") || (campoprecioventa.val() == "") || (campoivacompra.val() == "") || (campoivaventa.val() == "")) {
				alert("Debe completar los campos faltantes!");
				if (campopreciocosto.val() == "") { campopreciocosto.focus(); }
				else if (campoprecioventa.val() == "") { campoprecioventa.focus(); }
				else if (campoivacompra.val() == "") { campoivacompra.focus(); }
				else if (campoivaventa.val() == "") { campoivaventa.focus(); }
			}
			else {
				
				//Verifico que los valores sean numeros flotantes (por mas que
				//la libreria de validacion ya lo haya verificado)
				var c1 = parseFloat( campopreciocosto.val() );
				var c2 = parseFloat( campoprecioventa.val() );
				var c3 = parseFloat( campoivacompra.val() );
				var c4 = parseFloat( campoivaventa.val() );

				/*
				alert ("Valores: " + c1 +" | "+ c2 +" | "+ c3 +" | "+ c4);
				*/
				
				var v1 = parseFloat((((c2-c4)-(c1-c3))*70)/100).toFixed(2);;
				var v2 = parseFloat((((c2-c4)-(c1-c3))*30)/100).toFixed(2);
				var v3 = parseFloat((c4-c3)).toFixed(2);
				
				$("#campocomisionxvta").val(v1) .attr({style:"background-color:lime;"});
				$("#campogananciacash").val(v2) .attr({style:"background-color:lime;"});
				$("#campoivadebito").val(v3) .attr({style:"background-color:lime;"});

				$("#campocomisionxvta1").val(v1);
				$("#campogananciacash1").val(v2);
				$("#campoivadebito1").val(v3);
				
				$("#butAdd").removeAttr("disabled") .attr("style", "background-color:lime; color:black;") .focus() .val("Agregar Comision");

/*		
				$("#butCalc").attr({ 
					disabled: "disabled",
					style: "background-color:gray; color:white;"
				});

				$("#butAdd").attr({ 
					style: "background-color:lime; color:black;"
				});

				$("#butAdd").removeAttr("disabled")
					.focus() .val("Agregar Comision");
*/				
			}
			
		});
	});
	
</script>


	<div class="grid_12" id="cuerpo">

		<h2>Comisiones - Agregar</h2>
		
		<fieldset><legend>Por favor complete el siguiente formulario. Tenga en cuenta los campos obligatorios.<br />Los numeros deben ser ingresados sin simbolo ($ u otro) y con coma en caso de ser numeros con decimal</legend>
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
					<dd><select tabindex="3" name="campocliente" id="campocliente" class="validate[required]">
					  <option value="">== SELECCIONAR CLIENTE ==</option>
				<?
					foreach ($arreglo_clientes->result_array() as $row) {
						//print_r ($row);
						echo '<option value="'.$row["ID"].'">'.$row["NOMBRE"].' - CUIT('.$row["CUIT"].')</option>';
					}
				?>	
					</select></dd>	
					
				<dt>Precio de Costo:</dt>
					<dd><input tabindex="4" name="campopreciocosto" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campopreciocosto" size="15" /></dd>

				<dt>Precio de Venta:</dt>
					<dd><input tabindex="5" name="campoprecioventa" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campoprecioventa" size="15" /></dd>

				<dt>IVA Compra:</dt>
					<dd><input tabindex="6" name="campoivacompra" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campoivacompra" size="15" /></dd>

				<dt>IVA Venta:</dt>
					<dd><input tabindex="7" name="campoivaventa" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campoivaventa" size="15" /></dd>
					
				<dt>** Comision por Venta:</dt>	
					<dd><input tabindex="8" name="campocomisionxvta" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campocomisionxvta" size="15" disabled="disabled" /></dd>

				<dt>** Ganancia Cash:</dt>
					<dd><input tabindex="8" name="campogananciacash" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campogananciacash" size="15" disabled="disabled" /></dd>

				<dt>** IVA Debito:</dt>
					<dd><input tabindex="9" name="campoivadebito" type="text" class="validate[required,custom[numeroFloat],length[0,20]]" id="campoivadebito" size="15" disabled="disabled" /></dd>

				<dt>Comentario / Estado:</dt>
					<dd>
					  <textarea name="campocomentario" cols="40" rows="6" id="campocomentario" tabindex="10"></textarea>
					</dd>
					
				<input name="campocomisionxvta1" id="campocomisionxvta1" type="hidden" value="" />	
				<input name="campogananciacash1" id="campogananciacash1" type="hidden" value="" />	
				<input name="campoivadebito1" id="campoivadebito1" type="hidden" value="" />	
					
				<dt>&nbsp;</dt>	
					<dd><input tabindex="10" name="butCalc" type="button" id="butCalc" value="Calcular Valores" />&nbsp;&nbsp;&nbsp;<input tabindex="11" name="butAdd" type="submit" id="butAdd" value="No puede Agregar Aun" disabled="disabled" style="background-color:gray; color:white;" /></dd>
					
			</dl>
		<?php echo form_close()?>
		</fieldset>
		
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>