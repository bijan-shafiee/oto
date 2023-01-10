<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Page Title -->
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body class="page">
	<!--BEGIN HEADER-->
	<?php include 'header.php' ?>
	<!--EOF HEADER-->
<!--BEGIN PHP-->

	<!--END PHP-->
	<style>
		button{
			width: 100px;
    		height: 100px;
    		border-radius: 50px;
    		border-color: yellowgreen;
		}
		.content{
			text-align: center;
		}
		a{
			font-size: large;
    		color: slateblue;
		}
	</style>
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="wrapper_1">
					
					<button>
                        <a href="add.php">ثبت خودروی جدید</a>
                    </button>
                    <button>
                        <a href="listcars.php">نمایش خودروها</a>
                    </button>
                    <button>
                        <a href="listcomments.php">نمایش نظرات کاربران</a>
                    </button>
                    <button>
                        <a href="listuser.php">نمایش کاربران</a>
                    </button>

				
					
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<?php include '../footer.php' ?>
	<!--EOF FOOTER-->
</body>

</html>
