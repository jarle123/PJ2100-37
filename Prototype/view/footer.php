
			</section>
			<section id="activities">
<?php
// Initiate controller for user box
require 'controller/activitybox.php';
$controller = new ActivityBox;
echo $controller->showActivityBox();
?>
			</section>
		</div>
	</div>
	<footer>

	</footer>
</body>
</html>