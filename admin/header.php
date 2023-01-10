<?php 
@session_start()
?>
<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="../index.php">Auto<span>Dealer</span></a>
				</div>
				<div class="header_contacts">
					<div class="phone">شماره تماس</div>
					<div>آدرس</div>
				</div>
				<div class="socials">
					<a href="#"><img src="images/fb_icon.png" alt=""></a>
					<a href="#"><img src="images/twitter_icon.png" alt=""></a>
					<a href="#"><img src="images/in_icon.png" alt=""></a>
				</div>
			</div>
			<div class="bg_navigation">
				<div class="navigation_wrapper">
					<div id="navigation">
						<span>Home</span>
						<ul style="float: right;direction: rtl;">
							<li><a href="../index.php">خانه</a></li>
							<li><a href="../page.php">درباره ما</a></li>
                            <li><a href="../contacts.php">تماس با ما</a></li>
							<?php if(@$_SESSION['roll'] == 2){ ?>
                            <li><a href="index.php"> مدیریت</a></li>
							<?php }?>
							<?php 
							if(!isset($_SESSION['login'])){ ?>
                            <li><a href="../login.php">ورود</a></li>
                            <li><a href="../register.php">ثبتنام</a></li>
							<?php
							}else{
      						?>
							<li><a href="../logout.php">خروج</a></li>
							<?php 
      						}
      						?>
						</ul>
					</div>
					
				</div>
			</div>
		</div>