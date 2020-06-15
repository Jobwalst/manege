	<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van ruiters</h1>
	<ul>
		<?php foreach ($data["riders"] as $rider) { ?>
		<li>
			<span>Naam: <?= $rider['naam'] ?>, </span>
			<span>Adres: <?= $rider['adres'] ?>, </span>
			<span>Tel: <?= $rider['tel'] ?></span>
			<?php
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
			<a href="<?= URL ?>rider/edit/<?= $rider['id'] ?>">Wijzigen</a> <a href="<?= URL ?>rider/destroy/<?= $rider['id'] ?>">Verwijderen</a>
		</li>
	<?php } ?>
	</ul> 