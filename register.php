<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Page Title -->
	<title>Add</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body class="sell">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->
	<!--BEGIN PHP-->
	<?php
include 'db.php';
if(isset($_POST['sub'])){
    $name=$_POST['username'];
    $pass=$_POST['pass'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
    $insert=$conn->prepare("INSERT INTO users SET username=?,pass=?,phone=?,email=?");
    $insert -> bindValue(1,$name);
	$insert -> bindValue(2,$pass);
	$insert -> bindValue(3,$phone);
    $insert -> bindValue(4,$email);
    
    $insert -> execute();
    header('location:login.php');
}
?>
<style>
	input{
		width: 99%;
		margin: 5px;
		color: blue;
		font-size: large;	
	}
	label{
		width: 50%;
	}
</style>
	<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Add an offer</span>
				</div>
				<div class="main_wrapper">
					
					<h1><strong>ورود</strong></h1>
					<form  method="post">
					<div class="sell_box sell_box_1">
						
						
						<div class="input_wrapper large">
						
							<label><span>* </span><strong>نام کاربری </strong></label>
							<input name="username" type="text" class="txb large" value=""/>
							<label><span>* </span><strong>رمز</strong></label>
							<input name="pass" type="text" class="txb large" value=""/>
							<label><span>* </span><strong>شماره تلفن</strong></label>
							<input name="phone" type="text" class="txb large" value=""/>
							<label><span>* </span><strong>ایمیل</strong></label>
							<input name="email" type="text" class="txb large" value=""/>
						
						</div>
						
						<div class="clear"></div>
					</div>

					
				
					<div class="sell_submit_wrapper">
						
						<input type="submit" name="sub" value="ثبتنام" class="sell_submit"/>
						<div class="clear"></div>
						
					</div>
				</form>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<?php include 'footer.php' ?>
	<!--EOF FOOTER-->
</body>
</html>
