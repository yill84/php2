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
<P style="TEXT-ALIGN: left; LINE-HEIGHT: 160%; MARGIN: 0cm 0cm 0pt; mso-pagination: widow-orphan" class=MsoNormal align=left></SPAN><SPAN style="LINE-HEIGHT: 160%; FONT-FAMILY: ����; FONT-SIZE: 9pt; mso-font-kerning: 0pt; mso-bidi-font-family: ����"><FONT face="Times New Roman">����ա�
	 */
	$start = gettimeofday();
	
	$queue = $response;//trim($_POST["queue"]);
	$queueArray = explode("��", $queue);
	
	//ȡarray��һ��
	$firstName = $queueArray[0];
	$lastSplit = strrchr($firstName,">");
	$firstName = substr($lastSplit,1);
	$queueArray[0] = $firstName;
	
	//ȡarray���һ��
	$lastName = array_pop($queueArray);
	$firstSplit = stripos($lastName,"<");
	$lastName = substr($lastName,0,length);
				
	$target = trim($_POST["target"]);
	
	$last = strrpos($response,"��");
	
	?>
	<div>
		<form action="index.php" method="post">
			<p />
			排队：
			<textarea rows="3" cols="50" name="queue"><?php echo $queue?></textarea>
			<br />
			<p />
			Ҫ��ѯ��ŵ���ƣ�<input name="target" type="text" value="<?php echo $target?>" />
			<br />
			<p />
			<input type="submit" value="��ѯ" />
		</form>
	</div>

	<div>
		<?php 
		if(0 != strcasecmp("",$queue) && 0 != strcasecmp("",$target))
		{
			
			echo "û��ȥ�ص���������".count($queueArray)."��<br/>";

			$queueArrayNoDup = array_unique($queueArray);
			echo "ȥ�ص���������".count($queueArrayNoDup)."��<br/>";

			$i=1;
			foreach ($queueArrayNoDup as $name)
			{
				if(0 == strcasecmp($target, $name))
				{
					echo "\"".$target."\"���ڵ�".$i."λ<br/>";
				}
				$i +=1;
			}
		}
		
		$end = gettimeofday();
		
		$second = $end[sec]-$start[sec];
		$usec = ($end[usec]-$start[usec]);
		
		echo "��ʱ".$second."��".$usec."΢��";
		
		?>

	</div>
</body>
</html>
