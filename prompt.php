<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Open Teleprompter</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="css/prompt.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="arrow">&#187;</div>
	<div id="prompt">
		<?php echo nl2br($_POST["text"]); ?>
	</div>
	<div id="scroll"></div>
	<div id="details">
		<ul>
			<li><input type="button" value="+" id="increase_font_size"> <input type="button" value="-" id="decrease_font_size"></li>
			<li>Mode: <span id="status"></span></li>
			<li>Size: <span id="size"></span></li>
			<li>Speed: <span id="speed"></span></li>
		</ul>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/prompt.js"></script>
</body>
</html>