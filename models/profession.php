<?php
class profession extends tableDataObject
{

    const TABLENAME = 'professions';

    public static function deleteprofession($professionid)
    {
        global $healthdb;
        $query = "DELETE FROM professions WHERE professionid='$professionid'";
        $healthdb->prepare($query);
        $healthdb->execute();
    }
    public static function checkcode($professioncode)
    {
        global $healthdb;
        $query = "SELECT count(*) as code FROM professions WHERE professioncode='$professioncode'";
        $healthdb->prepare($query);
        $count=$healthdb->fetchColumn();  
        if($count > 0 ){
            return true;
        }else{
            return false;
        }
    }
}
