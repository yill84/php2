<html>
<head>
</head>
<body>
	ver:1.0
	<br />
	<?php 
	$queue = trim($_POST["queue"]);
	$target = trim($_POST["target"]);
	?>
	<div>
		<form action="index.php" method="post">
			<p />
			ճ�������Ŷ���Ա��
			<textarea rows="3" cols="50" name="queue"><?php echo $queue?></textarea>
			<br />
			<p />
			Ҫ��ѯ��ŵ����ƣ�<input name="target" type="text" value="<?php echo $target?>" />
			<br />
			<p />
			<input type="submit" value="��ѯ" />
		</form>
	</div>

	<div>
		<?php 
		if(0 != strcasecmp("",$queue) && 0 != strcasecmp("",$target))
		{
			$queueArray = explode("��", $queue);
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
		?>

	</div>
</body>
</html>
