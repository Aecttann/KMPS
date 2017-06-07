<head>
<style>
a.disabled {
    pointer-events: none; /* делаем ссылку некликабельной */
    cursor: default;  /* устанавливаем курсор в виде стрелки */
    color: #999; /* цвет текста для нективной ссылки */
}
</style>
</head>
<body>
<div class="container">
<div class="content">
<div class="soft"><h1 class="title"></h1>
	<ul id="sdt_menu" class="sdt_menu">
		<li>
			<a href="index.php">
				<img src="../static/images//main.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link"><?php echo $Lang["main"]; ?></span>
					<span class="sdt_descr"><?php echo $Lang["first"]; ?></span>
				</span>
			</a>
		</li>
				
				
					<li>
					<!-- style="pointer-events: none;cursor: default;"-->
					<?
					
					?>
					<a href="lections.php" <?php  if(!isset($_SESSION['login'])) echo 'class ="disabled"'; ?>>
						<img src="../static/images//1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Lang["lections"]; ?></span>
							<span class="sdt_descr"><?php echo $Lang["second"]; ?></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="lections.php"><?php echo $Lang["CN"]; ?></a>
							<a href="#"><?php echo $Lang["AM"]; ?></a>
					</div>
				</li>
				
					
				<li>
					<a href="gallery.php">
						<img src="../static/images//3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Lang["gallery"]; ?></span>
							<span class="sdt_descr"><?php echo $Lang["third"]; ?></span>
						</span>
					</a>
				</li>

				<li>
					<a href="contacts.php">
						<img src="../static/images//5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Lang["contacts"]; ?></span>
							<span class="sdt_descr"><?php echo $Lang["fourth"]; ?></span>
						</span>
					</a>
				</li>
				<li>
					<a href="sign.php">
						<img src="../static/images//6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><?php echo $Lang["sign"]; ?></span>
							<span class="sdt_descr"><?php echo $Lang["fifth"]; ?></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="sign.php"><?php echo $Lang["sign"]; ?></a>
							<a href="register.php"><?php echo $Lang["register"]; ?></a>
							<a href="logout.php"><?php echo $Lang["signout"];?> </a>
							
					</div>
				</li>
			</ul>
		</div>
</div>
</div>
</body>