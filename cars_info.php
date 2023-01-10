<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Page Title -->
	<title>Car</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />

</head>
<body class="car">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->
<!--BEGIN PHP-->
	<?php
		$id=$_GET['id'];
		include 'db.php';
		$selectcars=$conn->prepare("SELECT * FROM `cars` WHERE id=? ");
		$selectcars ->bindValue(1,$id);
		$selectcars ->execute();
		$showcars=$selectcars->fetchAll(PDO::FETCH_ASSOC);
	?>
<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
			<?php foreach ($showcars as $showcars):  ?>
				<div class="breadcrumbs">
					<a href="#">صفحه اصلی</a>
					<img src="images/marker_2.gif" alt=""/>
					<span><?= $showcars['name'] ?></span>
				</div>
				<div class="main_wrapper">
				
					<h1><strong><?= $showcars['name'] ?></strong></h1>
					<div class="car_image_wrapper car_group">
						<div class="big_image">
							<a href="images/<?= $showcars['image'] ?>" class="car_group">
								<img src="images/zoom.png" alt="" class="zoom"/>
								<img src="images/<?= $showcars['image'] ?>" alt=""/>
							</a>
						</div>
						
					</div>
					<div class="car_characteristics">
						<div class="price"><?= $showcars['qeymat'] ?></div>
						<div class="clear"></div>
						<div class="features_table">
							<div class="line grey_area">
								<div class="left">سازنده :</div>
								<div class="right"><?= $showcars['company'] ?></div>
							</div>
							<div class="line">
								<div class="left">سال ساخت :</div>
								<div class="right"><?= $showcars['salesakht'] ?></div>
							</div>
							<div class="line grey_area">
								<div class="left">کارکرد :</div>
								<div class="right"><?= $showcars['karkerd'] ?></div>
							</div>
							<div class="line">
								<div class="left">وضعیت:</div>
								<div class="right"><?= $showcars['vazeiat'] ?></div>
							</div>
							<div class="line grey_area">
								<div class="left">رنگ :</div>
								<div class="right"><?= $showcars['rang'] ?></div>
							</div>
							<div class="line">
								<div class="left">امکانات :</div>
								<div class="right"><?= $showcars['emkanat'] ?></div>
							</div>
						</div>
						<div class="wanted_line">
							<div class="right">
							<a  href="buy.php?&i=<?= $showcars['id']?>&n=<?= $showcars['name']?>&u=<?= $_SESSION['username']?>" name="kharid">خرید</a></label>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="info_box">
					
						
					</div>
					
					<div class="clear"></div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
	<?php include 'footer.php' ?>
	<!--EOF FOOTER-->
</body>
</html>
