<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<a href="index.php">回首页</a><br/>
	ver:1.0
	<br />
	<?php 
	//http://www.elimautism.org/news_content4.asp?id=119
	/*
	 * 

<P style="TEXT-ALIGN: left; LINE-HEIGHT: 160%; MARGIN: 0cm 0cm 0pt; mso-pagination: widow-orphan" class=MsoNormal align=left></SPAN><SPAN style="LINE-HEIGHT: 160%; FONT-FAMILY: 宋体; FONT-SIZE: 9pt; mso-font-kerning: 0pt; mso-bidi-font-family: 宋体"><FONT face="Times New Roman">田浩琳、何灵曦、郑博文、梁昊祺、戴子杰、林友超、焦子礡、李亮辉、孟令轩、刘金、林克轩、张文钦、曾俊豪、侯文斌、麦兜、杨羿、张天钺、<BR><BR></FONT></SPAN></P>
	 */
	$start = gettimeofday();
	
	//$queue = $response;//trim($_POST["queue"]);
	$queue = "<P style="."\""."TEXT-ALIGN: left; LINE-HEIGHT: 160%; MARGIN: 0cm 0cm 0pt; mso-pagination: widow-orphan"."\""." class=MsoNormal align=left></SPAN><SPAN style="."\""."LINE-HEIGHT: 160%; FONT-FAMILY: 宋体; FONT-SIZE: 9pt; mso-font-kerning: 0pt; mso-bidi-font-family: 宋体"."\""."><FONT face="."\""."Times New Roman"."\"".">田浩琳、何灵曦、郑博文、梁昊祺、戴子杰、林友超、焦子礡、李亮辉、孟令轩、刘金、林克轩、张文钦、曾俊豪、侯文斌、麦兜、杨羿、张天钺、<BR><BR></FONT></SPAN></P>";
	
	echo $queue;
	$queueArray = explode("、", $queue);
	
	echo "原始队列：";
	print_r ($queueArray);		
	echo "<br/>";
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

	echo "修正队列：";
	print_r ($queueArray);
	echo "<br/>";
	
	$target = trim($_POST["target"]);
	
	//$last = strrpos($response,"、");
	
	?>
	<div>
		<form action="paimin.php" method="post">
			<p />
			排队：
			<textarea rows="3" cols="50" name="queue"><?php echo $queue?></textarea>
			<br />
			<p />
			姓名：<input name="target" type="text" value="<?php echo $target?>" />
			<br />
			<p />
			<input type="submit" value="查询" />
		</form>
	</div>

	<div>
		<?php 
		if(0 != strcasecmp("",$queue) && 0 != strcasecmp("",$target))
		{
			echo "未去重人数".count($queueArray)."人<br/>";

			$queueArrayNoDup = array_unique($queueArray);
			echo "去重人数".count($queueArrayNoDup)."人<br/>";

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
		
		echo "耗时".$second."秒".$usec."微秒";
		
		?>

	</div>
</body>
</html>
