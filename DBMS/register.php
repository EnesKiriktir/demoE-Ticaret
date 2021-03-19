<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Üye Kayıt</title>
    </head>

    <body>
        <center><p>Üye Kayıt Formu</p></center>
        <form id="form1" name="form1" action="register_action.php" method="post">
        <table width="350" border="o" align="center">
        <tbody>
            <tr>
                <td width="96">İsim</td>
                <td width="153"><input type="text" name="isim" id="isim_id"></td>
            </tr>

            <tr>
                <td width="96">Soy İsim</td>
                <td width="153"><input type="text" name="soy_isim" id="soy_isim_id"></td>
            </tr>

            <tr>
                <td width="96">Cinsiyet</td>  
                <td> Erkek<input type="radio" name="cinsiyet" value="erkek"/>
                <td> Kadın<input type="radio" name="cinsiyet" value="kadın"/>    
            </tr>

            <tr>
                <td width="96">Adres</td>
                <td width="153"><input type="text" name="adres" id="adres_id"></td>
            </tr>

            <tr>
                <td width="96">Doğum Tarihi</td>
                <td width="153"><input type="text" name="dogum_tarihi" id="dogum_tarihi_id"></td>
            </tr>

            <tr>
                <td width="96">Kullanıcı Adı</td>
                <td width="153"><input type="text" name="userName" id="userName_id"></td>
            </tr>

            <tr>
                <td width="96">Parola</td>
                <td width="153"><input type="text" name="password" id="password_id"></td>
            </tr>

            <tr>
                <td width="96">Kredi Kartı No</td>
                <td width="153"><input type="text" name="krediKarti" id="krediKarti_id"></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" id="submit_id" value="Kaydet"></td>
            </tr>
        </tbody>
        </table>
        </form>
        <center>
            <p>&nbsp;</p>
            <p><a href="login.php">Zaten üye iseniz giriş yapınız!</a></p>
        </center>
    </body>
</html>

