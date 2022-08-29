<div style="width:500px; margin-top:10px; float:right; padding-right:30px;">
<table class="ds" width="500" border="1px">
	<tr height="50">
    	<td colspan="7" align="center">
        	<b>DANH SÁCH NGƯỜI DÙNG</b>
        </td>
    </tr>
	<tr style="font-weight:bold; text-align:center;">
		<td>STT</td>
		<td>Tên Người Dùng</td>
		<td>Tên Đăng Nhập</td>
		<td>Mật Khẩu</td>
		<td>Liên Hệ</td>
		<td colspan="2"> Quản trị</td>
	</tr>
    <?php
		$sql="select * from nguoidung";
		$nguoidung=mysql_query($sql);
		mysql_query("SET NAMES utf8");
	?>
        <?php
		$i=1;
		while ($dong=mysql_fetch_array($nguoidung))
		{
		echo "<tr>";
			echo "<td>". $i."</td>";
			echo "<td>". $dong['ten']."</td>";
			echo "<td>". $dong['tendangnhap']."</td>";
			echo "<td>". $dong['matkhau']."</td>";
			echo "<td>". $dong['lienhe']."</td>";
			echo "<td><a href=index.php?sua=nguoidung&id=".$dong['idnguoidung']."> Sửa </a></td>";
			echo "<td><a href=modules/nguoidung/xuly.php?id=".$dong['idnguoidung']."> Xóa </a></td>";
		echo "</tr>";
		$i++;
	  }
	?>
</table>
</div>