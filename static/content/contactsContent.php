<head>
<style>
#featureImg{
	width:100%;
	height:auto;
}
#mapimg{
	width:50%;
	height:auto;
	padding: 20px 70px 0px 10px ;
}
/*adress div*/
.sharesv {
 width: 202px;
 height: 36px;
 margin-left: 80px; 
}
.share-new {
margin: 10px 0 10px 25px;
 }
 .share-new a {
 display:inline-block;
 width: 32px;
 height: 32px;
 margin-left: 125px;
 margin: 0 7px 0 100px;
 opacity: 0.6;
 -moz-transition: all 0.2s 0.01s ease-in;
 -o-transition: all 0.2s 0.01s ease-in;
 -webkit-transition: all 0.2s 0.01s ease-in;}
.share-new a:hover {
 opacity: 1.0;
 }
 .share-new .icon-vk {
	  margin-left: -25px;
 background: url(../static/images/vk-icon.png) 0 center no-repeat;
 padding:4px 0px 0px 0px;
 font-size:17px;
}
.share-new .icon-mail {
	margin-left: 0px;
 background: url(../static/images/email-variation.png) 0 center no-repeat;
 padding:4px 0px 0px 0px;
 font-size:17px;
}

.box2 { 
   
    width: 300px; /* Ширина блока */
    padding: 20px; /* Поля */
	font-size:10px;
   }
.boximg{
	position: absolute;
	margin-bottom:250px;
	z-index:9999;
}

   .leftstr, .rightstr {
    float: left; /* Обтекание справа */ 
    width: 45%; /* Ширина текстового блока */ 
   }
   .rightstr {
   text-align: right; /* Выравнивание по правому краю */
    width:480px;
   }

</style>
</head>
<body><br>
<br>
<br>
		<h1 style="font-style: italic;" align="center"><?php echo $Lang['contacts2'];?></h1>
		<div width="250" align="center">
		<p style="text-align: center; font-size: 16pt"><?php echo $Lang['contacts3'];?></p>
		<br>
		<p style="text-align: center;"><a href="mailto:aectann101@gmail.com" class="button"/><?php echo $Lang['contacts6']; ?></a></p>
	</div>
	<br>
	
		<h1><?php echo $Lang['contacts4'];?></h1>
	<div class="leftstr" align="center">
    <p class="adress" style="font-size: 16pt"><?php echo $Lang['contacts5'];?>
	<br>
	<br>
	<h1 align="left"><?php echo $Lang['contacts7']; ?> :)</h1>
	<div class="share-new">
		<a class="icon-vk" href="https://vk.com/official_spu" title="<?php echo $Lang['contacts8'];?>" target="_blank"></a>
		<a class="icon-mail" href="mailto:aectann101@gmail" title="<?php echo $Lang['contacts6']; ?>" > <!-- target="_blank" --> </a>
	</div>
	</div>
		</p>
	
		<div class="">
			<a href="https://goo.gl/GpZgGO" target="_blank">
			<img align="right" class="rightstr" src="../static/images/map2.jpg"></a>
		</div>		
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>