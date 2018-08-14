<?php
class Post extends PostController {

    public static function processLogin()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        
        $login=new users();
        $login->login($username,$password);
        
    }
    
    public static function addInstitution(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $institution = new institution();
        $institution_data=& $institution->recordObject;

        $institution_data->nameofinstitution=$institutionname;
        $institution_data->address=$address;
        $institution_data->dateestablished=$dateestablished;
        $institution_data->location=$location;
        $institution_data->homepage=$homepage;
        $institution_data->schooltype=$schooltype;


        $institution->store();
        return $institution_data->institutionid;
    }

    public static function addProfession(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $profession = new profession();
        $profession_data=& $profession->recordObject;

        $profession_data->professionname=$professionname;
        $profession_data->professioncode=$professioncode;
        $check=profession::checkcode($professioncode);
        if($check===true){
            $data="Profession code already exists";
            Redirecting::location('addprofession',$data);
        }else{
        $profession->store();
        Redirecting::location('addprofession');
        }
    }

    public static function deleteProfession(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $delete=profession::deleteprofession($professionid); 
       
    }
}