<?php
	$sql="select * from loaitin";
	$loaitin=mysql_query($sql);
?>
<div class="main-left">
	<?php
		if (isset($_GET['xem'])!=NULL)
		{
			if ($_GET['xem']=='baiviet'){
				include("modules/main-left/chi-tiet.php");		
			
			}
			elseif ($_GET['xem']=='loaitin'){
				include("modules/main-left/chi-tiet-loai-tin.php");
				include("modules/trang.php");
			}
		}
			else{
				include("modules/main-left/tin-moi.php");	
				
				//Hiển thị tất cả các mục loại tin
				while ($dong=mysql_fetch_array($loaitin))
				{
					include("modules/main-left/loai-tin.php");
				}			
			}		
			//include("modules/main-left/chi-tiet-loai-tin.php");
		
	?> 
	<div class="xoa">
	</div> 	
</div>
