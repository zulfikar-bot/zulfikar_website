window.onscroll = function() {myFunction ()}; 
var navbar = document.getElementById("navbar");
var dropdownContent = document.getElementById("myDropdown");
var running = document.getElementById("running");
var sticky= navbar.offsetTop;
function myFunction () {
    if (window.scrollY >= sticky) {
        navbar.classList.add("sticky");
        dropdownContent.style.position = "fixed";
        running.style.visibility = "hidden";
    } else {
        navbar.classList.remove("sticky");
        dropdownContent.style.position = "absolute";
        running.style.visibility = "visible";
    }
}

window.onload = function() {
     var modal = document.getElementById('id01');
 
     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
         if (event.target == modal) {
             modal.style.display = "none";
         }
     }
 }
