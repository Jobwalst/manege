<h1>Voeg een paard/pony toe</h1>
<form name="create" method="post" action="/school/B4W1O1 - CURRENT/manege_in_mvc/horse/store">
	<select name="location">
        <?php foreach ($data['appoints'] as $appoint) {?>
            <option <?php if($result['location'] == $location['id']){
                echo 'selected';
            } ?> value="<?= $location['id'] ?>"><?= $location['name'] ?></option>
        <?php } ?>
    </select>
	<input type="number" name="age" placeholder="leeftijd" required>
	<input type="number" name="withersh" placeholder="schofthoogte in cm" required>
	<input type="text" name="type" placeholder="paard/pony" required>
	<input type="text" name="jumps" placeholder="geschikt voor springsport?" required>
	<textarea name="description" placeholder="beschrijving" required></textarea>
	<input type="submit" value="Voeg toe">
</form>