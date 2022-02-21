$(document).ready(function () {

    $("#btnLogin").click(function(){
        $.post("config/login.php", $('#formLogin').serialize() , function(data) {
            alert(data);
            window.location.reload();
        });
    });
     $("#logoff").click(function(){
        $.post("config/logout.php", function(data) {
            window.location.reload();
        });
    });

});
