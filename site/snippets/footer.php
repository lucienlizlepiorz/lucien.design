	<div id="footer">
		<h3>
			<span class="mono-regular">
				<?php
					$about = "/lucien.design/about.php";
					$currentpage = $_SERVER['PHP_SELF'];
					if ($currentpage == $about) {
						echo "work
						 :: <span class=\"current-page\">about</span>";
					} else {
						echo "<span class=\"current-page\">work</span>
						 :: about";
					}
				?>
				 :: say <a href="mailto:howdy@lucien.design" target="_blank">howdy@lucien.design</a>
				 :: <a href="https://www.github.com/lucienlizlepiorz" target="_blank">GitHub</a>
			</span>
		</h3>
	</div>

</body>
</html>