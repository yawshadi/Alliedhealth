<?php

class billing extends tableDataObject{

const TABLENAME = 'billings';


public static function searchamount($professionid){
    global $healthdb;
            $year=date('Y');       
            $getuser = "select amount  from billings  where professionid ='$professionid' and YEAR(billdate)='$year'";
            $healthdb->prepare($getuser);
            return $healthdb->fetchColumn();
        

    }

    
public static function billinglist(){
    global $healthdb;
                 
            $getuser = "SELECT * FROM billings JOIN professions on billings.professionid= professions.professionid";
            $healthdb->prepare($getuser);
            return $healthdb->resultSet();
        

    }
    public static function deletebill($billid)
    {
        global $healthdb;
        $query = "DELETE FROM billings WHERE billid='$billid'";
        $healthdb->prepare($query);
        $healthdb->execute();
    }
   
}
