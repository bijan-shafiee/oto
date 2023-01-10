<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="12345"/>

	<meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
	<meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Open Graph -->
	<meta property="og:site_name" content="Auto Dealer HTML"/>
	<meta property="og:title" content="Home" />
	<meta property="og:url" content="http://localhost/01_index.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style980.css" />
	<link rel="stylesheet" type="text/css" href="css/style800.css" />
	<link rel="stylesheet" type="text/css" href="css/style700.css" />
	<link rel="stylesheet" type="text/css" href="css/style600.css" />
	<link rel="stylesheet" type="text/css" href="css/style500.css" />
	<link rel="stylesheet" type="text/css" href="css/style400.css" />
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
	$select=$conn->prepare("SELECT * FROM `cars` ORDER BY `cars`.`id`  DESC ");
	$select ->execute();
	$cars=$select->fetchAll(PDO::FETCH_ASSOC);

	
if (isset($_POST['search'])) {
	$name=$_POST['name'];
	header('location:search.php?q='.$name);
  }
?>
	<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="wrapper_1">
					
					<div class="search_auto_wrapper">
						<div class="search_auto">
							<form action="" method="post">
				
							<h3><strong>جستجوی </strong> خودرو</h3>
							
							<div class="clear"></div>
							<label><strong>نام خودرو:</strong></label>
							<div class="select_box_1">
								<input  name="name">
							</div>

							<input  name="search" type="submit" value="جستجو" class="btn_search"/>
							<div class="clear"></div></form>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="recent">
					<h2><strong>لیست</strong> خودروها</h2>
					<div class="recent_carousel">
					<?php
					foreach($cars as $cars):?>
						<div class="slide">
							<a href="cars_info.php?id=<?=$cars['id']?>">
							 
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
