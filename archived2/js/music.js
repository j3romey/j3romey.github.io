$(document).ready(function() {
    var timeToDisplay = 8000;
	
    var slideshow = $('#slideshow');
    var urls = [
	   '../images/gurren-lagann.jpg',
	   '../images/amagi.jpg',
       '../images/guilty-crown.jpg',
	   '../images/kill-la-kill.jpg',
	   '../images/kiznaiver.png',
	   '../images/k-on.jpg',
	   '../images/psycho-pass.jpg',
	   '../images/saekano.png',
	   '../images/shigatsu.jpg',
	   '../images/love-and-roll.jpg'
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