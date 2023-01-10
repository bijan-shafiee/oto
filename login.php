<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Page Title -->
	<title>Add</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
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
<body class="sell">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->

		<!--BEGIN PHP-->
	<?php
@session_start();
include 'db.php';
if(isset($_POST['sub'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $check=$conn->prepare("SELECT * FROM users WHERE username=? AND pass=?");
    $check -> bindValue(1,$username);
    $check -> bindValue(2,$pass);
    $check -> execute();
    $users=$check->fetchAll(PDO::FETCH_ASSOC);
    foreach($users as $users);
    if($check ->rowCount()>=1){
        $_SESSION['login']=true;
        $_SESSION['email']=$email;
        $_SESSION['username']=$users['username'];
        $_SESSION['id']=$users['id'];
        $_SESSION['roll']=$users['roll'];
        header('location:index.php');
    }
    else{
        print "کاربر وجود ندارد";
    }

}
?>



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
						</div>
						
						<div class="clear"></div>
					</div>

					
				
					<div class="sell_submit_wrapper">
						
						<input name="sub" type="submit" value="ورود" class="sell_submit"/>
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
