<?php 
include("admin/modules/connect.php");
 $err ;
 if($_POST["dangnhap"]){
        $tendangnhap=$_POST["tendangnhap"];
        $matkhau=$_POST["matkhau"];
		if (trim($tendangnhap)!='' && trim($matkhau)!=''){
			$strsql="SELECT * FROM nguoidung where tendangnhap='".$tendangnhap."' and matkhau='".$matkhau."'";
             $row = mysql_query($strsql);
			if (mysql_num_rows($row) > 0){
				session_register("uid");
				$_SESSION["mklogin"]=true; 
				$_SESSION["uid"]=$check;
				$_SESSION["tendangnhap"]=$tendangnhap;
				header("location:admin/index.php?option=home");
			}else{
                $err='Lỗi đăng nhập';
               
            }
		}
 }

?>
   
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> FORM ĐĂNG NHẬP QUẢN TRỊ </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css\login.css" type="text/css">
<link rel="shortcut icon" type="image/gif" href="images/LOGIN.jpg" />
</head>
<body>

<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" method="post">
    <p>
    <input type="text" id="username" name="tendangnhap" placeholder="Tên đăng nhập " required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="matkhau" placeholder="Mật khẩu " required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" name="dangnhap" id="login" value="Login">
    </p>
  </form>
  <?php if($err){
    echo "<div class='w3-panel w3-red ' ><h4> Cảnh báo !</h4><p style ='font-size:13px'>".$err."</p></div>";
}
?>
  <div id="create-account-wrap">
    <p>
  
    <p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->

</body>
</html>