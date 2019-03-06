<?php include 'header.php' ?>


<div class="container col-md-6 mt-4 mb-4 ">

<div class="card-deck ">
  <div class="card border-0">
    <img class="card-img-top" src="ktu.png" alt="Card image cap">
    <div class="card-body bg-secondary">
      <h4 class="card-title text-center"><?php echo $hakkindacek['bilgilerim_baslik'] ?></h4>
      <p class="card-text"><?php echo $hakkindacek['bilgilerim_ozgecmis'] ?> </p>
    </div>
  </div>
  <div class="card border-0">
    <img class="card-img-top" src="boztepe.png" alt="Card image cap">
    <div class="card-body bg-secondary">
      <h4 class="card-title text-center">Hobilerim</h4>
      <p class="card-text"><?php echo $hakkindacek['bilgilerim_hobi'] ?></p>
      <p class="card-text"><?php echo $hakkindacek['bilgilerim_yapilacak'] ?></p>
    </div>
  </div>
  
</div>
</div>






<?php include 'footer.php'; ?>

