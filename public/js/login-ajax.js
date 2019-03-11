var erro = false;
$(document).ready(function(){
    
    $('#errolog').hide();
    $("#formlogin").submit(function(){
        var login=$('#email').val();	//Pega valor do campo email
        var senha=$('#senha').val();
        $.post("/api/login-ajax",
        {
        email: login,
        password: senha
        },
        function(data){
            if(data){
            erro = false;
            $('#errolog').hide();						
            location.href='usuario/cursos.php'
            $('#loading-login').show();
        } else {
            $('#errolog').show();
            erro = true;
        }										
        });
        return false;
    });
    });	
    $(window).scroll(function() {    
var scroll = $(window).scrollTop();
if (scroll >= 0) {
$(".modal-content-login").addClass("backlogin");
} 
});

$("#send-login").click(function(){
    if(erro) {
        $('#errolog').fadeOut(50).fadeIn(50); 

    }
});
// Get the modal
var modal = document.getElementById('modal-login');

// Get the button that opens the modal
var btn = document.querySelector("#myBtnlogin");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-login")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}