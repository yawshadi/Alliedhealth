<?php

class applicantprofile extends tableDataObject{

    const TABLENAME = 'applicant_profile';

   
    public static function searchUser($query,$request){
        global $healthdb;
        if($request=='search') {

            $getuser = "select * from applicant_profile  where firstname like'$query%' or lastname like '$query%'";
            $healthdb->prepare($getuser);
            return $healthdb->resultSet();

        }elseif ($request=='populate'){
           
                $getuser = "select * from applicant_profile  where id ='$query'";
                $healthdb->prepare($getuser);
                return $healthdb->resultSet();
            

        }
       
    }
}