<?php 
//�껯������=һ������/�����100%
//һ������=365
//����=(�껪�����ʡ����������)/һ������
//�껪������=(�����һ������)/(���������)

$shouyi = $_POST("shouyi");
$benjin = $_POST("benjin");
$day = $_POST("day");

$year = 365;
$nianhua = 0;
if(0 != strcasecmp("",$shouyi) && 0 != strcasecmp("",$benjin)&& 0 != strcasecmp("",$day))
{
	$nianhua = ($shouyi * $year)/($benjin * $day);
}
?>

<div>
	<form action="shouyi.php" method="post">
		����<input type="text" name="benjin" value="<?php echo $benjin?>"/><br/>
		������<input type="text" name="day" value="<?php echo $day?>"/><br/>
		���棺<input type="text" name="shouyi" value="<?php echo $shouyi?>"/><br/>
		
		<input type="submit" value="�����껯������"/>		
	</form>
</div>

<div>
		�껪�����ʣ�<?php echo $nianhua?>
</div>
