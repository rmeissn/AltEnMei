<?php 
	require_once('smartyinc.php');

	$smarty->assign('pageOn', 'impressum.php');
	$smarty->assign('title', 'Impressum');

	require_once('carousel.php');
	require_once('news.php');

	$smarty->assign('topContent', array(
					array(
						'heading' => 'Impressum', 
						'postInfo' => 'Geschrieben von Roy Meissner', 
						'content' => '<p>Meissner Alternative Energienutzung<br>Rechtsform: Einzelunternehmung<br>Kretzschmarstr. 24<br>04579 Espenhain OT Mölbis
						<br><br>Tel.: <a href="tel:+493434750344">03 43 47 / 50 344</a><br>Fax: 03 43 47 / 80 520<br>Email: <a href="mailto: info@alternative-energienutzung.de">info@alternative-energienutzung.de</a>
						<br><br>Inhaber: Monika Meissner<br>Umsatz-Identifikationsnummer: DE 141691832<br>Steuer-Nummer: 235/248/02244<br>Inhaltlich Verantwortlicher: Monika Meissner
						<br><br>Webdesign: Roy Meissner<br></p>'
						)
					)
					);
	$smarty->display('main.tpl'); 
?>
