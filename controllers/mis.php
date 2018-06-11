<?php

class mis {

    public static function saveinstitution($params){

        $institutionname        =$params['institutionname'];
        $address                =$params['address'];
        $postcode               =$params['postcode'];

        $institution = new institution();
        $institution_data=& $institution->recordObject;

        $institution_data->nameofinstitution=$institutionname;
        $institution_data->address=$address;
        $institution_data->postcode=$postcode;
        $institution->store();
        return $institution_data->institutionid;
    }
}