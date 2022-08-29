<?php
	$sql="select * from loaitin where trangthai=1 order by thutu asc"; //desc: Giam dan, asc: tang dan
	$loaitin=mysql_query($sql);
?>
<div class="menuc">        	
    <ul class="menuc">
		<a href="index.php">
   			<li> TRANG CHỦ</li>
        </a>
        <?php
		      while($dong=mysql_fetch_array($loaitin))
			  {
					echo "<a href=index.php?xem=loaitin&loaitin=".$dong['idloaitin'].">";
						echo "<li>". $dong['tenloaitin']."</li>";
					echo "</a>";
				
			   }
		?>        
   </ul>
</div>