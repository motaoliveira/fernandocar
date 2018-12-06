//Ordem de Serviço lista

$(".editaross").click(function(){
  var os = $(this).val();
  var id = $(this).attr("id");
  //alert("OS"+os+"ID"+id);

  $.post("datacliordeminterno_edite.php", { os:os, id:id },
  function(data, status){
    $(".resultadointerno").load("datacliordeminterno_edite.php");
    $('#paging_button').hide();
    //alert("Dados: " + data + "\nStatus: " + status);
  });
  /*$.post("editeos.php",
     {
       id:id,
     },
     function(data, status){
       $(".resultadointerno").load("editeos.php");
       $('#paging_button').hide();
     });*/
});

$(".deletaros").click(function(){
  var id = $(this).val();
  var r = confirm("Deseja deletar essa Ordem de Serviço?");
  if(r === true)
  {

    $.post("datalistordemexcluir.php",
       {
         id:id,
       },
       function(data, status){
         $(".resultadointerno").load("datalistordemexcluir.php");
         //alert(data+" "+status);
         $('#paging_button').hide();
       });
   }

});
