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
<body>
<form  method="POST" action="testhandler.php" name = "myForm">
<div id="1">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l2t1"]; ?>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test21" value="a1"><?php echo $Lang["l2t2"]; ?> 
	<input type="radio" name="test21" value="a2"><?php echo $Lang["l2t3"]; ?> 
	<input type="radio" name="test21" value="a3"><?php echo $Lang["l2t4"]; ?> 
	</p>
	
</div>
<br>
<div id="2">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l2t5"]; ?>
	</P>

	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test22" value="a4"><?php echo $Lang["l2t6"]; ?> 
	<input type="radio" name="test22" value="a5"><?php echo $Lang["l2t7"]; ?> 
	<input type="radio" name="test22" value="a6"><?php echo $Lang["l2t17"]; ?> 
	</p>
</div>
<br>
<div id="3">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l2t8"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%"><input type="text" name="inpT2"></input>
	</p>
	
</div>
<br>
<div id="4">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l2t9"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test23" value="a7"><?php echo $Lang["l2t10"]; ?> 
	<input type="radio" name="test23" value="a8"><?php echo $Lang["l2t11"]; ?> 
	<input type="radio" name="test23" value="a9"><?php echo $Lang["l2t12"]; ?> 
	</p>
</div>
<br>
<div id="5">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l2t13"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test25" value="a10"><?php echo $Lang["l2t14"]; ?> 
	<input type="radio" name="test25" value="a11"><?php echo $Lang["l2t15"]; ?> 
	<input type="radio" name="test25" value="a12"><?php echo $Lang["l2t16"]; ?> 
	</p>
</div><br>
	<center>
	
	<input type="submit" value="<?php echo $Lang["lgonext"]; ?>" class="buttonN"></input>
	</center>
	<br>

	</form>
	
	

	
</body>