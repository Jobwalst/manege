	<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van paarden</h1>
	<ul>
		<?php foreach ($data["horses"] as $horse) { ?>
		<li>
			<span>Ras: <?= $horse['ras'] ?>, </span>
			<span>Leeftijd: <?= $horse['leeftijd'] ?>, </span>
			<span>Schofthoogte: <?= $horse['schofth'] ?>cm, </span>
			<span>Soort (paard/pony): <?= $horse['soort'] ?>,</span>
			<span>Geschikt voor springsport: <?= $horse['springsp'] ?></span>
			<p>Beschrijving: <?= $horse['beschrijving'] ?></p>
			<?php
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
			<a href="<?= URL ?>horse/edit/<?= $horse['id'] ?>">Wijzigen</a> <a href="<?= URL ?>horse/destroy/<?= $horse['id'] ?>">Verwijderen</a>
		</li>
	<?php } ?>
	</ul> 