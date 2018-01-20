// Get the modal
var modal = document.querySelector(".modal");

// Get the button that opens the modal
var subscibe = document.querySelector("#subscribe");

// Get the <span> element that closes the modal
var span = document.querySelector(".close");
var response = document.querySelectorAll(".response");
// When the user clicks the button, open the modal 
subscribe.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";

    for(var i = 0; i < response.length; i++){
  		response[i].style.display = "none";
  	}
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}