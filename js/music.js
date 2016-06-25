$(document).ready(function() {
    var timeToDisplay = 8000;
	
    var slideshow = $('#slideshow');
    var urls = [
       '../images/k-on.jpg',
       '../images/gurren-lagann.jpg',
       '../images/love-and-roll.jpg',
	   '../images/kill-la-kill.jpg',
	   '../images/shigatsu.jpg',
	   '../images/kiznaiver.png',
	   '../images/guilty-crown.jpg',
	   '../images/psycho-pass.jpg',
	   '../images/amagi.jpg',
	   '../images/saekano.png'
    ];

    var index = 0;
    var transition = function() {
        var url = urls[index];

        slideshow.css('background-image', 'url(' + url + ')');

        index = index + 1;
        if (index > urls.length - 1) {
            index = 0;
        }
    };
    
    var run = function() {
        transition();
        slideshow.fadeIn('slow', function() {
            setTimeout(function() {
                slideshow.fadeOut('slow', run);
            }, timeToDisplay);
        });
    }
        
    run();
});