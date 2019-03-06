<?php  
session_start();
ob_start();

require_once 'baglan.php';



if (isset($_POST['programgonder'])) {

	$pkaydet=$db->prepare("INSERT INTO kodtut SET
       kod_name=:kod_name,
       kod_mail=:kod_mail,
       kod_baslik=:kod_baslik,
       kod_icerik=:kod_icerik
 

		");

	$ekle=$pkaydet->execute(array(

		'kod_name'=>$_POST['kod_name'],
		'kod_mail'=>$_POST['kod_mail'],
		'kod_baslik'=>$_POST['kod_baslik'],
		'kod_icerik'=>$_POST['kod_icerik']
	));
	header("Location:iletisim.php");
}








if(isset($_POST['iletisimgonder']))
{
	$kaydet=$db->prepare("INSERT INTO iletisim SET
        
      
		kullanici_ad=:kullanici_ad,
		kullanici_soyad=:kullanici_soyad,
		kullanici_mail=:kullanici_mail,
		kullanici_mesaj=:kullanici_mesaj





		");

	$insert=$kaydet->execute(array(

        
		'kullanici_ad'=>$_POST['kullanici_ad'],
		'kullanici_soyad'=>$_POST['kullanici_soyad'],
		'kullanici_mail'=>$_POST['kullanici_mail'],
		'kullanici_mesaj'=>$_POST['kullanici_mesaj']

	));

	header("Location:iletisim.php");
}


if(isset($_POST['kullanicikaydet']))
{
	$kaydet=$db->prepare("INSERT INTO kullanici SET
        
      
		kullanici_name=:kullanici_name,
		kullanici_surname=:kullanici_surname,
		kullanici_email=:kullanici_email,
		kullanici_password=:kullanici_password

        



		");

	$insert=$kaydet->execute(array(

        
		'kullanici_name'=>$_POST['kullanici_name'],
		'kullanici_surname'=>$_POST['kullanici_surname'],
		'kullanici_email'=>$_POST['kullanici_email'],
		'kullanici_password'=>md5($_POST['kullanici_password'])
	

	));
    
	header("Location:kayit.php?durum=yes");
}

if (isset($_POST['kullanicigiris'])) {

	$kullanici_email=$_POST['kullanici_email'];
	$kullanici_password=md5($_POST['kullanici_password']);
	# code...

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_email=:email and kullanici_password=:password");

	$kullanicisor->execute(array(
		'email'=>$kullanici_email,
		'password'=>$kullanici_password 
	));

	 $say=$kullanicisor->rowCount();

	 if ($say==1) {
	 	$_SESSION['kullanici_email']=$kullanici_email;

	 	header("Location:giris.php?durum=ok");	 	# code...
	 }
	 else{
	 	header("Location:giris.php?durum=no");
	 	
	 }



}








?>