<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!-- Page Title -->
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
	<!--[if IE]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.selectik.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.checkbox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body class="page">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->
<!--BEGIN PHP-->
<?php
	include 'db.php';
    $q=$_GET['q'];
	$select=$conn->prepare("SELECT * FROM `cars`  WHERE name LIKE '%$q%'  ");
	$select ->execute();
	$cars=$select->fetchAll(PDO::FETCH_ASSOC);

	

?>
	<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
            <div class="breadcrumbs">
					<a href="index.php">صفحه اصلی</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>جستجو</span>
				</div>
				<div class="wrapper_1">
					
					
					<div class="clear"></div>
				</div>
				<div class="recent">
					<h2><strong>نتیجه جستجو</strong> </h2>
					<div class="recent_carousel">
					<?php
					foreach($cars as $cars):?>
						<div class="slide">
							<a href="#">
								<img src="images/<?=$cars['image'] ?>" alt=""/>
								<div class="description">شرکت:  <?=$cars['company'] ?><br/>رنگ : <?=$cars['rang'] ?>سال ساخت : <br/><?=$cars['salesakht'] ?>کارکرد : <br/><?=$cars['karkerd'] ?>وضعیت : <br/><?=$cars['vazeiat'] ?></div>
								<div class="title"><?=$cars['name'] ?> <span class="price"><?=$cars['qeymat'] ?>تومان</span></div>
							</a>
						</div>
						<?php endforeach ?>
					</div>
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
