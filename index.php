<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Open Teleprompter</title>
<meta name="description" content="Open Teleprompter is a web based, browser independent teleprompter. It was developed using jQuery JavaScript Library. This web software can work in any web browser making it a portable prompter. It can also work from any mobile device or tablet.">
<meta name="keywords" content="free, open, tablet, mobile, web prompter, online prompter, free prompter, prompter, teleprompt">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="scripts/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css">
<script type="text/javascript" src="https://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="scripts/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js" charset="utf-8"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="content">
	<h1>Open Teleprompter v2.0</h1>
	<form method="post" action="prompt.php" target="_blank">
		<textarea name="text" class="jqte"><b>Lorem Ipsum</b> is simply <span style="color:rgb(0,255,0);"><i><span style="color: rgb(0, 255, 0);">dummy text</span></i></span> of the printing and <b><span style="color:rgb(255,0,255);">typesetting industry</span></b>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
		<button type="submit" name="prompt" id="prompt">Prompt</button>
	</form>
	
	<hr>

	<h1>About</h1>
	<p>Open Teleprompter (V2.0) is a web based, browser independent teleprompter. It was developed using jQuery JavaScript Library. This web software can work in any web browser making it a portable prompter.</p>
	
	<h1>Control Keys</h1>
	<table>
		<thead>
			<tr>
				<th>Function</th>
				<th>Keyboard Shortcut</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Increase font size</td>
				<td><kbd>+</kbd></td>
			</tr>
			<tr>
				<td>Decrease font size</td>
				<td><kbd>-</kbd></td>
			</tr>
			<tr>
				<td>Text Scroll</td>
				<td><kbd>UP</kbd> or <kbd>DOWN</kbd> Works only when the prompter in on <strong>Stop mode</strong>.</td>
			</tr>
			<tr>
				<td>Decrease Scroll Speed</td>
				<td><kbd>LEFT</kbd></td>
			</tr>
			<tr>
				<td>Increase Scroll Speed</td>
				<td><kbd>RIGHT</kbd></td>
			</tr>
			<tr>
				<td>Play/Pause</td>
				<td><kbd>Spacebar</kbd></td>
			</tr>
			<tr>
				<td>Full Screen</td>
				<td><kbd>F11</kbd></td>
			</tr>
			<tr>
				<td>Reset</td>
				<td><kbd>CTRL</kbd></td>
			</tr>
		</tbody>
	</table>
</div>
<script>
$('.jqte').jqte({
	br: false, 
	format: false,
	unlink: false,
	fsize: false,
	source: false,
	link: false
});
</script>
</body>
</html>