<?php
class Printisset extends Encryption{

    public static function printing(){
     if(isset($_GET['data'])){
         $data=$_GET['data'];
         return parent::unlock($data);
     }else{
         return '';
     }
    }
}