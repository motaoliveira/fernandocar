
<?php
	//include('conect.php');
	include('globais.php');

	$_SESSION['line1'] = "0";

		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.js"></script>
<script>
tinymce.init({
  selector: 'textarea',
  //images_upload_url: 'postAcceptor.php',
  //images_upload_base_path: '/some/basepath',
  //images_upload_credentials: true,
  height: 400,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});
</script>

	<script>
	$(document).ready(function(){
		 $(".dlt").click(function()
			{
			var id = $(this).attr('id');
			$.post("delete_pa.php", { id:id },function() {
			 });
			location.reload();
		});
		 $(".edt").click(function(){
			//var id = $(this).attr('id');
			//alert(id);
			("#panel").hide();
			//$.post("delete_pa.php", { id:id },function() {
			 //});
			//location.reload();
		});
	});
	</script>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Clientes</li>
          <li class="breadcrumb-item">Editar</li>

    </ol>
	<div class="container"  >
		<div class="row">
			<div class="card w-100">
						<h3 class="card-header">Retirar Cliente</h3>
				<div class="card-block">

					<div class="row" >
						<?php
							$categori ="SELECT * FROM `parceria` ORDER BY `parceria`.`id` DESC";
							$actioQuery = mysql_query($categori);
							while($act = mysql_fetch_array($actioQuery)){
								$idpa = $act['id'];
								$imgpa = $act['img'];
								$titulopa = $act['titulo'];
								$descripa = $act['descri'];
						?>
						<div class="col-3" style="text-align:center">
							<img class="img-thumbnail" src="../parceria/<?php echo $imgpa; ?>"  />
							<p  style="font-size:14px;"><strong><?php echo $titulopa; ?></strong>

							<a class="btn btn-<?php echo $corMenuAdm; ?> btn-sm btn-block dlt" id="<?php echo $idpa; ?>">
								<i class="fa fa-trash" aria-hidden="true"></i> Delete</a>		</p>
						</div>
						<hr>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
