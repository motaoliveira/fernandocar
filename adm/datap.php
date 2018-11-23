<?php
include("conect.php");

$per_page = 7;
$sqlc = "show columns from projeto";
$rsdc = mysql_query($sqlc);
$cols = mysql_num_rows($rsdc);
$page = $_REQUEST['page'];

$start = ($page-1)*7;
$sql = "SELECT * FROM `projeto` ORDER BY `projeto`.`id` DESC LIMIT $start,7";
$rsd = mysql_query($sql);
//echo "entrou aqui";
?>


<script>
$(document).ready(function(){
	jQuery('.mce-tooltip-arrow').hide();
	jQuery('.mce-tooltip-inner').hide();
	
	 $(".ltn").click(function(){
		var id = $(this).val();
		var file = $(this).attr("id");
		
		
		
		
		var r = confirm("Deseja deletar essa atuação?");
		if(r == true){
		
		$.post("proj_del.php", {id:id , file:file},function(data, status){
				//alert(data);
				
					$("#links").load('projeditar.php');;
					//$('#paging_button').hide();
				});
		 // alert(get_retorno);
		  //location.reload(true);
		  //$('#projeditar').trigger('click');
		  //});
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
			$.post("proj_edite.php",
				{
					id:id,
					
				},
				function(data, status){
				//alert(data);
					$("#links").load("proj_edite.php");
					$('#paging_button').hide();
				});
				
		   });
</script>
	<?php
	while ($banco = mysql_fetch_assoc($rsd))
	{
	//echo "entrou aqui";
	
		$atuacaoId = $banco["id"];
		$atuacaoImg = $banco["img"];
		$atuacaoTitulo = $banco["titulo"];
		$atuacaoDescri = $banco["descri"];
		$atuacaoTexto = $banco["texto"];
		$atuacaoData = $banco["data"];
		$atuacaoHora = $banco["hora"];
		
	?>
      <!-- Project One -->
        <div class="row">
           <div class="col-5">
                <img class="img-fluid img-hover" src="../projeto/<?php echo $atuacaoId; ?>/img/<?php echo $atuacaoImg; ?>" alt="">
           </div>
            <div class="col">
                <h3 align="left" ><?php echo $atuacaoTitulo;?></h3>
					<p><?php echo $atuacaoDescri;?></p>
                <div class="row">
					<button type="submit" id="<?php echo $atuacaoImg; ?>"  value="<?php echo $atuacaoId; ?>" class="btn btn btn-secondary ltn"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</button> <button  value="<?php echo $atuacaoId; ?>" class="btn  btn-primary edt"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                </div>
            </div>
        </div>
        <!-- /.row -->
		 <hr>
   <?php  } ?>


 