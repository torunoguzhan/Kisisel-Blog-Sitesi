<?php include 'header.php'; 

$cplusplussor=$db->prepare("SELECT * FROM cplusplus ");
$cplusplussor->execute();




?>

<?php $i=0; ?>
<div class="container">
<?php while($cpluspluscek=$cplusplussor->fetch(PDO::FETCH_ASSOC))   { $i++;
if ($i==10)
	break;

 
 	# code...
  ?>
<div class="row">
  	<div class="col-md-12">

<div class="card bg-secondary  mt-4 ">
	<h5 class="card-title mt-4 text-center"><?php echo $cpluspluscek['cplusplus_baslik']; ?></h5>
	<div class="card-body "  >
        
		<textarea class="form-control card-text responsive" style=" height: 500px;"   disabled=""><?php echo $cpluspluscek['cplusplus_program']; ?></textarea>
		
		
	</div>
	</div>
</div>




      

</div>



<?php } ?>





</div>





  </body>
  </html>










