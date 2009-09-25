<?
	include("inc_cabecera.php");
?>

<script type="text/javascript">

	$(document).ready(function(){	
	});
	
</script>

<style type="text/css">

div.seleccion {
	float:left; display:block; width: 150px; padding:10px; margin:10px;
	background-image:url(<?=$dir_views?>/images/1337.png);
	background-position:top;
	background-repeat:repeat;
	border:2px solid gray;
	text-align:center;
}

</style>

	<div class="grid_12" id="cuerpo">

		<h2>Gastos - Agregar</h2>
		
		<h3>Por favor seleccione que tipo de gastos desea agregar</h3>
		
		<div style="padding:20px;">
			
			<div class="seleccion"><a href="<?=site_url("gastos/agregar/fijos")?>"><h3>Gastos Fijos</h3></a></div>
			
			<div class="seleccion"><a href="<?=site_url("gastos/agregar/varios")?>"><h3>Gastos Varios</h3></a></div>
		
		</div>
	
	<!-- Fin Contenedor Cuerpo -->
	</div>
	<div class="clear"></div>

<?
	include("inc_pie.php");
?>