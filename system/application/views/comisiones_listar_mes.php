<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">

		<h2>Comisiones</h2>
		
		<!--<p>A continuaci&oacute;n se listan las comisiones correspondientes al mes <strong><? echo $this->utilidades->mescadena($param_mes); ?></strong> de <strong><?=$param_anio?></strong></p>-->
		<h3>Totales de: </h3><h4>
		<? if ($param_mes == 0) { ?>
			Todo el a&ntilde;o <?=$param_anio?></h4><br />
		<? } else { ?>
			<? echo $this->utilidades->mescadena($param_mes); ?> de <?=$param_anio?></h4><br />
		<? } ?>
		
		<div id="selectormes" class="monthPicker"></div>
		<br />

		<div style="width:95%;">

		<table width="100%" border="0" class="zebra">
		
		<thead>	
        <tr>
          <td width="30">&nbsp;</td>
          <td width="80">Fecha F. </td>
          <td width="60">N&deg; Fac.</td>
          <td width="250">Cliente</td>
          <td width="60">P. Costo</td>
          <td width="60">P. Venta</td>
          <td width="60">IVA Compra</td>
          <td width="60">IVA Venta</td>
          <td width="80">Comision</td>
          <td width="80">Ganancia</td>
          <td width="80">IVA Debito </td>
        </tr>
		</thead>
		
		<tbody>
				
		<?
			$t1 = 0; $t2 = 0; $t3 = 0; $t4 = 0; $t5 = 0; $t6 = 0; $t7 = 0; 
			foreach ($resultados->result() as $row) {
		?>
				
        <tr>
			<td>&nbsp;</td>
			<td><?=$this->utilidades->fecha_normal($row->FECHAFACTURA)?></td>
			<td><?=$row->NROFAC?></td>
			<td valign="middle">
				<?
					$sql1 = "SELECT * FROM itexa_cliente WHERE ID = ?";
					$res1 = $this->db->query($sql1, array($row->IDCLIENTE)); 
					foreach ($res1->result() as $rowcli) {
						$link = site_url("clientes/ver_small/$row->IDCLIENTE");
						$aref = '<a href="'.$link.'" rel="colorboxLink"><img style="vertical-align:middle; margin-right:5px;" src="'.$dir_views.'images/b_info.png" /></a>';
						echo $aref;
						echo $rowcli->NOMBRE.' / '.$rowcli->CUIT;
					}
				?>			</td>
			<td><? echo $row->PXCOSTO; $t1 += $row->PXCOSTO; ?></td>
			<td><? echo $row->PXVENTA; $t2 += $row->PXVENTA; ?></td>
			<td><? echo $row->IVACOMPRA; $t3 += $row->IVACOMPRA; ?></td>
			<td><? echo $row->IVAVENTA; $t4 += $row->IVAVENTA; ?></td>
			<td><? echo $row->COMISIONXVTA; $t5 += $row->COMISIONXVTA; ?></td>
			<td><? echo $row->GANANCIA; $t6 += $row->GANANCIA; ?></td>
			<td><? echo $row->IVADEBITO; $t7 += $row->IVADEBITO; ?></td>
			
  		</tr>

		<?
			}
		?>
		
		<? # FILA TOTALES # ?>
		<tr id="#totales">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>$<?=$t1?></td>
			<td>$<?=$t2?></td>
			<td>$<?=$t3?></td>
			<td>$<?=$t4?></td>
			<td>$<?=$t5?></td>
			<td>$<?=$t6?></td>
			<td>$<?=$t7?></td>
		</tr>
		
		</tbody>
		</table>

		</div>
		
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>