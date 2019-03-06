<?php 

try {
	//Veri tabanına baglanmak icin 
	$db= new PDO("mysql:host=localhost;dbname=u8650282_blog;charset=utf8",'u8650282_torunts','307448TsTsTs');
	//  echo "Veri tabani baglantisi basarili";
}

catch(PDOException $e) {
	echo $e-> getMessage();

}
 ?>