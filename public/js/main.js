var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-56026003-1']);
_gaq.push(['_trackPageview']);

$(function() {
	$('#vendorBlock').hover(function() {
		$('#vendorBlockTitle').css('margin-top', '64px');
		$('#vendorBlock .arrow').css('margin-top', '24px');
		$('#vendorText').css('opacity','1');
	}, function() {
    	// on mouseout, reset styling
    	$('#vendorBlockTitle').css('margin-top', '128px');
		$('#vendorBlock .arrow').css('margin-top', '-64px');
		$('#vendorText').css('opacity','0');
	});
});

$(function() {
	$('#clientBlock').hover(function() {
		$('#clientBlockTitle').css('margin-top', '64px');
		$('#clientBlock .arrow').css('margin-top', '24px');
		$('#clientText').css('opacity','1');
	}, function() {
    	// on mouseout, reset styling
    	$('#clientBlockTitle').css('margin-top', '128px');
		$('#clientBlock .arrow').css('margin-top', '-64px');
		$('#clientText').css('opacity','0');
	});
});
