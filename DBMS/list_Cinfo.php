<!DOCTYPE html>
<html>

<?php 
session_start();
include('baglanti.php');
$user_check = $_SESSION['userName'];//login_action'daki user name
//customer tablosundan sorgula
$sql = mysqli_query($baglan,"SELECT * FROM customer 
WHERE Customer_User_Name='$user_check'");

while($oku = mysqli_fetch_array($sql)){
    $isim=$oku['Customer_Name'];
    $soy_isim = $oku['Customer_Surname'];
    $cinsiyet = $oku['Customer_Gender'];
    $adres = $oku['Customer_Address'];
    $dogumTarihi = $oku['Customer_Birthdate'];
    $userName = $oku['Customer_User_Name'];
    $password = $oku['Customer_Password'];
    $kredi_kart = $oku['Customer_Credit_Card_Information'];
    $Customer_ID =$oku['Customer_ID'];
   
}
?>

    <head>
        <meta charset="utf-8">        
    </head>

    <body>
        <center><p>Bilgi Düzenleme Formu</p></center>
        <form id="form1" name="form1" action="update_action.php" method="post">
        <table width="350" border="o" align="center">
        <tbody>
            <tr>
                <td width="96">İsim</td>
                <td width="153"><input type="text" name="isim" class="form-control" value="<?php echo $isim?>"></td>
            </tr>

            <tr>
                <td width="96">Soy İsim</td>
                <td width="153"><input type="text" name="soy_isim" class="form-control" value="<?php echo $soy_isim?>"></td>
            </tr>            

            <tr>
                <td width="96">Adres</td>
                <td width="153"><input type="text" name="adres" class="form-control" value="<?php echo $adres?>"></td>
            </tr>

            <tr>
                <td width="96">Doğum Tarihi</td>
                <td width="153"><input type="text" name="dogum_tarihi"  class="form-control" value="<?php echo $dogumTarihi?>"></td>
            </tr>

            <tr>
                <td width="96">Kullanıcı Adı</td>
                <td width="153"><input type="text" name="userName" class="form-control" value="<?php echo $userName?>"></td>
            </tr>

            <tr>
                <td width="96">Parola</td>
                <td width="153"><input type="text" name="password" class="form-control" value="<?php echo $password?>"></td>
            </tr>

            <tr>
                <td width="96">Kredi Kartı No</td>
                <td width="153"><input type="text" name="krediKarti"  class="form-control" value="<?php echo $kredi_kart?>"></td>
            </tr>

            <tr>
                <td width="96">Customer ID</td>
                <td width="153"><input type="text" name="Customer_ID"  class="form-control" value="<?php echo $Customer_ID?>"></td>
            </tr>


            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" class="btn btn-primary" value="Kaydet"></td>
            </tr>

            <center>
            <p>&nbsp;</p>
            <p><a href="sil.php?Customer_ID=<?php echo $Customer_ID; ?>" class ="btn btn-danger">Kaydınızı silmek için tıklayınız.</a></p>
            </center>
        </tbody>
        </table>
        </form>
        </body>
</html>


