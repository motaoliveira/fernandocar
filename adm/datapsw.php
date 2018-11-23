<?php
include("conect.php");

$per_page = 7;
$sqlc = "show columns from cliente";
$rsdc = mysql_query($sqlc);
$cols = mysql_num_rows($rsdc);
$page = $_REQUEST['page'];

$start = ($page-1)*7;

?>


<script>
$(document).ready(function(){
	jQuery('.mce-tooltip-arrow').hide();
	jQuery('.mce-tooltip-inner').hide();
	
	 $(".ltn").click(function(){
		var id = $(this).val();
		var file = $(this).attr("id");

		var r = confirm("Resolvido o problema do cliente?");
		if(r == true){
		
		$.post("cliente_senha.php", {id:id , file:file},function(get_retorno) {
		  //alert(get_retorno);
		  //location.reload(true);
		  $('#senha').trigger('click');
		  });
		  //e.preventDefault();
		}else{
//			alert("Exclusão Cancelada");
	}
   });
	  });
	   $(".edt").click(function(){
		   //e.preventDefault();
		   var id = $(this).val();
		    //alert("Eu na fita");
			//$("#links").load("atua_edite.php");
			//$.get('atua_edite.php', {id:1 , file:2},function(get_retorno) {
		  //alert(get_retorno);
		
		  //});
			$.post("cliente_edite.php",
				{
					id:id,
					
				},
				function(data, status){
				//alert(data);
					$("#links").load("cliente_edite.php");
					$('#paging_button').hide();
				});
				
		   });
		$(".resolvido").click(function(){
		   //e.preventDefault();
		   var id = $(this).val();
		    //alert("Eu na fita");
			//$("#links").load("atua_edite.php");
			//$.get('atua_edite.php', {id:1 , file:2},function(get_retorno) {
		  //alert(get_retorno);
		
		  //});
			$.post("resolvido.php",
				{
					id:id,
					
				},
				function(data, status){
				alert(data);
					$("#links").load("senha.php");
					$('#paging_button').hide();
					
				});
				showLoader();
		   });
		  
	$(".psq").click(function(){
		$.ajax({	
			url: "demo_test.txt", 
			type: POST,
			success: function(result){
			$("#div1").html(result);
		}});

		  //alert(get_retorno
	});
</script
<script src="javascript_cliente.js" type="text/javascript"></script>
	
	<?php
	
	
	$sql = "SELECT * FROM `cliente` WHERE `mail` = 1 ORDER BY `id` DESC";

	$rsd = mysql_query($sql);
	//echo "entrou aqui";
	while ($banco = mysql_fetch_assoc($rsd))
	{
	//echo "entrou aqui";
	
		$clientID = $banco["id"];
		$clientNome = $banco["nome"];
		$clientEmail = $banco["email"];
		$clientCel = $banco["celular"];
		$cleintSenha = $banco["senha"];
		$clientRua = $banco["rua"];
		$clientNumero = $banco["numero"];
		$clientBairro = $banco["bairro"];	
		$clientCep = $banco["cep"];
		$clientLog = $banco["log"];
		$clientBut = $banco["but"];
		
	?>
     
   

	<!-- Atuação  -->
        <div class="row" style="background:white"> 
		<div class="col-12" style="text-align:left"><h3></strong></h3></div>
			<div class="col-12" >
				<span class="spandate"><?php echo $clientLog;?></span>
			</div>
            <div class="col-2" >
               
				<img class="img-responsive img-hover"  src="../clientes/<?php echo $clientID;?>/img/<?php echo $clientBut;?>" alt="" style="height:140px">
            </div>
            <div class="col-8" style="padding-left:30px">
				<h3><?php echo $clientNome;?></h3>
				<p><?php echo $clientCel;?></p>
				<button  value="<?php echo $clientID; ?>" class="btn btn-outline-success edt"><i class="fa fa-pencil" aria-hidden="true"></i> Editar </button>
				<button  value="<?php echo $clientID; ?>" class="btn btn-outline-warning resolvido"><i class="fa fa-pencil" aria-hidden="true"></i> Resolvido </button> 
			</div>
        </div>
        <!-- /.row -->
		 <hr>
   <?php  }
    
    
    

?>
 
       

 