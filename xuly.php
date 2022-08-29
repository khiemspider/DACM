<?php
	include("../connect.php"); //Kết nối csdl
	mysql_query("SET NAMES utf8");
	//Lấy dữ liệu
	if($_POST['themnguoidung']!="")
	{
		$ten = $_POST['ten'];
		$tendangnhap = $_POST['tendangnhap'];
		$matkhau = $_POST['matkhau'];
		$lienhe = $_POST['lienhe'];
		//Định nghĩa lệnh insert vào CSDL
		$sql= "INSERT INTO nguoidung(ten,tendangnhap,matkhau,lienhe) VALUES('$ten','$tendangnhap','$matkhau','$lienhe')";
		mysql_query($sql);
		header("location: ../../index.php?ac=nguoidung");
	}
	elseif(	$_POST['suanguoidung']!="")
	{
		//Thực hiện sửa loại tin
		$ten = $_POST['ten'];
		$tendangnhap = $_POST['tendangnhap'];
		$matkhau = $_POST['matkhau'];
		$lienhe = $_POST['lienhe'];
		//Định nghĩa câu lệnh sửa
		$sql="UPDATE nguoidung SET ten='$ten', tendangnhap='$tendangnhap', matkhau='$matkhau',lienhe='$lienhe' WHERE idnguoidung='$_GET[id]'";
		//Thực hiện câu lệnh đã định nghĩa
		mysql_query($sql);
		header("location: ../../index.php?sua=nguoidung&id=$_GET[id]");
	}
	else
	{
		//Thực hiện xóa
		$id=$_GET['id'];
		$sql="delete from nguoidung where idnguoidung='$id'";
		mysql_query($sql);
		header("location: ../../index.php?ac=nguoidung");
	}
?>