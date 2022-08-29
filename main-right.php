<?php
	$sql="select * from quangcao where vitri=1";
	$quangcao=mysql_query($sql);
?>
<div class="main-right">
	<?php while ($dong=mysql_fetch_array($quangcao)){?>
		<div style="border-bottom:1px solid #CCC; padding-left:8px; padding-right:5px;" >
			<?php echo $vitri; ?>
			<a href="<?php echo $dong['lienket']?>">
				<p> <img src="<? echo $dong['anhminhhoa']; ?>" width="246" style="padding-top:10px;" title="Click để xem"> </p>
			</a>
			<div style="height:10px"></div>
		</div> 
		<div style="clear:both"> </div>
	<?php }?>
</div>