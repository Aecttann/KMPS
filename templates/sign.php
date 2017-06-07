<?php
	require_once "../static/lang/lang1.php";
?>
<head>
	<title> <?php echo $Lang["signButton"]; ?> </title>
	<Meta name="Author" content="Васильчук Александр">
	<meta charset="windows-1251">
	<link rel="shortcut icon" href="../static/images/icon.png" type="image/png">
	<link href="../static/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
	
	<style>
			body{
				
				font-family:Arial;
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
		/*		margin-top:150px; */
			}
			h1.title{
				text-indent:-9000px;
			/*	background:transparent url(../static/images/title.png);*/
				width:0px;
				height:80px;
			}
	</style>
</head>
<body> 
		<?php
		require_once "../static/content/top.php";
	?>	
<br>
<br>
<br>
<br>
<br>
<br>
		<?php
		require_once "../static/content/signContent.php";
	?>	
<footer id="footer">
		<?php
		require_once "../static/content/footer.php";
	?>
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../static/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../static/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="../static/js/jquery-ui-1.8.20.custom.js"></script>
<script type="text/javascript" src="../static/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
	$(function() {
		//caching stuff
		$progress = $("#progress"), $amount = $("#amount"), panels = [], panels[0] = "panel1", panels[1] = "panel2", panels[3] = "thanks", i = 0, $formPanel = $(".form-panel");
		//call progress bar constructor
		$progress.progressbar({
			change: function() {
				//update amount label when value changes
				$amount.text($progress.progressbar("option", "value") + "%");
			}
		});
		//same function to reuse code
		function changepanel(n) {
			//hide current item
			$($formPanel[i]).fadeOut(500);
			//selects next item
			i = i + n;
			//hide next item
			$($formPanel[i]).delay(505).fadeIn();					
			(i != 0) ? $("#back").attr("disabled", null) : $("#back").attr("disabled", "disabled");
			(i != 2) ? $("#next").attr("disabled", null) : $("#next").attr("disabled", "disabled");					
			$progress.progressbar("option", "value", (i * 50) );					
		}
		//set click handler for buttons
		$(".ex-form button").click(function(e) {
			//stop form submission
			e.preventDefault();					
			//next or back?
			var n = ($(this).attr("id") != "back") ? 1 : -1;
			changepanel(n);
		});	
	});
</script>

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