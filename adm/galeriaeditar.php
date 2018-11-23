
<?php
	//include('conect.php');
	ob_start(); 
	@session_start();
	include('protect.php');
	include('globais.php');
	
	
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	} 
?>

<?php 	
$_SESSION['line1'] = '0';
$per_page = 7;
include("conect.php");
$sql = "SELECT * FROM `galeria`";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>
	
<link rel="stylesheet" type="text/css" media="screen" href="css.css" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function showLoader(){
		$('.search-background').fadeIn(200);
	}
	function hideLoader(){
		$('.search-background').fadeOut(200);
	};
	
	$("#paging_button li").click(function(){
		showLoader();
		
		$("#paging_button li").css({'background-color' : '#FAFAFA', 'color' : 'grey'});
		$(this).css({'background-color' : '#FFF','color' : '#000'});
		$("#links").load("datag.php?page=" + this.id, hideLoader);
		
		return false;
	});
		//$("#1").css({'background-color' : '#FFF','color' : '#000'});
		showLoader();
		$("#links").load("datag.php?page=1", hideLoader);
	});
</script>

	
		
	
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Galeria</li>
        <li class="breadcrumb-item">Editar</li>
        </ol>
   
   <div class="container" >

	<div id="row">
	
    <div class="card w-100" >
	<h3 class="card-header">Editar</h3>
    <div class="card-block">
		<div class="container" id="links" style="width:100%" style="border:0px green solid" >
        
        </div>
	</div>
    </div>
	 <div id="paging_button" class="row text-center">
            <div class="col-lg-12">
            <hr />
                <ul class="pagination">
                    <?php
		//Show page links
		//if(!$_GET['page']){echo "sem page";}
		for($i=1; $i<=$pages; $i++)
		{
			echo '<li class=" btn btn-default" id="'.$i.'" >'.$i.'</li>';
		}?>
                  
                </ul>
			<hr />
            </div>
        </div>
       
</div>
</div>
<?php
$_SESSION['line1'] = "0";

?>