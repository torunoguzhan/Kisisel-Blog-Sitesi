

<?php include 'header.php';?> 



<?php $i=0;?>






<div class="container">
  <div class="row">
    <div class="col-md-3 mt-4 ">
      <div class="card border-0 bg-secondary" >
        <img class="card-img-top" src="oguzhan.png" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">BLOGUMA HOŞGELDİNİZ</h6>
          <p class="card-text">Merhabalar yandaki linklerden istediğiniz içeriklere ulaşabilirsiniz tüm içeriklere ulaşmak için üye girişi yapmalısınız. Dilerseniz yazdığınız kodları bize gönderirseniz sayfamızda paylaşırız. İstek ve öneriler için iletişim bölümünü kullanabilirsiniz.</p>
        </div>
        <ul class="list-group list-group-flush ">
          <li class="list-group-item bg-secondary"><strong style="font-size: 14px;">SOSYAL MEDYA HESAPLARIM</strong></li>
        </ul>
        <div class="card-body">
          <a href="https://www.facebook.com/oguzhan.torun.52" target="_blank"><i class="fab fa-facebook fa-2x mr-4  ml-4" style="color:#3b5998"></i></a>

          <a href="https://www.instagram.com/torunoguzhan/" target="_blank"><i class="fab fa-instagram fa-2x ml-4 " style="color:#e4405f"></i></a>
        </div>
      </div>
      
      
      
    </div>

    <div class="col-md-8 ml-2 mt-4 ">
      <table class="table table-hover table-dark ">
        <thead>
          <tr>
            <th class="text-center">HANGİ BÖLÜME GİTMEK İSTİYORSUNUZ ?</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a style="text-decoration:none;" class="text-white" href="c.php"><button type="button" class="btn btn-default text-white btn-sm">C ile Programlama Örnekler</button></a></td>
          </tr>
          
          <tr>

            <td><a style="text-decoration: none; " class="text-white"  href="nesne.php"><button type="button" class="btn btn-default text-white btn-sm "> C++ İle Nesne Yönelimli Programlama Örnekler </button></a></td>
          </tr>
          <tr>

            <td><?php if (isset($_SESSION['kullanici_email']) && $i==1) { ?>
              
            <a style="text-decoration: none; " class="text-white" href="bootstrap.php">Bootstrap ile Hazır Tasarım  Örnekleri</a> <?php } else { ?>   <a style="text-decoration: none; " class="text-white" href="#"  ><button type="button" class="btn btn-default text-white  btn-sm" id="yetkii">Bootstrap ile Hazır Tasarım  Örnekleri</button></a>

           <?php  } ?>
             </td>
          </tr>
          <tr>

            <td><?php if (isset($_SESSION['kullanici_email'] ) && $i==1 ) { ?>
              
            <a style="text-decoration: none; " class="text-white" href="htmlcss.php"  >Bootstrap ile Hazır Tasarım  Örnekleri</a> <?php } else { ?>   <a style="text-decoration: none; " class="text-white" href="#"  ><button type="button" class="btn btn-default text-white  btn-sm" id="yetkiii">HTML-CSS-Bootstrap Konu Örnekleri </button></a>

           <?php  } ?>
             </td>
          </tr>
          
        </tbody>
      </table>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="coming.png" height="400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="1.png" height="400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="22.png" height="400" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.png" height="400" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="4.png" height="400" alt="Third slide">
    </div>
  </div>
</div>
    </div>


    
  </div>




</div>





</div>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $("#yetkii").click(function(){
    swal("ÇOK YAKINDA ERİŞİME AÇILACAKTIR");
  });
  
</script>

<script type="text/javascript">
  $("#yetkiii").click(function(){
    swal("ÇOK YAKINDA ERİŞİME AÇILACAKTIR");
  });
  
</script>





<?php include 'footer.php';?> 





















































