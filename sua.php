<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM nguoidung WHERE idnguoidung='$id'";
	$ketqua = mysql_query($sql);
	$dong = mysql_fetch_array($ketqua);
	mysql_query("SET NAMES utf8");
?>
<form action="modules/nguoidung/xuly.php?id=<?php echo $dong['idnguoidung'];?>" method="post">
<div style="width:500px; float:left; padding-left:45px;">
<table width="500px" border="0px">
	<tr height="30" style="font-weight:bold;"> 
    	<td colspan="5" align="center"> CHỨC NĂNG SỬA NGƯỜI DÙNG</td>
    </tr>
    <tr>
    	<td width="161">
        	Tên Người Dùng:
        </td>
        <td width="329">
        	<input type="text" name="ten" value="<?php echo $dong['ten'];?>">
        </td>
    </tr>
    <tr>
    	<td>
        	Tên Đăng Nhập:
        </td>
        <td>
        	<input type="text" name="tendangnhap" value="<?php echo $dong['tendangnhap'];?>">
        </td>
    </tr>
    <tr>
    	<td>
        	Mật Khẩu:
        </td>
        <td>
        	<input type="text" name="matkhau" value="<?php echo $dong['matkhau'];?>">
        </td>
    </tr>
	<tr>
    	<td>
        	Liên Hệ:
        </td>
        <td>
        	<input type="text" name="lienhe" value="<?php echo $dong['lienhe'];?>">
        </td>
    </tr>
    <tr>
    	<td>&nbsp; </td>
    	<td colspan="4">
        	<input type="submit" name="suanguoidung" value="Sửa người dùng" />
        </td>
    </tr>
</table>
</div>
</form>