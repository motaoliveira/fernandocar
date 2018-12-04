$(".excluir").click(function(){
	var id = $(this).val();
	var osusuario = $(".osusuario").val();
	var oscod = $(".oscod").val();
	var servico = $(".servico").val();
	var valor = $(".valor").val();

alert(id+' '+osusuario+' '+oscod+' Excluindo')
	$.post("servicoexcluir.php",
		 {
			 id:id,
			 osusuario:osusuario,
			 oscod:oscod,
		 },
		 function(data, status){
			 $(".osdetalhe").load("servicoexcluir.php");
			 	alert(data+status);
			 $('#paging_button').hide();
		 });
		});
