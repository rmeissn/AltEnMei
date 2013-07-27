<?php 
	require_once('smartyinc.php');

	$smarty->assign('pageOn', 'aboutus.php');
	$smarty->assign('title', 'About us');

	require_once('carousel.php');
	require_once('news.php');

	$smarty->assign('topContent', array(
					array(
						'heading' => 'Über die Firma Meissner Alternative Energienutzung', 
						'postInfo' => 'Geschrieben von Roy Meissner', 
						'content' => '<p>Die Firma Meissner Alternative Energienutzung wurde im März 1993 von Monika Meissner gegründet. Erstes Augenmerk legte das Unternehmen auf die Nutzung der Solarenergie zur Warmwassererzeugung. Die Firma begann Solaranlagen selbst zu entwerfen und diese individuell auf ihre Kunden und deren Vorstellungen abzustimmen.<br>Inzwischen hat sich das Unternehmen zusätzlich auf die Gebiete Photovoltaik, Regenwassernutzung und Wärmepumpen spezialisiert.<br>Meissner Alternative Energienutzung bietet Ihnen sowohl eine umfassende Beratung, die auf langjähriger Erfahrung basiert, als auch qualitativ hochwertige Produkte, an denen Sie Ihr Leben lang Freude haben werden.<br>Das Unternehmen steht Ihnen bundesweit, insbesondere in Sachsen, Leipzig/Leipziger Land als kompetenter Ansprechpartner zur Seite.
						<br><br>Profitieren Sie von der Kompetenz und der langjährigen Erfahrung unseres Teams und nutzen Sie unsere umfassenden Services.
						<ul>
							<li>Fachmännische Beratung</li>
							<li>Objektbesichtigung und Standortanalyse</li>
							<li>Planung der Anlage</li>
							<li>Angebotserstellung</li>
							<li>Wirtschaftlichkeitsberechnung</li>
							<li>Finanzierungsberatung</li>
							<li>Anlagenmontage</li>
							<li>Stromeinspeisung beim Energieversorgungsunternehmen</li>
							<li>Wartung der Anlagen</li>
						</ul></p>'
						)
					)
					);
	$smarty->display('main.tpl'); 
?>
