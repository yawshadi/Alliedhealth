<?php

class account extends tableDataObject{

    const TABLENAME = 'accounts';

    public static function getcountbyyear($professioncode){
        global $healthdb;
        $year=date('Y');
        $query = "SELECT count(*) as total FROM accounts WHERE professioncode='$professioncode' and YEAR(paymentdate)='$year'";
        $healthdb->prepare($query);
        return $healthdb->fetchColumn();  
    }

    public static function getaccountbyid($accountid){
        global $healthdb;
        $query = "SELECT * FROM accounts WHERE accountid='$accountid'";
        $healthdb->prepare($query);
        return $healthdb->singleRecord();  
    }
}