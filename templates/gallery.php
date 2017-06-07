<html>
<?php
	require_once "../static/lang/lang1.php";
?>
    <head>
		<title> <?php echo $Lang["gallery"];?> </title>
		<Meta name="Author" content="Васильчук Александр">
        <meta charset="utf-8">
        <title>Galleria Classic Theme</title>
        <style>
        
            /* Demo styles */
            
            
            .content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;}
            
            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px;}
            
        </style>
			<link rel="shortcut icon" href="../static/images/icon.png" type="image/png">
	
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
    <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        
        <!-- load Galleria -->
		
        <script src="../../galleria-1.2.2.min.js"></script>
		
<link href="../static/css/style.css" rel="stylesheet">
    </head>
<body>
<br><br><br><br>
			<?php
		require_once "../static/content/top.php";
	?>	
<br><br><br><br><br><br>

    <div class="content" style="margin:auto;">
        <h1><?php echo $Lang["g1"];?></h1>

		<div id="galleria" >
            
            <img title="<?php echo $Lang["g2"];?>"
            	alt="<?php echo $Lang["g3"];?>" 
            	src="../static/images/im1.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im2.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im3.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im4.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im5.jpg">
			</img>
            
            
            <img title=""
            	alt="" 
            	src="../static/images/im8.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im9.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im10.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im11.jpg">
			</img>
			
			<img title=""
            	alt="" 
            	src="../static/images/img14.jpg">
			</img>
			
            <img title=""
            	alt="" 
            	src="../static/images/im12.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/img12.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im13.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im14.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im15.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im16.jpg">
			</img>
            <img title=""
            	alt="" 
            	src="../static/images/im17.jpg">
			</img>
			<img title=""
            	alt="" 
            	src="../static/images/im18.jpg">
			</img>
            
        </div>
    </div>
	
	<footer id="footer">
		<?php
		require_once "../static/content/footer.php";
	?>
</footer>
    <script>

    // Load the classic theme
    Galleria.loadTheme('galleria.classic.min.js');
    
    // Initialize Galleria
    $('#galleria').galleria();

    </script>
	
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
</html>