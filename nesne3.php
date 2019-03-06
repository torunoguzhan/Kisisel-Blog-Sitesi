<?php include 'header.php'; 

$nesnesor=$db->prepare("SELECT * FROM nesne WHERE nesne_no>17 AND nesne_no<27");
$nesnesor->execute();




?>

<?php $i=0; ?>
<div class="container">
<?php while($nesnecek=$nesnesor->fetch(PDO::FETCH_ASSOC))   { $i++;
if ($i==10)
	break;

 
 	# code...
  ?>

  <div class="row">
  	<div class="col-md-12">

<div class="card bg-secondary  mt-4 ">
	<h5 class="card-title mt-4 text-center"><?php echo $nesnecek['nesne_baslik']; ?></h5>
	<div class="card-body "  >
        
		<textarea class="form-control card-text responsive" style=" height: 500px;"   disabled=""><?php echo $nesnecek['nesne_program']; ?></textarea>
		
		
	</div>
	</div>
</div>




      

</div>
<?php } ?>

<ul class="pagination mt-2 justify-content-center">
	<li class="page-item page-link" ><a href="nesne.php">1</a></li>
	<li class="page-item page-link" ><a href="nesne2.php">2</a></li>
	<li class="page-item page-link" ><a href="nesne3.php">3</a></li>
</ul>



</div>





  </body>
  </html>










