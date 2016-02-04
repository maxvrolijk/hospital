<?php
	require_once "delete_logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>

	<form method="post">

		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">id:</label>
			<span><?=$client['id']?></span>
		</div>

		<div>
			<label for="name">name:</label>
			<span><?=$client['name']?></span>
		</div>
		
		<div>
			<label for="name">telf:</label>
			<span><?=$client['telf']?></span>
		</div>

		<div>
			<label for="name">products:</label>
			<span><?=$client['products']?></span>
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