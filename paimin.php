<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<a href="index.php">回首页</a>
	<br /> ver:1.0
	<br />
	<?php 
	$target = "";
	$queue = "";
	$target = trim(@$_POST["target"]);
	$queue = trim(@$_POST["queue"]);
	$queueArray=array();
		
	if(empty($queue))
	{
		$url = "http://www.elimautism.org/news_content4.asp?id=119";
		//$proxy = "proxy.huawei.com:8080";
		//$userpwd = "h00255794:Yyyy123+";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,$url);
		//curl_setopt($ch, CURLOPT_PROXY, $proxy);
		//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
		curl_setopt($ch, CURLOPT_REFERER, "http://ps.sturgeon.mopaas.com/paimin.php");
		curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36");
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		//curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($ch);
		$ori = mb_convert_encoding($response,"UTF-8","gbk");
		curl_close($ch);
	
		$queueArray = explode("、", $ori);
	
		//删除第一个名字前的html标记
		$firstName = $queueArray[0];
		$lastSplit = strrchr($firstName,">");
		$firstName = substr($lastSplit,1);
		$queueArray[0] = $firstName;

		//删除最后一个名字后的html标记
		$lastName = array_pop($queueArray);
		$firstSplit = stripos($lastName,"<");
		$lastName = substr($lastName,0,$firstSplit);
		array_push($queueArray,$lastName);

		$queue = trim(implode("、",$queueArray));
	}
	else
	{
		$queueArray = explode("、", $queue);
	}

	?>
	<div>
		<form action="paimin.php" method="post">
			<p />
			排队：
			<textarea rows="30" cols="100" id="queue" name="queue"><?php echo $queue?></textarea>
			
			<p />
			姓名：<input name="target" type="text" value="<?php if(0==strlen($target)) {$target="何哲南"}; echo $target?>" /> <br />
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
					echo "<font color='red'>\"".$target."\"排在第".$i."位</font><br/>";
				}
				$i +=1;
			}
		}
		?>

	</div>
</body>
</html>
