<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



	<!-- Page Title -->
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />

	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />

</head>
<body class="page">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->
<!--BEGIN PHP-->
<?php
	include '../db.php';
	$select=$conn->prepare("SELECT * FROM `cars`");
	$select ->execute();
	$cars=$select->fetchAll(PDO::FETCH_ASSOC);
   
	
?>
	<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
            <table class="table" style="    width: 100%;direction: rtl;border-radius: 12px;border: burlywood;margin: 5px;border: groove;border-color: antiquewhite;padding: 10px;">
  <thead>
    <tr style="background-color: whitesmoke;text-align: center;">
      <th scope="col">#</th>
      <th scope="col">نام </th>
      <th scope="col">شرکت سازنده </th>
      <th scope="col">سال ساخت </th>
      <th scope="col"> کارکرد</th>
      <th scope="col">وضعیت</th>
      <th scope="col">رنگ </th>
      <th scope="col">امکانات </th>
      <th scope="col"> قیمت</th>
      <th scope="col"> تصویر</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <?php 
  foreach($cars as $cars):?>
  
  <tbody style="background-color: antiquewhite;text-align: center;">
    <tr>
      <th scope="row"><?= $cars['id'] ?></th>
      <td><?= $cars['name'] ?></td>
      <td><?= $cars['company'] ?></td>
      <td><?= $cars['salesakht'] ?></td>
      <td><?= $cars['karkerd'] ?></td>
      <td><?= $cars['vazeiat'] ?></td>
      <td><?= $cars['rang'] ?></td>
      <td><?= $cars['emkanat'] ?></td>
      <td><?= $cars['qeymat'] ?></td>
      <td><img src="../images/<?=$cars['image']?>" alt="" height="150px" width="200px"></td>
      <td>
          <a href="deletecars.php?id=<?=$cars['id'] ?>" class="btn btn-danger">  حذف  </a>
          <br>
          <a href="editcars.php?id=<?=$cars['id'] ?>" class="btn btn-warning">ویرایش </a>
      </td>
    </tr>
  </tbody>
  <?php endforeach ?>
</table>
   

				
					
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<?php include '../footer.php' ?>
	<!--EOF FOOTER-->
</body>

</html>
