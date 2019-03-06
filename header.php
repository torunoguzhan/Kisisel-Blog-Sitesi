<?php 
session_start();
ob_start(); 

include 'baglan.php';

$hakkindasor=$db->prepare("SELECT * FROM hakkimizda WHERE bilgilerim_no=:no ");
$hakkindasor->execute(array(
'no'=>1
));

$hakkindacek=$hakkindasor->fetch(PDO::FETCH_ASSOC);



$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_email=:email");
$kullanicisor->execute(array(
'email'=>$_SESSION['kullanici_email']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


 if ($say==1) {
?>
<style type="text/css">
  .gosterme
  {
    display: none;

  }
</style>
<?php  
  
}








?>



<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="description" content="Kişisel Blog">
  <meta name="keywords" content="Blog Bilgi">
  <meta name="author" content="Oğuzhan TORUN">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="respon.css">


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Kişisel Blog</title>

</head>




<body  style="background: #7a8b89  "  >

    
    

    
    
   

	

       
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div  class="container ">
      <a href="index.php" class="navbar-brand ">KİŞİSEL BLOG</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuac">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse  "  id="menuac">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-home"></i> ANASAYFA</a></li>
          <li class="nav-item"><a href="hakkinda.php" class="nav-link"><i class="fas fa-info"></i> HAKKIMIZDA</a></li>
          <li class="nav-item"><a href="kodgonder.php" class="nav-link"><i class="fas fa-file-signature"></i> KOD PAYLAŞ</a></li>
          <li class="nav-item"><a href="iletisim.php" class="nav-link"><i class="far fa-envelope"></i> İLETİŞİM</a></li>
          <li class="nav-item gosterme"><a href="kayit.php" class="nav-link"><i class="fas fa-user-plus"></i> KAYIT OL</a></li>
          <li class="nav-item gosterme"><a href="giris.php" class="nav-link"><i class="fas fa-sign-in-alt"></i>  GİRİŞ YAP</a></li>
          <li class="nav-item mt-2  " ><span> <strong><?php echo $kullanicicek['kullanici_hosgeldiniz']  ?></strong> <?php echo $kullanicicek['kullanici_name'] ?> <a href="cikis.php"> <?php echo $kullanicicek['kullanici_icon'] ?></a> </span></li>
         
        </ul>

      </div>

    </div>
  </nav>

  

 



  






















































  
