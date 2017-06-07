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
	<?php echo $Lang["l4t1"]; ?>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test41" value="a1">$2000
	<input type="radio" name="test41" value="a2">$1000
	<input type="radio" name="test41" value="a3">$1500
	<input type="radio" name="test41" value="a4">$400
	</p>
	
</div>
<br>
<div id="2">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l4t2"]; ?>
	</P>

	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test22" value="a4"><?php echo $Lang["l4t3"]; ?> 
	<input type="radio" name="test22" value="a5"><?php echo $Lang["l4t4"]; ?> 
	<input type="radio" name="test22" value="a6"><?php echo $Lang["l4t5"]; ?> 
	</p>
</div>
<br>
<div id="3">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l4t6"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test23" value="a7">С++ 
	<input type="radio" name="test23" value="a8">JAVA
	<input type="radio" name="test23" value="a9">Python
	<input type="radio" name="test23" value="a9">PHP
	</p>
</div>
<br>
<div id="4">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l4t7"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%"><input type="text" name="inpT41"></input>
	</p>
	
</div>
<br>
<div id="5">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	5)	Project Manager(PM):
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test25" value="a10"><?php echo $Lang["l4t8"]; ?> 
	<input type="radio" name="test25" value="a11"><?php echo $Lang["l4t9"]; ?> 
	<input type="radio" name="test25" value="a12"><?php echo $Lang["l4t10"]; ?> 
	</p>
</div><br>
<div id="6">
<P STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<?php echo $Lang["l4t11"]; ?>
	</P>
	<p STYLE="margin-left: 0in; text-indent: 0.49in; line-height: 150%">
	<input type="radio" name="test25" value="a10"><?php echo $Lang["l4t12"]; ?> 
	<input type="radio" name="test25" value="a11"><?php echo $Lang["l4t13"]; ?> 
	</p>
</div><br>
	<center>
	
	<input type="submit" value="<?php echo $Lang["lgonext"]; ?>" class="buttonN"></input>
	</center>
	<br>

	</form>
	
	

	
</body>