<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">

		<h2>Comisiones</h2>
		
		<p>A continuaci&oacute;n se listan las comisiones correspondientes al mes actual.</p>
		
		<div style="width:95%;">

		<table width="100%" border="0" cellspacing="2" cellpadding="2">
		<?
			foreach ($resultados->result() as $row) {
		?>
			
  <tr>
    <td width="30">&nbsp;</td>
    <td width="300"><?=$row->FECHAFACTURA?></td>
    <td width="100"><?=$row->NROFAC?></td>
    <td width="100"><?=$row->PXCOSTO?></td>
    <td width="100"><?=$row->PXVENTA?></td>
    <td><?=$row->IVACOMPRA?></td>
  </tr>

		<?
			}
		?>
		</table>

		</div>
		
		<?=$pagination_links?>

	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>