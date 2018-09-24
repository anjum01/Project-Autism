// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});


$(document).ready(function(){
    $("#docBtn").click(function(){
        $("#sendModal").modal();
    });
});


