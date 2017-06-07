<body>
<p align="center"><font size="6" align="center" style="color:white;"><?php echo $Lang["CN"];?></font></p>
<div id="mainwrapper">
<a href="../templates/introduction.php">
<div id="box-3" class="box">
			<img id="image-3" src="../static/images/logos.jpg"/>
			<span class="caption fade-caption">
				<h3><?php echo $Lang["i0"];?></h3>
				<p></p>
			</span>
		</div>
</a>
<a href="../templates/lection1.php">
<div id="box-3" class="box">
			<img id="image-3" src="../static/images/test1.jpg"/>
			<span class="caption fade-caption">
				<h3><?php echo $Lang["l10"];?></h3>
				<p>
				<?php echo $Lang["ll1"];?>
				</p>
			</span>
		</div>
		</a>
		<!-- Подпись 2 -->
		<a href="../templates/lection2.php">
		<div id="box-3" class="box">
		<img id="image-3" src="../static/images/test2.jpg"/>
		<span class="caption fade-caption">
			<h3><?php echo $Lang["l20"];?></h3>
			<p>
			<?php echo $Lang["ll2"];?>
			</p>
		</span>
		</div>
		</a>
		<a href="../templates/lection3.php">
		<div id="box-3" class="box">
		<img id="image-3" src="../static/images/test2.jpg"/>
		<span class="caption fade-caption">
			<h3><?php echo $Lang["l30"];?></h3>
			<p>
			<?php echo $Lang["ll3"];?>
			</p>
		</span>
		</div>
		</a>
		<a href="../templates/lection4.php">
		<div id="box-3" class="box">
		<img id="image-3" src="../static/images/test2.jpg"/>
		<span class="caption fade-caption">
			<h3><?php echo $Lang["l41"];?></h3>
			<p>
			<?php echo $Lang["ll4"];?>
			</p>
		</div>
		</span>
		</a>
		<a href="../templates/lection5.php">
		<div id="box-3" class="box">
		<img id="image-3" src="../static/images/test2.jpg"/>
		<span class="caption fade-caption">
			<h3><?php echo $Lang["l50"];?></h3>
			<p>
			<?php echo $Lang["ll5"];?>
			</p>
		</span>
		</div>
		</a>
		<a href="../templates/conclusion.php">
		<div id="box-3" class="box">
			<img id="image-3" src="../static/images/test1.jpg"/>
			<span class="caption fade-caption">
				<h3>
				<?php echo $Lang["ll6"];?>
				</h3>
				<p></p>
			</span>
		</div>
		</a>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="../static/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>
</body>