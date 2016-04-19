<?php snippet("header") ?>

<div id="login">
	<?php if($error): ?>
		<ul class="alert"><li><?php echo $page->alert() ?></li></ul>
	<?php endif ?>
	
	<p class="mono-bold"><?php echo $page->text() ?></p>

	<form method="post">
		<div class="input-content">
			<input type="username" id="username" name="username" autocomplete="off" autofocus placeholder="<?php echo $page->username()->html() ?>">
			<div id="username" class="input-icon"></div>
		</div>

		<div class="input-content">
			<input type="password" id="password" name="password" autocomplete="off" autofocus placeholder="<?php echo $page->password()->html() ?>">
			<div id="password" class="input-icon"></div>
		</div>
		
		<div>      
			<input class="submit" type="submit" name="login" value="<?php echo $page->button()->html() ?>">
		</div>
	</form>
</div>

<?php snippet("footer") ?>