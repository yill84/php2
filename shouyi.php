<?php 
//�껯������=һ������/�����100%
//һ������=365
//����=(�껪�����ʡ����������)/һ������
//�껪������=(�����һ������)/(���������)

$shouyi=$_POST("shouyi");
$benjin=$_POST("benjin");;
$day=$_POST("day");;

$year=365;
$nianhua;

?>

<div>
	<form action="shouyi.php" method="POST">
		����<input type="text" value="<?php echo $benjin;?>"/><br/>
		������<input type="text" value="<?php echo $day;?>"/><br/>
		���棺<input type="text" value="<?php echo $shouyi;?>"/><br/>
		
		<input type="submit" value="����"/>		
	</form>
</div>

<div>
		�껪�����ʣ�<?php echo $nianhua;?>
</div>
