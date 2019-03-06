<?php include 'header.php' ?>



<div class="container  col-md-6">

	<h4 class="title mt-2 text-center" >İLETİŞİM</h4>
	<hr class="bg-danger">
	
		

		<form action="islem.php" method="POST">
			<input  class="form-control "  type="text" name="kullanici_ad" placeholder="Adınızı yazınız">
			<input class="form-control mt-2 " type="text" name="kullanici_soyad" placeholder="Soyadınızı giriniz" >
			<input class="form-control mt-2 " type="email" name="kullanici_mail" required="" placeholder="Mailinizi girin" >
			<textarea class="form-control mt-2 "  style="height: 200px;"  name="kullanici_mesaj" placeholder="Mesajınızı giriniz.."></textarea>
			<div class="d-flex justify-content-center">
			<button   name="iletisimgonder" type="submit"  class="btn btn-success mt-4">Mesaj Gönder</button></div>
		</form>
		
	
</div>































</body>
</html>