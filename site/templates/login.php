<?php snippet("header") ?>

<div id="login">
	<?php if($authenticationError): ?>
		<ul class="alert"><li><?php echo $page->authentication() ?></li></ul>
	<?php endif ?>
	
	<?php if($accessError): ?>
		<ul class="alert"><li><?php echo $page->access() ?></li></ul>
	<?php endif ?>
	
	<p class="mono-bold"><?php echo $page->text() ?></p>

	<form method="post">
		<div class="input-content">
			<input id="username" class="input-field" type="username" name="username" autocomplete="off" autocorrect="off" autocapitalize="none" autofocus placeholder="<?php echo $page->username()->html() ?>">
			<div id="username-icon" class="input-icon"></div>
		</div>

		<div class="input-content">
			<input id="password" class="input-field" type="password" name="password" autocomplete="off" autocorrect="off" autocapitalize="none" placeholder="<?php echo $page->password()->html() ?>">
			<div id="password-icon" class="input-icon"></div>
		</div>
		
		<div>      
			<input class="submit" type="submit" name="login" value="<?php echo $page->button()->html() ?>">
		</div>
	</form>
</div>

<?php snippet("footer") ?>