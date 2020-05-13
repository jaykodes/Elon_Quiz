//Javascript for Profile Page
//helps with cool animtation and effects with scrolling and landing

//This function will happen when the the user scrolls in the webpage
$(window).scroll(function() {
    parallax();
    unitLanding();
})

function parallax() {
    //variable that stores the value the user has scrolled from the top
    var wScroll = $(window).scrollTop();
    
    //makes it so the description textbox scrolls at a different pace, a little slower if window greater then certain width
    if($(window).width() > 964) {
    	$('.parallaxTextbox').css('top', 0+(wScroll*0.006) + 'em');
    }
}

function unitLanding() {
	//variable that stores the value the user has scrolled from the top
	var wScroll = $(window).scrollTop();

	//if the user scrolls past a certain bit the unit section will animate in
	if(wScroll > ($('.links').offset().top) - ($(window).height() / 1.4)) {
		//will happen to each figure after the last one finishes
		$('.links figure').each(function(i) {
			setTimeout(function(){
				$('.links figure').eq(i).addClass('showing');
			}, 200 * (i + 1));
		});
	}
}