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
	<?php echo $Lang["l3t1"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%"><input type="text" name="inpT3"></input>
	</p>
</div>
<br>
<div id="2">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l3t2"]; ?>
	</P>

	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test32" value="a4"><?php echo $Lang["l3t3"]; ?> 
	<input type="radio" name="test32" value="a5"><?php echo $Lang["l3t4"]; ?> 
	<input type="radio" name="test32" value="a6"><?php echo $Lang["l3t5"]; ?> 
	<input type="radio" name="test32" value="a7"><?php echo $Lang["l3t6"]; ?> 
	</p>
</div>
<br>
<div id="3">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l3t7"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%"><input type="text" name="inpT31"></input>
	</p>
	
</div>
<br>
<div id="4">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l3t8"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test33" value="a7"><?php echo $Lang["l3t9"]; ?> 
	<input type="radio" name="test33" value="a8"><?php echo $Lang["l3t10"]; ?> 
	<input type="radio" name="test33" value="a9"><?php echo $Lang["l3t11"]; ?> 
	</p>
</div>
<br>
<div id="5">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l3t12"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test34" value="a10"><?php echo $Lang["l3t13"]; ?> 
	<input type="radio" name="test34" value="a11"><?php echo $Lang["l3t14"]; ?> 
	<input type="radio" name="test34" value="a12"><?php echo $Lang["l3t15"]; ?> 
	</p>
</div><br>
<br>
<div id="6">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l3t16"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test35" value="a13"><?php echo $Lang["l3t17"]; ?> 
	<input type="radio" name="test35" value="a14"><?php echo $Lang["l3t18"]; ?> 
	<input type="radio" name="test35" value="a15"><?php echo $Lang["l3t19"]; ?> 
	</p>
</div><br>
	<center>
	
	<input type="submit" value="<?php echo $Lang["lgonext"]; ?>" class="buttonN"></input>
	</center>
	<br>

	</form>
	
	

	
</body>