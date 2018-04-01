<?php 
	session_start();
	require "application/helper/common_helper.php";
	require 'application/config/constant.php';
	class Router
	{
		function __construct()
		{
			
		}	
		function home(){
			require 'application/controller/home.php';
		}
		function details(){
			require 'application/controller/detail_manga.php';
		}
		function manga(){
			require 'application/controller/read_manga.php';
		}
		function action(){
			require 'application/controller/action_page.php';
		}

	}
	$c = isset($_GET['c']) ? trim($_GET['c']): 'home';//kiem tra xem co ton tai c tren trinh duyet hay k0 (theo phuong GET neu khong co thi gia tri mac dinh cua $c = home, va xoa khoang trang 2 dau o value c tren trinh duyet. 
	$controller = new Router();// khoi tao class
	$controller->$c();// goi den cac phuong thuc
?>