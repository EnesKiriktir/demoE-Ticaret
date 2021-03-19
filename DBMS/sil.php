<html>
<head>
        <meta charset="utf-8">
        <title>Kayıt Silme Sayfası</title>
    </head>
    <body>
<?php
include('baglanti.php');
if(mysqli_connect_errno()){
    echo "MySql baglantisi basarisiz!" . mysqli_connect_error();
}
$Customer_ID =$_GET['Customer_ID'];

$delete = "DELETE FROM customer WHERE Customer_ID = '$Customer_ID'";

$result =  mysqli_query($baglan,$delete);
?>
    <center>
            <p>&nbsp;</p>
            <p><a href="login.php">Kaydınızı sildiniz giriş ekranına dönmek için tıklayınız.</a></p>
    </center>
    </body>
</html>