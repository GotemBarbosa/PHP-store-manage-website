function openModal(){
  var id = "#janela";
  var alturaTela = $(document).height();
  var larguraTela = $(document).width();

  $('#mascara').css({ 'width': larguraTela, 'height': alturaTela }); // tamanho do modal
  $('#mascara').fadeIn(1000); //fade de entrada
  $('#mascara').fadeTo("slow", 0.8); //transparencia  | slow , tempo

  var left = ($(window).width() / 2) - ($(id).width() / 2);
  var top = ($(window).height() / 2) - ($(id).height() / 2);

  $(id).css({ 'left': left, 'top': top });
  $(id).show();
}
var operacao = "inserir";

$(document).ready(function () {

$("a[rel=modal]").click(function (ev) {

  //var operacao = "inserir";

  $('#nome').val("");
  $('#userName').val("");
  $('#funcao').attr('');

  ev.preventDefault(); // retira o link tipo: a/site/#modal => fica = a/site
  
  openModal();
});

$('#mascara').click(function(){
  $(this).fadeOut("slow");
  $('.window').fadeOut("slow");
})

$('.fechar').click(function(ev){
  ev.preventDefault();
  $('#mascara').fadeOut(500, "linear");
  $('.window').fadeOut(500, "linear");
})




//-----------

  $('#btnEnviar').click(function (e) {
        $.post("update-users.php", $('#formDados').serialize() , function(data) {
          alert(data);
          window.location.reload();
        });

      //alert($('#formDados').serialize());
  });

  $('.functionUpd').click(function(){
      //alert($(this).attr('codigo'));
      operacao="alterar";
       $.post("get-usersData.php", "codigo="+$(this).attr('codigo'),
          function(data){
              var res = data.split("|");
              $('#codigo').val(res[0]);
              $('#nome').val(res[1]);
              $('#userName').val(res[2]);
              $('#function').val(res[3]);
          }
       )
      openModal();
  })


  $('.functionDel').click(function (){
       $.post('delete-users.php', "codigo=" + $(this).attr('codigo'), function(data){
           window.location.reload();
       })
  })

});
