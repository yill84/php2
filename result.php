<html>
<head></head>

<body>

	<?php 
	$queue = $_GET["queue"];
	$target = $_GET["target"];

	$queueArray = explode($queue, "、");
	echo "没有去重的总人数是 ".count($queueArray)."人<br/>";

	echo "没有去重search：".array_search($target, $queueArray);
	
	$queueArrayNoDup = array_unique($queueArray);
	echo "去重的总人数是 ".count($queueArrayNoDup)."人<br/>";

	echo "去重search：".array_search($target, $queueArrayNoDup);
	
	$i=1;
	foreach ($queueArrayNoDup as $name)
	{
		if(0 == strcasecmp($target, $name))
		{
			echo $target."排在第".$i."位";
		}
		$i +=1;
	}


	/*
	 foreach ($queueArray as $name)
	 {
	if(array_key_exist($name,$queueArrayNoDup))
	{
	$queueArrayNoDup[$name]+1;
	}
	else
	{
	$queueArrayNoDup = array_merge($queueArrayNoDup,array($name=>1));
	}
	$queueArrayNoDup;
	} */
/* 
	echo "queueArray is ".$queueArray;
	echo "<br/>";
	echo "target is ".$target; */


	?>

</body>

</html>
