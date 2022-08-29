<div class="main-mid">
<h3 style="color: #b21117; font-size:15px; margin-left:15px; margin-bottom: 20px; margin-right: 15px; line-height: 40px; border-bottom: 5px #8c8c8c solid;"> TIN NỔI BẬT</h3>
	<?php
		$sql="select * from baiviet where vitri=1 order by idbaiviet desc"; //desc: Giam dan, asc: tang dan
		$baiviet=mysql_query($sql);
	?>
	
	<?php
		      while($dong=mysql_fetch_array($baiviet))
			  {
					echo "<a href=index.php?xem=baiviet&baiviet=".$dong['idbaiviet'].">";
						echo "<li>". $dong['tenbaiviet']."</li>";
					echo "</a>";
				
			   }
	?>  
<h3 style="color: #b21117; font-size:15px; margin-left:15px; margin-bottom: 20px; margin-right: 15px; line-height: 40px; border-bottom: 5px #8c8c8c solid;"> PHỎNG VẤN</h3>
	<?php
		$sql="select * from baiviet where idloaitin=14 order by idbaiviet desc"; //desc: Giam dan, asc: tang dan
		$baiviet=mysql_query($sql);
	?>
	
			<?php
		       while($dong=mysql_fetch_array($baiviet))
			  {
					echo "<a href=index.php?xem=baiviet&baiviet=".$dong['idbaiviet'].">";
						echo "<li>". $dong['tenbaiviet']."</li>";
					echo "</a>";
				
			   }
	?>    		
</div>