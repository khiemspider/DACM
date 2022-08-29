<?php
	include("admin/modules/connect.php");
	mysql_query("SET NAMES utf8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset='utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css\style.css" type="text/css" rel="stylesheet">
<title>Tin tức bóng đá số 1 Việt Nam</title>
<link rel="shortcut icon" type="image/gif" href="images/bongda.gif" />

</head>

<body>
	<div class="khung">
	<?php
		include("modules/menu.php");
		include("modules/banner.php");
		include("modules/menuc.php");
		include("modules/Marketingt.php");
		include("modules/Marketingp.php");
		include("modules/main_body.php");
		include("modules/footer.php");
	?>
	</div>
</body>
</html>
