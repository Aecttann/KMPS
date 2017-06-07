<div class="ex-form ui-helper-clearfix ui-corner-all">
	
	<!--
	<center>
	
	<div id="progress"></div><label id="amount">0%</label>
	</center>
	-->
	<form action="save_user.php" method="POST">
		<div id="panel1" class="form-panel">
			<h2><?php echo $Lang["regForm"]; ?></h2>
			<fieldset class="ui-corner-all">
				<label>
					<span class="title"><?php echo $Lang["FIO"]; ?></span>
					<span class="input"><input type="text" name="FIO"></span>
				</label>
				<label>
					<span class="title"><?php echo $Lang["mail"]; ?></span>
					<span class="input"><input name="login" type="text"></span>
				</label>
				<label>
					<span class="title"><?php echo $Lang["pass"]; ?></span>
					<span class="input"><input name="password" type="password"></span>
				</label>
				<!--
				<label>
					<span class="title">Подтвердите пароль:</span>
					<span class="input"><input type="password"></span>
				</label>
				-->
				<label>
					<span class="title" align="left"><?php echo $Lang["vk"]; ?></span>
					<span class="input"><input type="text" name="vk"></span>
				</label>
			</fieldset>
		</div>
		<!--
		<div id="panel2" class="form-panel ui-helper-hidden">
			<h2>Социальные данные</h2>
			<fieldset class="ui-corner-all">
				<label>
					<span class="title">Twitter:</span>
					<span class="input"><input type="text"></span>
				</label>
				<label>
					<span class="title">Facebook:</span>
					<span class="input"><input type="text"></span>
				</label>
				<div class="label">
					<label class="title" for="text">Bio:</label>
					<div class="input textarea">
						<textarea rows="3" cols="25" name="text" id="text"></textarea>
					</div>
				</div>
			</fieldset>
		</div>
		<div id="thanks" class="form-panel ui-helper-hidden">
			<h2>Завершение регистрации</h2>
			<fieldset class="ui-corner-all">
			    <p>Спасибо за регистрацию!</p>
			</fieldset>
		</div>
		<button type="submit" name="submit" >Далее <span>&#9654;</span></button><button id="back" disabled="disabled"><span>&#9664;</span> Назад</button>
	-->
	<div align="center"><input class="button" type="submit" name="submit" value="<?php echo $Lang["regButton"]; ?>"></input></div>
	</form>
</div>
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.js"></script>
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