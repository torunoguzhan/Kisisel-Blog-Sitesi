<?php 
session_start();
session_destroy();
header("Location:giris.php?kontrol=1");


?>	