<?
	$dir_views = $this->config->item('dir_views');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Gastos</title>

<link rel="stylesheet" type="text/css" media="all" href="<?=$dir_views?>css/estilo.css" />
<link type="text/css" href="<?=$dir_views?>css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="all" href="<?=$dir_views?>css/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?=$dir_views?>css/jquery.monthpicker.css" />

<script type="text/javascript" src="<?=$dir_views?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/superfish.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/i18n/jquery-ui-i18n.min.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/jquery.varios.js"></script>
<!--<script type="text/javascript" src="<?=$dir_views?>js/jquery.validationEngine-es.js"></script>-->
<script type="text/javascript" src="<?=$dir_views?>js/jquery.monthpicker.min.js"></script>

<script type="text/javascript" src="<?=$dir_views?>js/colorbox/jquery.colorbox-min.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="<?=$dir_views?>js/colorbox/colorbox.css" />
<!--[if IE]>
	<link type="text/css" media="screen" rel="stylesheet" href="<?=$dir_views?>js/colorbox/colorbox-ie.css" title="example" />
<![endif]-->

<script type="text/javascript">

	function stripeTables () {
		$('table.zebra tbody tr:odd').addClass('zOdd');
		$('table.zebra tbody tr:even').addClass('zEven');
		$("table.zebra thead tr:first-child").addClass("zSelected");
	}

	function resultadomes(data,$e){
		var str = "";
		for(key in data) {
			str += " " + key + ": " + data[key]+ "; ";
		}
		var selector = "#mensaje";
		jQuery(selector).prepend("{" + str + "};<br />").show();
	}

	jQuery(function(){
			
		$("a[rel='colorboxLink']").colorbox({
			title:false,
			photo:false,
			slideshow:false
		});
		
		jQuery('ul.sf-menu').superfish();
		stripeTables();

		jQuery("#selectormes").monthpicker("2009-08",resultadomes);
		
	});
	
</script>


</head>
<body>

<div class="container_12" id="wrapper">  

	<div class="grid_12" id="logoitexa"><a href="<?=site_url('')?>"><img border="0" src="<?=$dir_views?>/images/logo.jpg" alt="Itexa" /></a></div>
	<div class="clear"></div>

	<div class="grid_12" id="navbar"><? include("inc_menu.php"); ?></div>
	<div class="clear"></div>
