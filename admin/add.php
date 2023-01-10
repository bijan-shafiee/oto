<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<!-- Page Title -->
	<title>Add</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />

</head>
<body class="sell">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>

	<!--BEGIN PHP-->
	<?php
	include '../db.php';
	if (isset($_POST['sub'])) {
  	$filename = $_FILES["uploadfile"]["name"]; 
  	$tempname = $_FILES["uploadfile"]["tmp_name"];  
    $folder = "images/".$filename; 

    $name = $_POST['name'];
    $company = $_POST['company'];
	$salesakht = $_POST['salesakht'];
	$karkerd = $_POST['karkerd'];
	$vazeiat = $_POST['vazeiat'];
	$rang = $_POST['rang'];
	$emkanat = $_POST['emkanat'];
    $qeymat = $_POST['qeymat'];
	$filename = $_FILES["uploadfile"]["name"]; 
    $insert = $conn->prepare("INSERT INTO cars SET name=?,company=?,salesakht=?,karkerd=?,vazeiat=?,rang=?,emkanat=?,qeymat=?,image=?");
    $insert->bindValue(1, $name);
    $insert->bindValue(2, $company);
    $insert->bindValue(3, $salesakht);
    $insert->bindValue(4, $karkerd);
    $insert->bindValue(5, $vazeiat);
	$insert->bindValue(6, $rang);
	$insert->bindValue(7, $emkanat);
	$insert->bindValue(8, $qeymat);
	$insert->bindValue(9, $filename);
    $insert->execute();
    if (move_uploaded_file($tempname, $folder))  { 
      $msg = "Image uploaded successfully"; 
  }else{ 
      $msg = "Failed to upload image"; 
}
    header('location:index.php');
}


?>
	<!--END PHP-->

	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Add an offer</span>
				</div>
				<div class="main_wrapper">
					
					
					<form  method="post"enctype="multipart/form-data">
					<div class="sell_box sell_box_1">
						<h2><strong>اطلاعات</strong> خودرو</h2>
						
						<div class="input_wrapper large">
							<label><span>* </span><strong>نام خودرو</strong></label>
							<input name="name" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>شرکت سازنده</strong></label>
							<input name="company" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>سال ساخت</strong></label>
							<input name="salesakht" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>کارکرد</strong></label>
							<input name="karkerd" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>وضعیت</strong></label>
							<input name="vazeiat" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>رنگ</strong></label>
							<input name="rang" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>امکانات</strong></label>
							<input name="emkanat" type="text" class="txb large" value=""/>

							<label><span>* </span><strong>قیمت</strong></label>
							<input name="qeymat" type="text" class="txb large" value=""/>

						</div>
						
						<div class="clear"></div>
					</div>

					<div class="sell_box sell_box_4">
						<h2><strong>تصویر</strong> خودرو</h2>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								<input type="file" name="uploadfile" value="" /> 
							</a>
						</div>
						
						<div class="clear"></div>
					</div>
				
					<div class="sell_submit_wrapper">
						
						<input name="sub" type="submit" value="Submit" class="sell_submit"/>
						<div class="clear"></div>
					</div>
					</form>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<?php include '../footer.php' ?>
	<!--EOF FOOTER-->
</body>
</html>
