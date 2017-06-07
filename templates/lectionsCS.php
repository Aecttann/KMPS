<?php
	require_once "../static/lang/lang1.php";
?>
<head>
	<title> <?php echo $Lang["lections"]; ?> </title>
	<Meta name="Author" content="Васильчук Александр">
	<meta charset="windows-1251">
	<link rel="shortcut icon" href="../static/images/icon.png" type="image/png">
	<link href="../static/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">

</head>
<body> 

<br><br><br><br>
		<?php
		require_once "../static/content/top.php";
	?>	
	<br><br><br><br><br>
		<?php
		require_once "../static/content/lectionsCSContent.php";
	?>	
<footer id="footer">
		<?php
		require_once "../static/content/footer.php";
	?>
</footer>
</body>