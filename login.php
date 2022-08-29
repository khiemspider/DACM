<?php
include("admin/modules/connect.php");
session_start();

session_register("mklogin");
$sub=$_GET['sub'];
$page_title.=' - Đăng nhập';
if ($_SESSION["mklogin"]==true){header("location: index.php?option=home");}
switch ($sub){	
	case 'kien':
		session_register("uid");
		$_SESSION["mklogin"]=true; 
		$_SESSION["uid"]=$check;
		$_SESSION["tendangnhap"]=$tendangnhap;
		header("location: index.php?option=home");
		break;
	case 'do':		
		$db = new Kdb($cf);
		$db->connect();	
		$tendangnhap=$_POST["tendangnhap"];
		$matkhau=$_POST["matkhau"];
		
		if (trim($tendangnhap)!='' && trim($matkhau)!=''){
			$strsql="SELECT * FROM nguoidung where tendangnhap='".$tendangnhap."' and matkhau='".md5($matkhau)."'";
			$db->query($strsql);
			$row=$db->rows;
			$check=$row[0]["id"];	
			if ($check > 0){
				session_register("uid");
				$_SESSION["mklogin"]=true; 
				$_SESSION["uid"]=$check;
				$_SESSION["tendangnhap"]=$tendangnhap;
				header("location: index.php?option=home");
			}
		}
		$err='Lỗi đăng nhập';
		$content=showform($err);
		
		break;
		
	default:
		$err='';
		$content=showform($err);
		break;

}

function showform($err){
$nd='
<center>
<font color="red"><b>'.$err.'</b></font><br>
<span class="maintitle">Đăng nhập hệ thống quản lý</span>
<table width="300" border="0" cellpadding="0" cellspacing="2">
<form action="?option=login&sub=do" method="post" name="loginfrm">
	<tr>
		<td align="left" width="100">Tên đăng nhập:</td>
		<td><input type="text" name="tendangnhap" id="tendangnhap" style="width:170px;"></td>
	</tr>
	<tr>
		<td align="left">Mật khẩu:</td>
		<td><input type="matkhau" name="matkhau" style="width:170px;"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Đăng nhập"></td>
	</tr>
</form>
</table
</center>
<script>
document.getElementById("tendangnhap").focus();
</script>
';
return $nd;
}
//$db->disconnect();
?>
<center>
<font color="red"><b>'.$err.'</b></font><br>
<span class="maintitle">Đăng nhập hệ thống quản lý</span>
<table width="300" border="0" cellpadding="0" cellspacing="2">
<form action="?option=login&sub=do" method="post" name="loginfrm">
	<tr>
		<td align="left" width="100">Tên đăng nhập:</td>
		<td><input type="text" name="tendangnhap" id="tendangnhap" style="width:170px;"></td>
	</tr>
	<tr>
		<td align="left">Mật khẩu:</td>
		<td><input type="matkhau" name="matkhau" style="width:170px;"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Đăng nhập"></td>
	</tr>
</form>
</table
</center>