<?php 
	require_once('smartyinc.php');

	$smarty->assign('pageOn', 'index.php');
	$smarty->assign('title', 'Homepage');

	require_once('carousel.php');
	require_once('news.php');

	$smarty->assign('topContent', array(
					array(
						'heading' => 'Schaffen Sie sich Ihr persönliches Sonnenglück!', 
						'postInfo' => 'Geschrieben von Roy Meissner', 
						'content' => '<p>Rohstoffe wie Kohle, Gas und Öl stehen zwar in großen Mengen zur Verfügung, aber der Abbau jener wird von Tag zu Tag komplizierter. Als Folge steigen die Energieversorgungspreise, was sich in Form Ihrer Strom- und Heizkostenrechnung bemerkbar macht.<br>Gleichzeitig wird durch den Abbau und die Verarbeitung der Rohstoffe die Umwelt signifikant verändert und geschädigt. Denken Sie nur an Bilder von leck gegangen Ölfrachtern oder an die ständigen Diskussionen über den CO2 Austoß.<br>Ein Ende sowohl der einen, als auch der anderen Situation ist selbst mit den derzeit in Entwicklung befindlichen Technologien nicht abzusehen.</p>
								<p>Sie möchten sich dieser Lage entziehen, selbst über Ihre Energieproduktion und Nutzung entscheiden und etwas gutes für die Umwelt tun?<br>Wir informieren Sie auf dieser Website über Photovoltaik, Solarthermie, Regenwassernutzung sowie Wärmepumpen.<br>Dabei stehen wir Ihnen als kompetenter Partner bei der Entscheidung für eine Solarstrom-, Warmwassergewinnungs- oder Regenwasseranlage bzw. für den Einbau einer Wärmepumpe unter Ausnutzung aller staatlichen Förderungsmöglichkeiten zur Seite.</p>'
						)
					)
					);

	$smarty->assign('bottomContent', array(
					  array(
						'heading' => 'Was wir ihnen Bieten:', 
						'postInfo' => 'Geschrieben von Roy Meissner', 
						'content' => '<ul><li>Fachmännische Beratung</li>
							<li>Objektbesichtigung und Standortanalyse</li>
							<li>Planung der Anlage</li>
							<li>Angebotserstellung</li>
							<li>Wirtschaftlichkeitsberechnung</li>
							<li>Finanzierungsberatung</li>
							<li>Anlagenmontage</li>
							<li>Stromeinspeisung beim Energieversorgungsunternehmen</li>
							<li>Wartung der Anlagen</li></ul>'
						)
					)
					);


	$smarty->display('main.tpl'); 
?>
