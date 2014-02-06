<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		ver:1.0
		计算年化收益率：
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
			<form name="nianhua" action="shouyi.php" method="post">
				本金：<input type="text" name="benjin" value="<?php echo $benjin?>"/><br/>
				天数：<input type="text" name="day" value="<?php echo $day?>"/><br/>
				收益：<input type="text" name="shouyi" value="<?php echo $shouyi?>"/><br/>
				
				<input type="submit" value="计算"/>		
			</form>
		</div>
		
		<div>
				年华收益率：<?php echo $nianhua?>
		</div>
		
		
		计算收益：
		<?php 
		$shouyi1 = $_POST["nianhua1"];
		$benjin1 = $_POST["benjin1"];
		$day1 = $_POST["day1"];
		
		$year1 = 365;
		$shouyi1 = 0;
		if(0 != strcasecmp("",$nianhua1) && 0 != strcasecmp("",$benjin1)&& 0 != strcasecmp("",$day1))
		{
			$shouyi1 = ($nianhua1 * $benjin1 * $day1)/$year1;
		}
		?>
		
		<div>
			<form name="shouyi" action="shouyi.php" method="post">
				本金：<input type="text" name="benjin1" value="<?php echo $benjin1?>"/><br/>
				天数：<input type="text" name="day1" value="<?php echo $day1?>"/><br/>
				年华收益率：<input type="text" name="shouyi1" value="<?php echo $nianhua1?>"/><br/>
				
				<input type="submit" value="计算"/>		
			</form>
		</div>
		
		<div>
				收益：<?php echo $shouyi1?>
		</div>
		
	</body>
</html>