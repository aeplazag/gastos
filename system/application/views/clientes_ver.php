<?
	include("inc_cabecera.php");
?>

<div class="grid_12" id="cuerpo">

		<h2>Cliente - Ver Informaci&oacute;n detallada</h2>

			<br />
			
			<div>
				<table class="zebra" width="80%" border="0" cellspacing="2" cellpadding="2">
				<thead>
				  <tr>
					<td width="25%">Campo</td>
					<td>Informaci&oacute;n</td>
				  </tr>
				 </thead>
				  
				 <tbody>
	
				<?
					foreach ($info_cliente->result() as $rowcli) {
				?>
				  <tr>
					<td>Razon Social</td>
					<td><h3><?=$rowcli->NOMBRE?></h3></td>
				  </tr>
				  <tr>
					<td>Direcci&oacute;n</td>
					<td><?=$rowcli->DIRECCION?></td>
				  </tr>
				  <tr>
					<td>Tel&eacute;fono</td>
					<td><?=$rowcli->TELEFONO?></td>
				  </tr>
				  <tr>
				    <td>Tel&eacute;fono Celular: </td>
				    <td><?=$rowcli->CELULAR?></td>
			       </tr>
				  <tr>
				    <td>Encargado:</td>
				    <td><?=$rowcli->ENCARGADO?></td>
			       </tr>
				  <tr>
				    <td>E-mail:</td>
				    <td><a href="mailto:<?=$rowcli->EMAIL?>"><?=$rowcli->EMAIL?></a></td>
			       </tr>
				  <tr>
				    <td>CUIT:</td>
				    <td><h4><?=$rowcli->CUIT?></h4></td>
			       </tr>
				  <tr>
				    <td>INGRESOS BRUTOS: </td>
				    <td><h4><?=$rowcli->INGRESOSBRUTOS?></h4></td>
			       </tr>
				<?
					}
				?>
				 </tbody>
				</table>
			</div>
			
<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>