//Ordem de Serviço lista

$(".editaross").click(function(){
  var id = $(this).val();
  alert("edits");
  /*$.post("editeos.php",
     {
       id:id,
     },
     function(data, status){
       $(".resultadointerno").load("editeos.php");
       $('#paging_button').hide();
     });*/
});

$(".deletaross").click(function(){
  var id = $(this).val();
  alert("deletaros");
  /*$.post("editeos.php",
     {
       id:id,
     },
     function(data, status){
       $(".resultadointerno").load("editeos.php");
       $('#paging_button').hide();
     });*/
});
