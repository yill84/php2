<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		ver:1.0
		<?php 
		$shouyi = $_POST["shouyi"];
		$benjin = $_POST["benjin"];
		$day = $_POST["day"];
		
		$year = 365;
		$nianhua = 0;
		if(0 != strcasecmp("",$shouyi) && 0 != strcasecmp("",$benjin)&& 0 != strcasecmp("",$day))
		{
			$nianhua = ($shouyi * $year)/($benjin * $day);
		}
		?>
		
		<div>
			<form action="shouyi.php" method="post">
				本金：<input type="text" name="benjin" value="<?php echo $benjin?>"/><br/>
				天数：<input type="text" name="day" value="<?php echo $day?>"/><br/>
				收益：<input type="text" name="shouyi" value="<?php echo $shouyi?>"/><br/>
				
				<input type="submit" value="计算"/>		
			</form>
		</div>
		
		<div>
				年华收益率：<?php echo $nianhua?>
		</div>
	</body>
</html>