<?php
session_start();
include("baglanti.php"); //adding database

//loginden gelen bilgileri tut

$userName=$_POST['userName'];
$password=$_POST['password'];

//veritabanından kontrol et

$sql="SELECT * FROM customer 
WHERE Customer_User_Name='$userName' AND Customer_Password='$password'";
$result = mysqli_query($baglan,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//kullanici varsa oturum açılır yoksa hata alınır.
if(mysqli_num_rows($result) == 1){
    $_SESSION['userName'] = $userName;
    header("Location: home.php");//yönlendiriyor    
}
else{
    echo "<center>"."Şifreniz veya kullanıcı adınız yanlış!"."</br>"."<a href=login.php>
    Geri Dön</a>"."</center>";
}
?>
