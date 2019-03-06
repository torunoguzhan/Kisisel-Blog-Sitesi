

<?php include 'header.php'; ?>     


      




<div class="container sd col-md-3 text-center" style="margin-top: 120px;">



    <?php if ($_GET['durum']==ok && isset($_SESSION['kullanici_email']) ) {?>
        <div class="alert alert-success">
            Giriş Başarılı
        </div>
        
   <?php header("Refresh: 2; index.php "); }
   else if($_GET['durum']==no){
        ?> <div class="alert alert-danger">
            Giriş Başarısız
        </div>
    <?php header("Refresh: 2; giris.php "); } ?> 
    
     
 
   
    <form action="islem.php" class="form-signin" method="POST">
      <img class="mb-4" src="kisi.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">GİRİŞ YAP</h1>
      <input type="email" name="kullanici_email"  class="form-control mt-3" placeholder="Email address" required="">
      <input type="password"  name="kullanici_password" class="form-control mt-3" placeholder="Password" required="">
      
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit" name="kullanicigiris">Giriş Yap</button>
      <a   href="kayit.php" class="btn btn-lg  btn-primary btn-block">Kayıt Ol</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    

    
 




</div>


    



    

<footer class="page-footer font-small bg-secondary  mt-4 fixed-bottom" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>


</body>
</html>




















































