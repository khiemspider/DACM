<?php
	$sql="select * from baiviet where idloaitin='$_GET[loaitin]'";//Lay tat ca bai viet cung 1 loai tin
	$baiviet=mysql_query($sql);
	$tongsobaiviet=mysql_num_rows($baiviet);
	$sotrang=ceil($tongsobaiviet/$num);//Chia va lam tron de lay trang
	$i=1;
	
	while($i<=$sotrang){
?>
	<div class="phantrang">
	<a href="index.php?xem=loaitin&loaitin=<?php echo $_GET['loaitin'];?>&trang=<?php echo $i;?>">
	<? if($i==$trang)
		{
	?>
	<div class="trang" style="background-color:#0e76bc">
		<?php
			echo $i;
		?>
	</div>
	<?
		}
		else
		{
	?>
	<div class="trang">
		<?php
			echo $i;
		?>
	</div>
	<?
		}
	?>
	</a>
	</div>
<?php
	$i++;
	}
?>
	