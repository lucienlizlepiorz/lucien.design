	<div id="footer">
		<h3>
			<span class="mono-regular">
				<a href="index.php" class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == "index.php" || basename($_SERVER["SCRIPT_NAME"]) != "about.php") {echo "current-page";} else {echo "";} ?>">work</a>
				 :: <a href="about.php" class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == "about.php") {echo "current-page";} else {echo "";} ?>">about</a>
				 :: say <a href="mailto:howdy@lucien.design" target="_blank">howdy@lucien.design</a>
				 :: <a href="https://www.github.com/lucienlizlepiorz" target="_blank">GitHub</a>
			</span>
		</h3>
	</div>

</body>
</html>