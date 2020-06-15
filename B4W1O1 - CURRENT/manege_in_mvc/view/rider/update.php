	
	<h1>Ruiter wijzigen</h1>
	<form name="update" method="post" action="<?= URL ?>rider/update/<?= $rider['id'] ?>" required>
	    <!--  Bouw hier de rest van je formulier   -->
	    <input type="text" name="name" placeholder="Naam" value="<?= $rider['naam'] ?>" required>
		<input type="text" name="adress" placeholder="3364 RT Sliedrecht" value=" <?= $rider['adres'] ?>" required>
		<input type="tel" name="tel" placeholder="0679342851" value="<?= $rider['tel'] ?>" required>
		<input type="number" name="horse" value="<?= $rider['paard_id'] ?>" required>
		<input type="submit" value="Update">
	</form>