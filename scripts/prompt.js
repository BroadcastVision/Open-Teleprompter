var speed = 50;
$("#speed").html(speed + "%");

var fontSize = 70;
$("#size").html(fontSize + "px");

var status = 'Stop';
$("#status").html(status);


// If + or - button is clicked.
$("#increase_font_size").click(function(e){
	e.preventDefault();
	var fontSize = parseInt($('#prompt').css("font-size"));
	fontSize = fontSize + 1 + "px";
	$('#prompt').css({'font-size':fontSize});
	$("#size").html(fontSize);
});

$("#decrease_font_size").click(function(e){
	e.preventDefault();
	var fontSize = parseInt($('#prompt').css("font-size"));
	fontSize = fontSize - 1 + "px";
	$('#prompt').css({'font-size':fontSize});
	$("#size").html(fontSize);
});  

document.onkeydown = function(e) {
    
	console.log(e.keyCode);
	
	switch (e.keyCode) {
        case 107: // Increase font size.
            e.preventDefault();
			var fontSize = parseInt($('#prompt').css("font-size"));
			fontSize = fontSize + 1 + "px";
			$('#prompt').css({'font-size':fontSize});
			$("#size").html(fontSize);
            break;
        case 109: // Decrease font size.
            e.preventDefault();
			var fontSize = parseInt($('#prompt').css("font-size"));
			fontSize = fontSize - 1 + "px";
			$('#prompt').css({'font-size':fontSize});
			$("#size").html(fontSize);
            break;
		case 17: // Reset Settings.
            e.preventDefault();
			$("#prompt").removeAttr("style");
			speed = 50;
			$("#speed").html(speed + "%");
			fontSize = 70;
			$("#size").html(fontSize + "px");
			status = 'Stop';
			$("#status").html(status);
			$("html, body").stop( true, false);
			window.scrollTo(0, 0); // Scroll to top.
            break;
		case 39: // Increase speed.
            e.preventDefault();
			if(speed < 100){
				speed = speed + 1;
				$("#speed").html(speed + "%");
				
				if (status == 'Play'){
					$("html, body").stop( true, false);
					$("html, body").animate({ scrollTop: ($(document).height() - $(window).height()) }, (100-speed) * ($(document).height() - $(window).height()), 'linear', function() {
					status = 'Stop';
					$("#status").html(status);
				});
				}
			}
            break;
		case 37: // Decrease speed.
            e.preventDefault();
			if(speed > 1){
				speed = speed - 1;
				$("#speed").html(speed + "%");
				
				if (status == 'Play'){
					$("html, body").stop( true, false);
					$("html, body").animate({ scrollTop: ($(document).height() - $(window).height()) }, (100-speed) * ($(document).height() - $(window).height()), 'linear', function() {
					status = 'Stop';
					$("#status").html(status);
				});
				}
			}
            break;
		case 38: // Move Up.
            e.preventDefault();
			var y = $(window).scrollTop();  // Current Y position on the page.
			$(window).scrollTop(y-25);
            break;
		case 40: // Move Down.
            e.preventDefault();
			var y = $(window).scrollTop();  // Current Y position on the page.
			$(window).scrollTop(y+25);
            break;
		case 32: // Play or Pause.
			e.preventDefault();			
			
			if (status == 'Stop'){
				status = 'Play';
				$("#status").html(status);
				
				$("html, body").animate({ scrollTop: ($(document).height() - $(window).height()) }, (100-speed) * ($(document).height() - $(window).height()), 'linear', function() {
					status = 'Stop';
					$("#status").html(status);
				});
			}
			else{
				status = 'Stop';
				$("#status").html(status);
				$("html, body").stop( true, false);
			}			
            break;
    }
};

//Capture scroll any percentage
$(window).scroll(function() {
    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
    $('#scroll').css('width', scrollPercent +"%"  );
});