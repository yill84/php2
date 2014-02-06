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
			$nianhua1 = $_POST["nianhua1"];
			
			$year = 365;
			if(0 != strcasecmp("",$shouyi) && 0 != strcasecmp("",$benjin)&& 0 != strcasecmp("",$day))
			{
				$nianhua = ($shouyi * $year * 100)/($benjin * $day) ;
			}
			
			if(0 != strcasecmp("",$nianhua1) && 0 != strcasecmp("",$benjin)&& 0 != strcasecmp("",$day))
			{
				$shouyi1 = ($nianhua1 * $benjin * $day)/($year * 100);
			}
		?>
		
		<div>
			<form name="nianhua" action="shouyi.php" method="post">
				本金：<input type="text" name="benjin" value="<?php echo $benjin?>"/><br/>
				天数：<input type="text" name="day" value="<?php echo $day?>"/><br/>
				收益：<input type="text" name="shouyi" value="<?php echo $shouyi?>"/><br/>
				年华收益率(%)：<input type="text" name="nianhua1" value="<?php echo $nianhua1?>"/><br/>
				
				<input type="submit" value="计算"/>
			</form>
		</div>
		
		<div>
				年华收益率(%)：<?php echo $nianhua?>
				收益：<?php echo $shouyi1?>
		</div>
	</body>
</html>