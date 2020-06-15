	<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Planning</h1>
	<ul>
		<?php foreach ($data["appoints"] as $ride) { ?>
		<li>
			<span>Ruiter: <?= $ride['ruiter_id'] ?>, </span>
			<span>Paard: <?= $ride['paard'] ?>, </span>
			<span>Tijd: <?= $ride['starttijd'] ?>, </span>
			<span>Datum: <?= $ride['datum'] ?></span>
			<?php
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
			<a href="<?= URL ?>appoint/edit/<?= $ride['id'] ?>">Wijzigen</a> <a href="<?= URL ?>appoint/destroy/<?= $ride['id'] ?>">Verwijderen</a>
		</li>
	<?php } ?>
	</ul> 