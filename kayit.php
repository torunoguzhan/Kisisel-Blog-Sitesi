

<?php include 'header.php'; ?>       





<div class="container sd col-md-3 text-center" style="margin-top: 120px;">

    <?php if ($_GET['durum']==yes) {?>
        <div class="alert alert-success">
            Kayıt Başarılı
        </div>
        
   <?php header("Refresh: 2; giris.php "); }
    ?> 
 <div class="login-form">
    <form  action="islem.php" method="POST">
        <img class="mb-4" src="kisi.png" alt="" width="72" height="72">
        <h2 class="text-center">KAYIT OL</h2>
        
        <div class="form-group">
            <input  name="kullanici_name" type="text" class="form-control" placeholder="Adınızı Giriniz" required="">
        </div>
        <div class="form-group">
            <input  name="kullanici_surname" type="text" class="form-control" placeholder="Soyadınızı Giriniz" required="">
        </div>
        <div class="form-group">
            <input  name="kullanici_email" type="email" class="form-control" placeholder="Mailinizi Giriniz" required="">
        </div>
        <div class="form-group">
            <input  type="password" name="kullanici_password" class="form-control" placeholder="Şifrenizi Giriniz" required="">
        </div>
        <div class="form-group">
            <button  name="kullanicikaydet" type="submit" class="btn btn-primary btn-block">KAYIT OL</button>
            
        </div>
    </form>
</div>
</div>



 


</body>
</html>






















































