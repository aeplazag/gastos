<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">

		<h2>Gastos Fijos</h2>
		
		<p>Listado de Gastos Fijos Mensuales</p>
		
		<div style="width:95%;">

		<table width="100%" border="0" class="zebra">
		
		<thead>	
        <tr>
          <td align="center" width="20">&nbsp;</td>
          <td align="center" width="20">&nbsp;</td>
          <td width="200">Concepto</td>
          <td width="100">Monto</td>
          <td width="150">Agregado</td>
          <td width="200">Observaciones</td>
        </tr>
		</thead>
		
		<tbody>
				
		<?
			foreach ($resultados->result() as $row) {
		?>
				
        <tr>
			<td><a href="<?=site_url('gastosfijos/modificar/'.$row->ID)?>"><img border="0" src="<?=$dir_views?>/images/iconomod.png" alt="Modificar" /></a></td>
			<td><a href="<?=site_url('gastosfijos/eliminar/'.$row->ID)?>"><img border="0" src="<?=$dir_views?>/images/iconodel.png" alt="Eliminar" /></a></td>
			<td><?=$row->NOMBRE?></td>
			<td><?=$row->MONTO?></td>
			<td><?=$this->utilidades->fecha_normal($row->FECHA)?></td>
			<td><?=$row->OBSERVACIONES?></td>
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