
<?php
include 'baglan.php';
if(isset($_POST['ekle'])){
    $baslik=$_POST['baslik'];
    $aciklama=$_POST['aciklama'];

    $ekle=$db-> prepare("insert into aciklama set baslik=?,aciklama=?");
    $ekle->execute(array($baslik,$aciklama));
    if($ekle){
        echo "eklendi";
    }else{
        echo "eklenmedi";
    }


}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-size: 25px;
        float: auto;
        text-align: center;
    }
    .kutu{
        padding: 45px;
        border: 2px solid brown;
        border-width: 50px;
    }
    .aciklama{
        width: 500px;
    }
    input{
        padding: 15px;

    }
    .buton{
        color: #fff;
        background-color: brown;
        font-size: 30px;
        
    }

    .buton:hover{
        background-color:darksalmon;
    }
    .kutu ::placeholder{
        font-size: 20px;
    }


</style>
<body>
    <form action="" method="POST" class="kutu">
        Başlık : <input type="text" name="baslik" placeholder="Başlığı Giriniz.."> <br> <br>
        <textarea name="aciklama" rows="10" placeholder="Açıklama" class="aciklama"></textarea> <br> <br>
        <input type="submit" name="ekle" placeholder="Kaydet" class="buton">

    </form>

</body>
</html>
