	<div id="footer">
		<h3>
			<span class="mono-regular">
				<a href="index.php"><span class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == "index.php" || basename($_SERVER["SCRIPT_NAME"]) != "about.php") {echo "current-page";} else {echo "";} ?>">work</span></a>
				 :: <a href="about.php"><span class="<?php if(basename($_SERVER["SCRIPT_NAME"]) == "about.php") {echo "current-page";} else {echo "";} ?>">about</span></a>
				 :: say <a href="mailto:howdy@lucien.design" target="_blank">howdy@lucien.design</a>
				 :: <a href="https://www.github.com/lucienlizlepiorz" target="_blank">GitHub</a>
			</span>
		</h3>
	</div>

</body>
</html>