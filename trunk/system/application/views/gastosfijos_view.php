<?
	include("inc_cabecera.php");
?>

<script type="text/javascript">
	
	jQuery(document).ready(function(){	
		
		var url_boton;
	
		jQuery("#divdialogo").dialog({
			bgiframe: true,
			autoOpen: false,
			closeOnEscape: true,
			draggable: false,
			resizable: false,
			height:140,
			modal: true,
			overlay: {
				backgroundColor: '#000',
				opacity: 0.5
				},
			buttons: {
				'Eliminar': function() {
					$(this).dialog("close");
					//alert(url_boton);
					window.location=url_boton; 
				},
				Cancel: function() {
					$(this).dialog('close');
				}
			}
		});		
	
		jQuery(".botoneliminar").click(function() {
			url_boton = jQuery(".botoneliminar").attr('href');
			jQuery('#divdialogo').dialog('open');
			return false;
		});

		jQuery("table.zebra tbody tr:last-child").attr("class","");
		jQuery("table.zebra tbody tr:last-child").addClass("filatotales");

	});	
	
</script>

<div id="divdialogo" title="Eliminar item?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Este item será borrado y no puede deshacerse. Está seguro?</p>
</div>

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
			$total = 0;
			foreach ($resultados->result() as $row) {
		?>
				
        <tr>
			<td><a href="<?=site_url('gastosfijos/modificar/'.$row->ID)?>"><img border="0" src="<?=$dir_views?>/images/iconomod.png" alt="Modificar" /></a></td>
			<td><a class="botoneliminar" href="<?=site_url('gastosfijos/eliminar/'.$row->ID)?>"><img class="botoneliminar" border="0" src="<?=$dir_views?>/images/iconodel.png" alt="Eliminar" /></a></td>
			<td><?=$row->NOMBRE?></td>
			<td><? $total += $row->MONTO; ?><?=$row->MONTO?></td>
			<td><?=$this->utilidades->fecha_normal($row->FECHA)?></td>
			<td><?=$row->OBSERVACIONES?></td>
  		</tr>

		<?
			}
		?>
		
        <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><?=$total?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
  		</tr>
		
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