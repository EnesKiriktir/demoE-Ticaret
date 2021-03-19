<html>
<head>
        <meta charset="utf-8">
        <title>Güncelleme Sayfası</title>
    </head>
    <body>
<?php
include('baglanti.php');
if(mysqli_connect_errno()){
    echo "MySql baglantisi basarisiz!" . mysqli_connect_error();
}

$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$adres = $_POST['adres'];
$dogum_tarihi = $_POST['dogum_tarihi'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$krediKarti = $_POST['krediKarti'];
$Customer_ID =$_POST['Customer_ID'];
$update = "UPDATE customer SET Customer_Name='$isim', Customer_Surname='$soy_isim',
Customer_Address='$adres',Customer_Birthdate='$dogum_tarihi',Customer_User_Name='$userName',
Customer_Password='$password',Customer_Credit_Card_Information='$krediKarti'
WHERE Customer_ID='$Customer_ID'";

$result = mysqli_query($baglan,$update);
?>
    <center>
            <p>&nbsp;</p>
            <p><a href="login.php">Bilgilerinizi güncellediniz giriş ekranına dönmek için tıklayınız.</a></p>
    </center>
    </body>
</html>