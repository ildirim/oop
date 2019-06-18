<?php var_dump($errors); if(isset($errors)):   ?>
	<div style="background-color: darkred; border-radius: 5px; border 1px solid red;">
	<?php foreach($errors as $error): ?>
		<div><?= $error; ?></div>
	<?php endforeach ?>			
	</div>
<?php endif ?>			

<form method="post" action="/store">
	<input type="text" name="ad">
	<input type="text" name="soyad">
	<input type="submit" name="submit" value="Gonder">
</form>