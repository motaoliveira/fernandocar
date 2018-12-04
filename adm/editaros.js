//Ordem de Serviço lista

$(".editaross").click(function(){
  var id = $(this).val();
  alert("edits"+id);
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
