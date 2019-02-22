window.onscroll = (e) => {
	var scroll = window.scrollY
		topbar = $('.topbar')
	;
	if(scroll > 305)
	{
		topbar.css({
			'opacity':1,
			'marginTop' : 0
		});
	} else {
		topbar.css({
			'opacity':0,
			'marginTop' : -115
		});
	}

}
