
$(document).ready(function () {

  $('#btnEnviar').click(function (e) {
      $.post("insert-user.php", $('#registerForm').serialize() , function(data) {
        alert('Usuario cadastrado')
      });  
  })
});