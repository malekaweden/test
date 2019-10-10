<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>login</title>
    <link rel='stylesheet' type="text/css" href="css/login.css">
    <link rel='stylesheet' type="text/css" href="css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>
<body>
<?php
include 'conn.php';
	session_start();
	if(isset($_POST['login'])){
		if(empty($_POST['username']||empty($_POST['pass']))){
			$error ="ارجاء ادخال اسم المستخدم وكلمة المرور ";
		}
		else{
			$user=$_POST['username'];
			$pass=md5($_POST['pass']);
			$query="select * from user where user='$user' and pass='$pass' LIMIT 1 ";
			$sql=$connect->prepare($query);
			$sql->execute();
			$count=$sql->fetchcolumn();
			if($count == 1){
				$_SESSION['username']=$user;
				header('location:index.php');

			}
			else{
				$error= "اسم المستخدم او كلمة المرور غير صحيحة ";
			}
			
		}
	}
?>



<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST">
					<?php 
					if(isset($error)){
						?><h1><?php echo $error;?> </h1><?php
					}
					?>
					<span class="login100-form-title">
						تسجيل الدخول 
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="اسم المستخدم ">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="كلمة المرور ">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">

					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							دخول 
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							
						</span>

						<a href="#" class="txt3">
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>