<?php
include('baglanti.php');
if(mysqli_connect_errno()){
    echo "MySql baglantisi basarisiz!" . mysqli_connect_error();
}

$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$dogum_tarihi = $_POST['dogum_tarihi'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$krediKarti = $_POST['krediKarti'];

$register = "INSERT INTO customer VALUES('$isim','$soy_isim','$cinsiyet',
'$adres','$dogum_tarihi','$userName','$password','$krediKarti','')";
$result = mysqli_query($baglan,$register);

//kayıt tamamlanınca login e git
header("Location: login.php");
?>