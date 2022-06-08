<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=baslik;charset=utf8","root","");
}catch(PDOException $hata){
    echo $hata->getMessage();
}
?>