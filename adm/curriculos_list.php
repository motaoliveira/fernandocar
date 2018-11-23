<?php
include("conect.php");

$per_page = 7;
$sqlc = "show columns from curriculo";
$rsdc = mysql_query($sqlc);
$cols = mysql_num_rows($rsdc);
$page = $_REQUEST['page'];

$start = ($page-1)*7;
$sql = "SELECT * FROM `curriculo` ORDER BY `curriculo`.`id` DESC LIMIT $start,7";
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

		var r = confirm("Deseja deletar esse curriculo?");
		if(r == true){
		
		$.post("curriculo_del.php", {id:id , file:file},function(get_retorno) {
		  //alert(get_retorno);
		  //location.reload(true);
		  $('#curriculos').trigger('click');
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
			$.post("extras_edite.php",
				{
					id:id,
				},
				function(data, status){
				//alert(data);
					$("#links").load("extras_edite.php");
					$('#paging_button').hide();
				});
		   });
</script>
	<?php
	while ($banco = mysql_fetch_assoc($rsd))
	{
		$id = $banco["id"];
		$nome = $banco["nome"];
		$area = $banco["area"];
		$curriculo = $banco["curriculo"];
	?>
     <!-- Atuação  -->
        <div class="row">
            <div class="col-7">
				<p><strong>Nome: </strong><?php echo $nome;?></p>	
				<p><strong>Profissão: </strong><?php echo $area;?></p>	
            </div>
            <div class="col">
				<a  id="<?php echo $id; ?>" href="../curriculo/<?php echo $id; ?>/doc/<?php echo $curriculo; ?>" target="_blank" class="btn btn-success btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Download Currículo</a> 
				<?php
					// $nome=explode(" ", $nome);
					// $nome=$nome[0];
				?>
				<a type="submit" id="<?php echo $id; ?>"  value="<?php echo $id; ?>" class="btn btn-success btn-block ltn"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a> 
            </div>
        </div>
        <!-- /.row -->
		 <hr>
   <?php  }
    
    
    

?>
 
       

 