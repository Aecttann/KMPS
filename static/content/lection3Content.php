<head>
<style>
html {
        background: url(../static/images/3108043.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}

</style>
</head>
<body DIR="LTR">
<div align="center" >
<font >
<h2 size="4" style="font-size: 20pt;"> 
<?php echo $Lang["l30"];?>

<div class="marg">
<p>
<?php echo $Lang["l32"];?>
	</p>
	</h2>
	</font>
</div>
</div>
<div style="margin-right:10px;margin-left:5px;font-size:14pt;line-height:1.5;">
<div>
<!-- text-indent:25pt;font-size:14pt; -->
<p style="text-align:right;">
<?php echo $Lang["l34"];?>
</p>
</div>
<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l39"];?>
</p>
<div align="center">
<img src="../static/images/lection_3_content_html_e595f841.png" alt="Ручной этап"></img>
</div>
</div>

<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l310"];?>
</p>
</div>

<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l312"];?>
</p>
<div align="center">
<img src="../static/images/second.png" alt="Механічний этап"></img>
</div>
</div>

<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l314"];?>
</p>
<div align="center">
<img src="../static/images/third.png" alt="Електромеханчиній этап"></img>
</div>
</div>

<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l316"];?>
</p>
<div align="center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/Ad1AcBhk87U" frameborder="0" allowfullscreen></iframe>
</div>
</div>

<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l318"];?>
</p>
</div>

<div>
<p style="text-indent:25pt;">
<?php echo $Lang["l320"];?>
</p>
<div align="center">
<img width="auto" height="600" src="../static/images/lection_3_content_html_e3b3b7e3.jpg" alt="Схема"></img>
</div>
</div>

<div>
<p style="text-align:right;">
<?php echo $Lang["l321"];?>
</p>
</div>

</div>
<BR>
<div align="right" style="margin-right:15px;">
<div id="link"></div>

<div id="timerbut"><?php echo $Lang["btn"];?><span id="secout"></span> сек.</div>

<script type="text/javascript">
	var targettime = 5;
	document.all.secout.innerHTML = targettime;
	var timer = setInterval("startTimer()",1000);
	function startTimer() {
		if(targettime !== 1) {
			targettime--;
			document.all.secout.innerHTML = targettime;
		} else {
			document.all.timerbut.innerHTML = '<a href="../templates/test3.php" class="buttonN">Перейти к тесту</a>';
			clearInterval(timer);
	}}
</script>

</div>
</body>