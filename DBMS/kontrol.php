<?php 
session_start();
include('baglanti.php');
$user_check = $_SESSION['userName'];//login_action'daki user name
//customer tablosundan sorgula
$sql = mysqli_query($baglan,"SELECT * FROM customer 
WHERE Customer_User_Name='$user_check'");

$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
$login_user = $row['Customer_User_Name'];

if(!isset($user_check)){//user check tanımlıysa home sayfası açık kalacak değilse logine git
    header("Location:login.php");    
}
?>