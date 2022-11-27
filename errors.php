<link rel="stylesheet" href="./s6css.css">
<link rel="stylesheet" href="./hider.css">
<?php if (count($errors) > 0): ?>
<div class="error">
	<?php foreach ($errors as $error): ?>
	<div class="s6-panel s6-text-red" id="hidee">
		<?php echo $error ?>
	</div>
	<?php endforeach ?>
</div>
<?php endif ?>