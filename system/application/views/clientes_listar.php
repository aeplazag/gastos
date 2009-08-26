<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">

		<h2>Clientes</h2>
		
		<p>A continuaci&oacute;n se listan los clientes de Itexa. Esto ademas posee una utilidad de Agenda.</p>
		
		<div style="width:95%;">

		<table width="100%" border="0" class="zebra">
		
		<thead>
        <tr>
          <td>&nbsp;</td>
          <td>Nombre</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		</thead>
		
		<?
			foreach ($resultados->result() as $row) {
		?>
			
		<tbody>
        <tr>
			<td width="30">&nbsp;</td>
			<td width="300"><?=$row->NOMBRE?></td>
			<td width="100"><?=$row->CUIT?></td>
			<td width="100"><?=$row->INGRESOSBRUTOS?></td>
			<td width="100"><?=$row->TELEFONO?></td>
			<td><?=$row->EMAIL?></td>
  		</tr>

		<?
			}
		?>
		
		</tbody>
		</table>

		</div>
		
		<?=$pagination_links?>

	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>