<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>

	<form method="post">

		<div>
			<input type="hidden" name="id" value="<?=$speciess['id']?>">
			<label for="name">id:</label>
			<span><?=$speciess['id']?></span>
		</div>

		<div>
			<label for="name">name:</label>
			<span><?=$speciess['name']?></span>
		</div>
		
		<div>
			<label for="name">species:</label>
			<span><?=$speciess['species']?></span>
		</div>

		<div>
			<label for="name">illness:</label>
			<span><?=$speciess['illness']?></span>
		</div>
		
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>

	</form>	

<?php
	include "../common/footer.php";
?>