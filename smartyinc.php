<?php 
	require('/usr/share/php/smarty3/Smarty.class.php');

	$smarty = new Smarty();

	$smarty->template_dir = '/var/www/www.alternative-energienutzung.de/smarty/templates';

	$smarty->compile_dir = '/var/www/www.alternative-energienutzung.de/smarty/templates_c';

	$smarty->cache_dir = '/var/www/www.alternative-energienutzung.de/smarty/cache';

	$smarty->config_dir= '/var/www/www.alternative-energienutzung.de/smarty/configs'; 
?>
