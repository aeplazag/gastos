<?
	$dir_views = $this->config->item('dir_views');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gastos</title>

<link rel="stylesheet" type="text/css" media="all" href="<?=$dir_views?>css/estilo.css" />
<link type="text/css" href="<?=$dir_views?>css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="all" href="<?=$dir_views?>css/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?=$dir_views?>css/form_template.css" />

<script type="text/javascript" src="<?=$dir_views?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/superfish.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/i18n/jquery-ui-i18n.min.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?=$dir_views?>js/jquery.varios.js"></script>
<!--<script type="text/javascript" src="<?=$dir_views?>js/jquery.validationEngine-es.js"></script>-->

<script type="text/javascript">
	// initialise plugins

	jQuery(function(){
		jQuery('ul.sf-menu').superfish();
	});

/*
	$(document).ready(function(){
		// get only input tags with class data-entry
		textboxes = $("input");
		// now we check to see which browser is being used
		if ($.browser.mozilla) {
			$(textboxes).keypress (checkForEnter);
		} else {
			$(textboxes).keydown (checkForEnter);
		}
	});
	
	function checkForEnter (event) {
		if (event.keyCode == 13) {
			  currentBoxNumber = textboxes.index(this);
			if (textboxes[currentBoxNumber + 1] != null) {
				nextBox = textboxes[currentBoxNumber + 1]
				nextBox.focus();
				nextBox.select();
				event.preventDefault();
				return false;
			}
		}
	}
*/
	
</script>


</head>
<body>

<div class="container_12" id="wrapper">  

	<div class="grid_12" id="logoitexa"><a href="<?=site_url('')?>"><img border="0" src="<?=$dir_views?>/images/logo.jpg" alt="Itexa" /></a></div>
	<div class="clear"></div>

	<div class="grid_12" id="navbar"><? include("inc_menu.php"); ?></div>
	<div class="clear"></div>
