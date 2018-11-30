<?php
	//include('conect.php');
	ob_start();
	@session_start();
	include('globais.php');
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	}
?>
<?php
$per_page = 7;
include("conect.php");
$sql = "SELECT * FROM `cliente`";
$sql = mysql_query($sql);
$count = mysql_num_rows($sql);
$pages = ceil($count/$per_page)
?>

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
		$("#links").load("datacli.php?page=" + this.id, hideLoader);
		return false;
	});
		$("#1").css({'background-color' : '#FFF','color' : '#000'});
		showLoader();
		$("#links").load("datacli.php?page=1", hideLoader);
	});
</script>
<div class="container-fluid" style="border:0px grey solid;padding:0px;">
	<div id="container-fluid" style="border:0px orange solid;padding:0px;">
		<!--<div class="search-background" style="border:1px #CCC solid">
			<label><img src="loader.gif" alt="" /></label>
		</div>-->
    <div class="junbotrom" >
        <ol class="breadcrumb">
					<li>Atendimento Clientes</li>
        </ol>
    </div>
    <div class="panel-group">
    <div class="panel panel-<?php echo $corPainel; ?>" style="">
			<div class="panel-heading"><h3></h3></div>
    <div class="panel-body">
		<div class="container" id="links" style="width:100%" style="border:1px green solid" >
				//Entrada de informações dos clientes
		</div>
	</div>
    </div>
	 <div id="paging_button" class="row text-center">
            <div class="col-lg-12">
            <hr/>
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
        <!-- /.row
		</ul>
  	</div>-->
</div>
<?php
$_SESSION['line1'] = "0";
?>
