<html>
<head></head>

<body>

	<?php 
	$queue = $_POST["queue"];
	$target = $_POST["target"];

	$queueArray = explode("��", $queue);
	echo "û��ȥ�ص���������".count($queueArray)."��<br/>";

// 	echo "û��ȥ��search��".(array_search($target, $queueArray)+1);
	
	$queueArrayNoDup = array_unique($queueArray);
	echo "ȥ�ص���������".count($queueArrayNoDup)."��<br/>";

// 	echo "ȥ��search��".(array_search($target, $queueArrayNoDup)+1)."<br/>";
	
	$i=1;
	foreach ($queueArrayNoDup as $name)
	{
		if(0 == strcasecmp($target, $name))
		{
			echo "\"".$target."\"���ڵ�".$i."λ<br/>";
		}
		$i +=1;
	}


	/*
	 * �С��С����������ˡ��á�������
	 * ��
	 * 
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
