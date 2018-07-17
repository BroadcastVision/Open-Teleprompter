$(function() {
	$('.jqte').jqte({
		br: true, 
		format: false,
		unlink: false,
		fsize: false,
		source: false,
		link: false
	});

	var tpWindow;

	$("#tpform").submit(function(e) {
		e.preventDefault();
		
		// create a new tab
		if ($("#fullScreen").is(":checked"))
			tpWindow = window.open('prompt.html','TelePrompter','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=yes,width='+(window.screen.width * window.devicePixelRatio)+',height='+(window.screen.height * window.devicePixelRatio)+',left=0,top=0');
		else
			tpWindow = window.open('prompt.html','_blank');

		if (location.protocol == 'file:') {
			setTimeout(function() {
				tpWindow.postMessage({msg: $(".jqte_editor").html(), do: 'updateTPtext'}, '*');
			}, 1000)
		} else {
			tpWindow.onload = function() {
				tpWindow.postMessage({msg: $(".jqte_editor").html(), do: 'updateTPtext'}, '*');
			}
		}

	})
})