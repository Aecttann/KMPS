<head>
<style>
html {
        background: url(../static/images/3108043.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
.buttonN{text-decoration:none; text-align:center; 
 padding:6px 15px; 
 border:solid 1px #004F72; 
  
 font:12px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background-color:#fcdf00; 
 background-image: -moz-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -webkit-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -o-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -ms-linear-gradient(top, #fcdf00 0% ,#d17d00 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d17d00', endColorstr='#d17d00',GradientType=0 ); 
 background-image: linear-gradient(top, #fcdf00 0% ,#d17d00 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }.buttonN:hover{
 padding:6px 15px; 
 border:solid 1px #004F72; 
  
 font:12px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#000000; 
 background-color:#fcdf00; 
 background-image: -moz-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -webkit-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -o-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -ms-linear-gradient(top, #fcdf00 0% ,#d17d00 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d17d00', endColorstr='#d17d00',GradientType=0 ); 
 background-image: linear-gradient(top, #fcdf00 0% ,#d17d00 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }.buttonN:active{
 padding:6px 15px; 
 border:solid 1px #005072; 
  
 font:12px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#000000; 
 background-color:#fcdf00; 
 background-image: -moz-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -webkit-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -o-linear-gradient(top, #fcdf00 0%, #d17d00 100%); 
 background-image: -ms-linear-gradient(top, #fcdf00 0% ,#d17d00 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d17d00', endColorstr='#d17d00',GradientType=0 ); 
 background-image: linear-gradient(top, #fcdf00 0% ,#d17d00 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
 opacity:0.69; 
 -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=69); 
 filter: alpha(opacity=69); 
 }
</style>
</head>
<BODY DIR="LTR">
<H2 CLASS="western" ALIGN=CENTER STYLE="text-indent: 0.49in; line-height: 150%">
<FONT SIZE=4><SPAN><I><?php echo $Lang["i1"];?></I></SPAN></FONT></H2>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first"></A>
<FONT SIZE=4><SPAN><B><?php echo $Lang["i2"];?></B></SPAN></FONT><FONT SIZE=4>
<?php echo $Lang["i3"];?>
</FONT>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first2"></A>
<FONT SIZE=4><?php echo $Lang["i4"];?></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first3"></A>
<?php echo $Lang["i5"];?>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first4"></A>
<?php echo $Lang["i6"];?>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first5"></A>
<?php echo $Lang["i7"];?>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first6"></A>
<?php echo $Lang["i8"];?>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first7"></A>
<?php echo $Lang["i9"];?>
</P>
<P ALIGN=CENTER STYLE="text-indent: 0.49in; line-height: 150%"><A NAME="first8"></A>
<?php echo $Lang["i10"];?>
</P>
<P STYLE="margin-bottom: 0in; line-height: 150%; widows: 2; orphans: 2">
<BR>
</P>
<div align="right" style="margin-right:15px;">
<BR>
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

			document.all.timerbut.innerHTML = '<a href="../templates/lection1.php" class="buttonN">Следующая</a>';
			clearInterval(timer);


	}}
	

</script>


</div>
</BODY>