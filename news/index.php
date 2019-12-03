<?php
	include "insert.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分页效果</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<ul class="news">
		<?php
			require "page.php";
		?>
	</ul>
	<?php echo $str;?>
</body>
</html>