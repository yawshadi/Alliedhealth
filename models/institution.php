<?php

class institution extends tableDataObject{

    const TABLENAME = 'institutions';

    public static function deleteinstitution($institutionid)
    {
        global $healthdb;
        $query = "DELETE FROM institutions WHERE institutionid='$institutionid'";
        $healthdb->prepare($query);
        $healthdb->execute();
    }
}