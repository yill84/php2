<html>
<head></head>

<body>

	<?php 
	$queue = $_GET["queue"];
	$target = $_GET["target"];

	$queueArray = strtok($queue, "��");
	echo "û��ȥ�ص��������� ".count($queueArray)."��<br/>";
	
	$aaaa = array("abc"=>1, "sss"=>2);
	echo "aaaa����ĳ�����".count($aaaa);
	$bbbb = array("yyy"=>3);
	$aaaa = array_merge($aaaa, $bbbb);
	echo "aaaa����ĳ�����".count($aaaa);
	
	echo "queueArray is ".$queueArray;
	echo "<br/>";
	echo "target is ".$target;


	?>

</body>

</html>
