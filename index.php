<html>
<head>
</head>
<body>
	ver:1.0
	<br />
	<?php 
	$queue = trim($_POST["queue"]);
	$target = trim($_POST["target"]);
	echo "queue is ".$queue;
	echo "target is ".$target;
	$test = "test string";
	?>
	<div>
		<form action="index.php" method="post">
			<p />
			粘贴所有排队人员：
			<textarea rows="3" cols="50" name="queue">
				<?php $queue?>
			</textarea>
			<br />
			<p />
			要查询序号的名称：<input name="target" type="text" value="<?php $test?>" />
			<br />
			<p />
			<input type="submit" value="查询" />
		</form>
	</div>

	<div>
		<?php 
		echo "test is ".$test;

		if(0 != strcasecmp("",$queue) && 0 != strcasecmp("",$target))
		{
			$queueArray = explode("、", $queue);
			echo "没有去重的总人数是".count($queueArray)."人<br/>";

			$queueArrayNoDup = array_unique($queueArray);
			echo "去重的总人数是".count($queueArrayNoDup)."人<br/>";

			$i=1;
			foreach ($queueArrayNoDup as $name)
			{
				if(0 == strcasecmp($target, $name))
				{
					echo "\"".$target."\"排在第".$i."位<br/>";
				}
				$i +=1;
			}
		}
		?>

	</div>
</body>
</html>
