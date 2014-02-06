<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<?php 
	$queue = trim($_POST["ori"]);
	$queueArray = explode("、", $queue);

	//ȡarray��һ��
	$firstName = $queueArray[0];
	$lastSplit = strrchr($firstName,">");
	$firstName = substr($lastSplit,1);
	$queueArray[0] = $firstName;

	//ȡarray���һ��
	$lastName = array_pop($queueArray);
	$firstSplit = stripos($lastName,"<");
	$lastName = substr($lastName,0,$firstSplit);
	array_push($queueArray,$lastName);

	echo implode("、",$queueArray);

	?>
	

</body>
</html>
