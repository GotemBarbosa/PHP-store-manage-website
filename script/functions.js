$(document).ready(function () {

    $("#fileFoto").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#fotoProduto').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    $('#btnEnviar').click(function (e) {
        //coloca a imagem no campo hidden
         $('#hdnFoto').val($('#fotoProduto').attr('src'));

         if(operacao == "inserir"){
            $.post("insert.php", $('#formDados').serialize() , function(data) {
                //alert(data);
                window.location.reload();
            });
         }else{
            //alert(operacao)

            $.post("update.php", $('#formDados').serialize() , function(data) {
                alert(data);
                window.location.reload();
            });
         }

        //alert($('#formDados').serialize());
    });

    $('.functionUpd').click(function(){
        //alert($(this).attr('codigo'));
        operacao = "alterar"
        $.post("get-data.php", "codigo="+$(this).attr('codigo'),
            function(data){
             var res = data.split("|");

            $('#codigo').val(res[0]);
             $('#nome').val(res[1]);
             $('#preco').val(res[2]);
             $('#quantidade').val(res[3]);
             $('#descricao').val(res[4]);
             $('#altura').val(res[5]);
             $('#largura').val(res[6]);
             $('#profundidade').val(res[7]);
             $('#peso').val(res[8]);
             $('#fabricante').val(res[9]);
             $('#codigoDeBarras').val(res[10]);
             //$('#codigoDeBarras').val(null)
             $('#fotoProduto').attr('src', 'data:image/png;base64,'+res[11]);
             ev.preventDefault()
            
        })
    })

    $('.functionUpd').click(function (){
        openModal();

    })

    $('.functionDel').click(function (){
        $.post('delete.php', "codigo=" + $(this).attr('codigo'), function(data){
            alert(data);
            window.location.reload();
        })
    })

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
