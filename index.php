<html>
<head>
</head>
<body>
	ver:1.0
	<br />
	<?php 
	$queue = trim($_POST["queue"]);
	$target = trim($_POST["target"]);
	?>
	<div>
		<form action="index.php" method="post">
			<p />
			粘贴所有排队人员：
			<textarea rows="3" cols="50" name="queue"><?php echo $queue?></textarea>
			<br />
			<p />
			要查询序号的名称：<input name="target" type="text" value="<?php echo $target?>" />
			<br />
			<p />
			<input type="submit" value="查询" />
		</form>
	</div>

	<div>
		<?php 
		$start = gettimeofday();
		
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
		
		$end = gettimeofday();
		
		$second = $end[sec]-$start[sec];
		$msec = ($end[usec]-$start[usec])/1000000;
		
		echo "用时".($second+$msec)."秒";
		
		?>

	</div>
</body>
</html>
