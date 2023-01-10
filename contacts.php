<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



	<!-- Page Title -->
	<title>Contacts</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body class="contacts">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->
		<!--BEGIN PHP-->
		<?php
include 'db.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
    $insert=$conn->prepare("INSERT INTO contacts SET name=?,email=?,phone=?,message=?");
    $insert -> bindValue(1,$name);
	$insert -> bindValue(2,$email);
	$insert -> bindValue(3,$phone);
    $insert -> bindValue(4,$message);
    
    $insert -> execute();
    header('location:index.php');
}
?>
	<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Contact Us</span>
				</div>
				<div class="main_wrapper">
					<h1><strong>Contact</strong> Us</h1>
					
					<div class="contact_form">
					
						<form method="post" action="#">
							<div class="fld_box">
								<label>نام: </label>
								<input name="name" type="text" value=""/>
							</div>
							<div class="fld_box center">
								<label>E-mail: </label>
								<input name="email" type="text" value=""/>
							</div>
							<div class="fld_box last">
								<label>شماره تماس: </label>
								<input name="phone" type="text" value=""/>
							</div>
							<div class="clear"></div>
							<label>متن پیام: </label>
							<textarea name="message" cols="20" rows="20"></textarea>
							<input type="submit" name="sub"  value="ارسال پیام" class="submit"/>
						</form>
					</div>

				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
	<?php include 'footer.php' ?>
	<!--EOF FOOTER-->
</body>
</html>
