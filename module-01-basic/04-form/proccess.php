<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<?php
	$userName = $_POST["login"];
	$passWord = $_POST["password"];
	
	//toán tử điều kiện
	$result = ($userName == "admin" && $passWord == "123") ? "Đăng nhập thành công" : "Đăng nhập thất bại";
	echo $result; 