<?php
	require_once "edit_logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>">
		</div>
		<div>
			<label for="name">telf:</label>
			<input type="text" id="telf" name="telf" value="<?=$client['telf']?>">
		</div>
		<div>
			<label for="name">products:</label>
			<textarea id="products" name="products""<?=$client['products']?>"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>