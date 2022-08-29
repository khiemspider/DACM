<?php
	$sql="select * from quangcao where vitri=0";
	$quangcao=mysql_query($sql);
?>
<div class="Marketingp" style="position: fixed; top: 110px; bottom: 100px; right: 0px;>
	<?php while ($dong=mysql_fetch_array($quangcao)){?>
		<div style="padding-left:5px; padding-right:45px;" >
			<?php echo $vitri; ?>
			<a href="<?php echo $dong['lienket']?>">
				<p> <img src="<? echo $dong['anhminhhoa']; ?>" width="90" height="450" title="Click để xem"> </p>
			</a>
			<div style="height:10px"></div>
		</div> 
		<div style="clear:both"> </div>
	<?php }?>
</div>