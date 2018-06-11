<?php
/**
 * Created by PhpStorm.
 * Date: 4/23/2018
 * Time: 9:46 AM
 */
class Redirecting {

    /**
     * @param $destinationurl
     */
    public static function location($destinationurl,$data=null){
        if(is_null($data)){
        header('Location:'.URLROOT.'/'.$destinationurl.'.php');
        }else{
            header('Location:'.URLROOT.'/'.$destinationurl.'.php?data='.$data);
        }
    }
}