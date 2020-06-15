	
	<h1>Paard/pony wijzigen</h1>
	<form name="update" method="post" action="<?= URL ?>horse/update/<?= $horse['id'] ?>"required>
	    <!--  Bouw hier de rest van je formulier   -->
	    <input type="text" name="race" placeholder="Morgan" value="<?= $horse['ras'] ?>"required>
		<input type="number" name="age" placeholder="leeftijd" value="<?= $horse['leeftijd'] ?>"required>
		<input type="number" name="withersh" placeholder="schofthoogte in cm" value="<?= $horse['schofth'] ?>"required>
		<input type="text" name="type" placeholder="paard/pony" value="<?= $horse['soort'] ?>"required>
		<input type="text" name="jumps" placeholder="geschikt voor springsport?" value="<?= $horse['springsp'] ?>">
		<textarea name="description" placeholder="beschrijving"><?= $horse['beschrijving'] ?></textarea>
		<input type="submit" value="Update">
	</form>