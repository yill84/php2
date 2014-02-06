<html>
<head>
</head>
<body>
	ver:1.0
	
	<br />
	<?php 
	//http://www.elimautism.org/news_content4.asp?id=119
	/*
	 * 
<P style="TEXT-ALIGN: left; LINE-HEIGHT: 160%; MARGIN: 0cm 0cm 0pt; mso-pagination: widow-orphan" class=MsoNormal align=left></SPAN><SPAN style="LINE-HEIGHT: 160%; FONT-FAMILY: 宋体; FONT-SIZE: 9pt; mso-font-kerning: 0pt; mso-bidi-font-family: 宋体"><FONT face="Times New Roman">田浩琳、
	 */
	$start = gettimeofday();
	
	$queue = $response;//trim($_POST["queue"]);
	$queueArray = explode("、", $queue);
	
	//取array第一个
	$firstName = $queueArray[0];
	$lastSplit = strrchr($firstName,">");
	$firstName = substr($lastSplit,1);
	$queueArray[0] = $firstName;
	
	//取array最后一个
	$lastName = array_pop($queueArray);
	$firstSplit = stripos($lastName,"<");
	$lastName = substr($lastName,0,length);
				
	$target = trim($_POST["target"]);
	
	$last = strrpos($response,"、");
	
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
		if(0 != strcasecmp("",$queue) && 0 != strcasecmp("",$target))
		{
			
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
		$usec = ($end[usec]-$start[usec]);
		
		echo "用时".$second."秒".$usec."微秒";
		
		?>

	</div>
</body>
</html>
