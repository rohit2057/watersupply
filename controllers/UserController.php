<?php

class UserController
{

	function Login()
	{
		require_once "views/User/login.php";
	}

	function Home()
	{
		require_once "./views/Dashboard/userdashboard.php";
	}

	function Register()
	{
		require_once "./views/User/register.php";
	}


	function LoginCheck()
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "admin" && $password == "admin") {
			//require_once "admin";
			require_once "views/Admin/dashboard.php";
			// echo "<script>window.location.href = 'admin/dashboard';</script>";
		} else if ($username == "user" && $password == "user") {
			require_once "./views/Dashboard/userdashboard.php";
		} else {
			echo '<script>alert("Username or Password Incorrect !");
   		        </script>';
		}
	}
}
