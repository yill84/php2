<html>
<head></head>

<body>

	<?php 
	$queue = $_GET["queue"];
	$target = $_GET["target"];

	$queueArray = strtok($queue, "¡¢");
	
	
	echo "queueArray is ".$queueArray;
	echo "<br/>";
	echo "target is ".$target;


	?>

</body>

</html>
