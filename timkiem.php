<?php

mysql_connect('localhost', 'root', '') or die ('Không thể kết nối database');
mysql_select_db('webbongda');
mysql_query("SET NAMES utf8");
?>
<?php
	include("admin/modules/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css\style.css" type="text/css" rel="stylesheet" />
<title>Untitled Document</title>

<div class="khungtoanbo">
  <?php
			include("modules/banner.php");
			include("modules/menu.php");
			include("modules/menuc.php");
			include("modules/Marketingt.php");
			include("modules/MarketingP.php");
			//include("modules/main-right.php");
			echo '<div class="main-left">';
		
			echo '		<div class="xoa">
			</div>
</div>
';?>
<?

$key = trim($_GET['key']);

echo '<div class="tieudekhung" style="margin-left:110px;">KẾT QUẢ TÌM KIẾM LOẠI TIN</div>';

$sql="SELECT * FROM loaitin WHERE `tenloaitin` LIKE  '%$key%'";
$data = mysql_query($sql);

echo '<div style="background:#FFF; margin-left:110px;">';
if (mysql_num_rows($data) == 0)
{
	echo 'Không tìm thấy loại tin nào.';
}
else
{
	$i = 1;
	while ($rows = mysql_fetch_array ($data))
	{
		echo '<div class="linkList">';
		echo $i.' <a href="index.php?xem=loaitin&loaitin='.$rows['idloaitin'].'">'
		.$rows['tenloaitin'].'</a></div>';
		$i++;
	}
}

echo '<div class="tieudekhung">KẾT QUẢ TÌM KIẾM BÀI VIẾT</div>';
$sql="SELECT * FROM baiviet WHERE `tenbaiviet` LIKE  '%$key%'";
$data = mysql_query($sql);

echo '<div style="background:#FFF;">';
if (mysql_num_rows($data) == 0)
{
	echo 'Không tìm thấy bài viết nào.';
}
else
{
	$i = 1;
	while ($rows = mysql_fetch_array ($data))
	{
		echo '<div class="linkList">';
		echo $i.' <a href="index.php?xem=baiviet&loaitin='.$rows['idloaitin'].'&baiviet='.$rows['idbaiviet'].'">'
		.$rows['tenbaiviet'].'</a></div>';
		$i++;
	}
}
echo '</div>        <div class="xoa"> </div>';
		
?>