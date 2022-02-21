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

$(document).ready(function () {

  $("a[rel=modal]").click(function (ev) {

    var operacao="inserir";

    $('#nome').val("");
    $('#preco').val("");
    $('#quantidade').val("");
    $('#descricao').val("");
    $('#altura').val("");
    $('#largura').val("");
    $('#profundidade').val("");
    $('#peso').val("");
    $('#fabricante').val("");
    $('#codigoDeBarras').val("");
    //$('#codigoDeBarras').val(null)
    $('#fileFoto').attr('src', 'data:image/jpeg;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=');
    
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
});
