<?
	include("inc_cabecera.php");
?>

	<div class="grid_12" id="cuerpo">

		<h2>Comisiones</h2>
		
		<p>A continuaci&oacute;n se listan las comisiones correspondientes al mes actual. En caso de querer listar comisiones de algun mes anterior, seleccione dicho mes a continuaci&oacute;n</p>
		
		<div id="selectormes" class="monthPicker"></div>
		<br />
		<div id="mensaje">&nbsp;</div>
		<br />

		<div style="width:95%;">

		<table width="100%" border="0" class="zebra">
		
		<thead>	
        <tr>
          <td width="30">&nbsp;</td>
          <td width="150">Fecha de Factura</td>
          <td width="100">N&deg; Factura</td>
          <td width="300">Cliente</td>
          <td width="100">Pco. Costo</td>
          <td width="100">Pco. Venta</td>
          <td width="100">IVA Compra</td>
          <td width="100">IVA Venta</td>
        </tr>
		</thead>
		
		<tbody>
				
		<?
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
				?>
				
			</td>
			<td><?=$row->PXCOSTO?></td>
			<td><?=$row->PXVENTA?></td>
			<td><?=$row->IVACOMPRA?></td>
			<td><?=$row->IVAVENTA?></td><!--<?=$row->IVAVENTA?>--><!--<a href="<?=$dir_views.'images/logo.jpg'?>" rel="fancybox">Mi Imagen</a>-->
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