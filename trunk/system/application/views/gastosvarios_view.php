<?
	include("inc_cabecera.php");
?>

<script type="text/javascript">

	var url_boton;	

	function eliminar(id) {
		url_boton = '<?=site_url('gastos/eliminar/')?>/'+id;
		jQuery('#divdialogo').dialog('open');
	}
	
	function resultadomesgastos(data,$e){
		var str = "";
		var anio = "";
		var mes = "";
		for(key in data) {
			str += " " + key + ": " + data[key]+ "; ";
		}
		anio = data["year"];
		mes = data["month"];
		window.location.replace("<?=site_url("gastos/listar_mes")?>/"+anio+"/"+mes);
	}


	jQuery(document).ready(function(){	
		
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
	
		jQuery("#selectormes_gastos").monthpicker("<?=$param_anio?>-<?=$param_mes?>",resultadomesgastos);		
		
		<? if (isset($listarpormes)) { ?>
		jQuery("table.zebra tbody tr:last-child").attr("class","");
		jQuery("table.zebra tbody tr:last-child").addClass("filatotales");
		<? } ?>

	});	
		
</script>

<div id="divdialogo" title="Eliminar item?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Este item será borrado y no puede deshacerse. Está seguro?</p>
</div>

	<div class="grid_12" id="cuerpo">

		<h2>Gastos Varios</h2>
		
		<!--<p>Listado de Gastos Varios. Por favor seleccione el mes para el cual desea conocer los gastos</p>-->
		<h3>Totales del mes de: </h3><h4>
		<? if ($param_mes == 0) { ?>
			Todo el a&ntilde;o <?=$param_anio?></h4><br />
		<? } else { ?>
			<? echo $this->utilidades->mescadena($param_mes); ?> de <?=$param_anio?></h4><br />
		<? } ?>
		
		<div id="selectormes_gastos" class="monthPicker"></div>
		<br />
		
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
			<td><a href="<?=site_url('gastos/modificar/'.$row->ID)?>"><img border="0" src="<?=$dir_views?>/images/iconomod.png" alt="Modificar" /></a></td>
			<td><a href="JavaScript:eliminar(<?=$row->ID?>);"><img class="botoneliminar" border="0" src="<?=$dir_views?>/images/iconodel.png" alt="Eliminar" /></a></td>
			<td><?=$row->NOMBRE?></td>
			<td><? $total += $row->MONTO; ?><?=$row->MONTO?></td>
			<td><?=$this->utilidades->fecha_normal($row->FECHA)?></td>
			<td><?=$row->OBSERVACIONES?></td>
  		</tr>

		<?
			}
		?>
		
		<? if (isset($listarpormes)) { ?>
        <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><?=$total?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
  		</tr>		
		<? } ?>
		
		</tbody>
		</table>

		</div>
		
		<?
			if (!isset($listarpormes)) {
				echo $pagination_links;
			}				
		?>

	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>