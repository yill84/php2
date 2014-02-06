<?php 
//年化收益率=一年收益/本金×100%
//一年天数=365
//收益=(年华收益率×本金×天数)/一年天数
//年华收益率=(收益×一年天数)/(本金×天数)

$shouyi=$_POST("shouyi");
$benjin=$_POST("benjin");;
$day=$_POST("day");;

$year=365;
$nianhua;

?>

<div>
	<form action="shouyi.php" method="POST">
		本金：<input type="text" value="<?php echo $benjin;?>"/><br/>
		天数：<input type="text" value="<?php echo $day;?>"/><br/>
		收益：<input type="text" value="<?php echo $shouyi;?>"/><br/>
		
		<input type="submit" value="计算"/>		
	</form>
</div>

<div>
		年华收益率：<?php echo $nianhua;?>
</div>
