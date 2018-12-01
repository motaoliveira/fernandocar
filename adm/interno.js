//Documentos
$(".uploadinterno").click(function(){
    var id = $(this).val();
    $('#paging_button').hide();
    alert("uploadinterno");
    $.post("datacliupload_interno.php",
        {
          id:id,
        },
        function(data, status){
          $(".resultadointerno").load("datacliupload_interno.php");
          $('#paging_button').hide();
        });
      });


//Editar
$(".editarinterno").click(function(){
   var id = $(this).val();
   alert("editarinterno");
   $.post("cliente_edite_interno.php",
        {
          id:id
        },
        function(data, status){
        //alert(data);
        $(".resultadointerno").load("cliente_edite_interno.php");
        $('#paging_button').hide();
        });
  });

  //Ordem de Serviço Criar
  $(".ordeminterno").click(function(){
   var id = $(this).val();
  $('#paging_button').hide();

   var r = confirm("Deseja Criar Uma Ordem de Serviço?");
   if(r === true){
     alert("ordeminterno");
        $.post("datacliordeminterno.php",
            {
              id:id,
            },
            function(data, status){
              $(".resultadointerno").load("datacliordeminterno.php");
              $('#paging_button').hide();
            });
        }
});

  //Ordem de Serviço lista
$(".listarosinter").click(function(){
 var id = $(this).val();
 alert("listarosinter");
 $.post("datalistordeminter.php",
     {
       id:id,
     },
     function(data, status){
       $(".resultadointerno").load("datalistordeminter.php");
       $('#paging_button').hide();
     });
});
