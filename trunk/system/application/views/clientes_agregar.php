<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">

		<h2>Clientes - Agregar</h2>
		
		<fieldset><legend>Por favor complete el siguiente formulario. Tenga en cuenta los campos obligatorios.</legend>
		<?php 
			//$att = array('class' => 'formular', 'id' => 'formagregar');
			echo form_open($this->uri->uri_string());
		?>
			<dl>
				<dt>Nombre o Razon Social</dt>
					<dd><input tabindex="1" name="camponombre" type="text" class="validate[required,length[0,150]]" id="camponombre" size="40" /></dd>

				<dt>Persona Encargada</dt>
					<dd><input tabindex="2" name="campoencargado" type="text" class="validate[optional,length[0,150]]" id="campoencargado" size="30" /></dd>

				<dt>CUIT</dt>
					<dd><input name="campocuit" type="text" class="validate[optional,custom[onlyNumber,noSpecialCaracters],length[0,11]]" id="campocuit" tabindex="3" size="20" maxlength="11" />
					</dd>

				<dt>Ingresos Brutos</dt>
					<dd><input name="campoib" type="text" class="validate[optional,custom[onlyNumber,noSpecialCaracters],length[0,10]]" id="campoib" tabindex="4" size="20" maxlength="10" />
					</dd>

				<dt>Direccion</dt>
					<dd><input tabindex="5" name="campodireccion" type="text" class="validate[optional,length[0,150]]" id="campodireccion" size="40" /></dd>

				<dt>Telefono</dt>
					<dd><input tabindex="6" name="campotelefono" type="text" class="validate[optional,length[0,50]]" id="campotelefono" size="20" /></dd>

				<dt>Celular</dt>
					<dd><input tabindex="7" name="campocelular" type="text" class="validate[optional,custom[onlyNumber],length[0,50]]" id="campocelular" size="20" /></dd>

				<dt>Direccion de Email</dt>
					<dd><input tabindex="8" name="campoemail" type="text" class="validate[optional,custom[email],length[0,150]]" id="campoemail" size="30" /></dd>

				<dt>&nbsp;</dt>	
					<dd><input tabindex="9" name="butAdd" type="submit" id="butAdd" value="Agregar" />
					</dd>
			</dl>
		<?php echo form_close()?>
		</fieldset>
		
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>