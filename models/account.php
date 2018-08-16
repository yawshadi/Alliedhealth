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


}