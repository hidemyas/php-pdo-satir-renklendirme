<?php 
 try{
     $db_connect    =   new PDO('mysql:dbname=egtim;host=localhost;charset=UTF8','root','');
 }catch (PDOException $exception){
     echo "MYSQL Bağlantı Hatası <br/>";
     echo "Hata Açıklaması : ".$exception->getMessage();
     die();
 }

