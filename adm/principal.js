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
$(".ltn").click(function(){
    var id = $(this).val();
    var file = $(this).attr("id");
    var r = confirm("Deseja deletar esse cliente??");
    if(r === true){
      $.post("cliente_del.php", {id:id , file:file},function(get_retorno) {
          $('#clientes').trigger('click');
        });
    }else{
    }
   });



//Editar
$(".editar").click(function(){
   var id = $(this).val();
   $.post("cliente_edite.php",
        {
          id:id
        },
        function(data, status){
        //alert(data);
        $("#links").load("cliente_edite.php");
        $('#paging_button').hide();
        });
  });

  //Ordem de Serviço
  $(".ordem").click(function(){
   var visao = $(this).val();
   //alert(visao);
  $('#paging_button').hide();
  $.post("dataclivisao.php",
      {
        visao:visao,
      },
      function(data, status){
        $(".resultadofixo").html(data);
        $('#paging_button').hide();
      });
});
