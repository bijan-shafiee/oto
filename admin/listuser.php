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
	$select=$conn->prepare("SELECT * FROM `users`");
	$select ->execute();
	$users=$select->fetchAll(PDO::FETCH_ASSOC);
   
	
?>
	<!--END PHP-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
            <table class="table" style="    width: 100%;direction: rtl;border-radius: 12px;border: burlywood;margin: 5px;border: groove;border-color: antiquewhite;padding: 10px;">
  <thead>
    <tr style="background-color: whitesmoke;text-align: center;">
      <th scope="col">#</th>
      <th scope="col">نام کاربری</th>
      <th scope="col">ایمیل </th>
      <th scope="col">شماره تلفن</th>
      <th scope="col">نقش</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <?php 
  foreach($users as $users):?>
  
  <tbody style="background-color: antiquewhite;text-align: center;">
    <tr>
      <th scope="row"><?= $users['id'] ?></th>
      <td><?= $users['username'] ?></td>
      <td><?= $users['email'] ?></td>
      <td><?= $users['phone'] ?></td>
      <td><?= $users['roll'] ?></td>
      <td>
          <a href="deleteuser.php?id=<?=$users['id'] ?>" class="btn btn-danger">  حذف  </a>
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
