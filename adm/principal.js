//Documentos
    $(".upload").click(function(){
     var id = $(this).val();
    $('#paging_button').hide();

    $.post("datacliupload.php",
         {
           id:id
         },
         function(data, status){
         //alert(data);
         $("#links").load("datacliupload.php");
         $('#paging_button').hide();
         });
    });


//deletar
    $(".ltn").click(function()
    {
        var id = $(this).val();
        var file = $(this).attr("id");
        var r = confirm("Deseja Deletar Esse Cliente?");
        if(r === true)
        {
          $.post("cliente_del.php", {id:id , file:file},function(get_retorno)
          {
            $('#clientes').trigger('click');
          });
        }else{

        }
    });



//Editar
    $(".editar").click(function()
    {
       var id = $(this).val();
       $.post("cliente_edite.php",
            {
              id:id
            },
            function(data, status)
            {
              $("#links").load("cliente_edite.php");
              $('#paging_button').hide();
            });
    });

  //Ordem de Serviço  listaros
  $(".oscriar").click(function()
  {
   var id = $(this).val();

  var r = confirm("Deseja Criar Uma Ordem de Serviço?");
  if(r === true)
    {
      alert(id);
      $.post("servicocriar.php",
          {
            id:id
          },
          function(data, status)
          {
            $("#links").load("servicocriar.php");
            $('#paging_button').hide();
          });
    }
});
//Ordem de Serviço
$(".listaros").click(function(){
 var id = $(this).val();
$('#paging_button').hide();
$.post("datalistordem.php",
    {
      id:id,
    },
    function(data, status){
      $("#links").load("datalistordem.php");
      $('#paging_button').hide();
    });
});

$(".busca").click(function(){
  $('#paging_button').hide();
  var nomeCliente = $(".nomeCliente").val();
  if(nomeCliente ===''){
    alert("Busca Vazia");
  }else{
  $.post("dataclibusca.php",
      {
        nomeCliente:nomeCliente,
      },
      function(data, status){
        $(".resultadofixo").load("dataclibusca.php");
        $('#paging_button').hide();
      });
  }
});
$.ajaxSetup({
  cache: false
});
/*
$(".osdetalhe").live({
  click: function() {
    $( this ).after( "<p>Another paragraph!</p>" );
  },
  mouseover: function() {
    $( this ).addClass( "over" );
  },
  mouseout: function() {
    $( this ).removeClass( "over" );
  }
});*/
