<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Open Teleprompter</title>
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
			<li>Mode: <span id="status"></span></li>
			<li>Size: <span id="size"></span></li>
			<li>Speed: <span id="speed"></span></li>
		</ul>
	</div>
	
	<script type="text/javascript" src="scripts/jquery.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="scripts/prompt.js"></script>
</body>
</html>