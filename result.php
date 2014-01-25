<html>
<head></head>

<body>

	<?php 
	$queue = $_GET["queue"];
	$target = $_GET["target"];

	$queueArray = strtok($queue, "、");
	echo "没有去重的总人数是 ".count($queueArray)."人<br/>";
	
	$aaaa = array("abc"=>1, "sss"=>2);
	echo "aaaa数组的长度是".count($aaaa);
	$bbbb = array("yyy"=>3);
	$aaaa = array_merge($aaaa, $bbbb);
	echo "aaaa数组的长度是".count($aaaa);
	
	echo "queueArray is ".$queueArray;
	echo "<br/>";
	echo "target is ".$target;


	?>

</body>

</html>
