<?php snippet("header") ?>

<?php snippet("top") ?>

<div id="authenticate">
	<?php if($authenticationError): ?>
		<ul id="submit-error"><li><?php echo smartypants($page->authentication()) ?></li></ul>
	<?php endif ?>
	
	<form method="post">
		<input id="username" type="hidden" name="username" value="guest">

		<div class="input-content">
			<input id="password" class="input-field" type="password" name="password" autocomplete="off" autocorrect="off" autocapitalize="none" placeholder="<?php echo $page->password()->html() ?>"/>
			<div id="password-icon" class="input-icon"></div>
		</div>
		
		<div>      
			<input class="submit" type="submit" name="authenticate" value="<?php echo $page->button()->html() ?>"/>
		</div>
	</form>
</div>

<?php snippet("footer") ?>