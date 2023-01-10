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
	$select=$conn->prepare("SELECT * FROM `contacts`");
	$select ->execute();
	$contacts=$select->fetchAll(PDO::FETCH_ASSOC);
   
	
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
      <th scope="col">ایمیل </th>
      <th scope="col">شماره تلفن</th>
      <th scope="col">متن پیام</th>
    </tr>
  </thead>
  <?php 
  foreach($contacts as $contacts):?>
  
  <tbody style="background-color: antiquewhite;text-align: center;">
    <tr>
      <th scope="row"><?= $contacts['id'] ?></th>
      <td><?= $contacts['name'] ?></td>
      <td><?= $contacts['email'] ?></td>
      <td><?= $contacts['phone'] ?></td>
      <td><?= $contacts['message'] ?></td>
      
      
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
