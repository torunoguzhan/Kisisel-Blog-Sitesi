<?php include 'header.php' ?>


<div class="container col-md-6">
	<div class="card mt-4 bg-info">
		<div class="card-body">
			<h4 class="text-center">Kodunu Gönder Paylaşalım </h4>
			
			<p class="card-text" style="font-size: 22px;">Bu bölümde yazdığınız kodları bize göndererek , diğer üyelerimizle paylaşmak isterseniz kodlarınızı aşağıdan gönderebilirsiniz..</p>
			
		</div>
	</div>
	<h4 class="mt-2 text-center" >KOD PAYLAŞ</h4>
	<hr class="bg-danger">
	
	

	<form action="islem.php" method="POST">
		<input  class="form-control " type="text" name="kod_name" placeholder="Adınızı yazınız">
		<input class="form-control mt-2 " type="email" name="kod_mail" required="" placeholder="Mailinizi girin">
		<input class="form-control mt-2 " type="text" name="kod_baslik" required="" placeholder="Programınızın amacını  giriniz">
		<textarea class="form-control mt-2 " required=""  style=" height: 300px;"  name="kod_icerik" placeholder="Programınızı buraya yazınız"></textarea>
		<div class="d-flex justify-content-center">
			<button    name="programgonder" type="submit"  class="btn btn-success mt-4">Kod Gönder</button>
		</div>
	</form>
	
	
</div>














<?php include 'footer.php'; ?>