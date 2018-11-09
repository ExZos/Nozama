<?php
	$listings = $data['listings'];
?>

<html>
<head>
</head>

<body>
	<div class="container">
		<div class="row">
			<?php
				if($listings->count() == 0) {
			?>
					<div>
						There are no listings that match
					</div>
			<?php
				}
			?>

			<?= listingController::viewPreviewHelper($listings) ?>
		</div>
	</div>
</body>
</html>