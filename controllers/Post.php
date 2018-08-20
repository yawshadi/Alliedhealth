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
        if(isset($institutionid)){
            $institutionid=$institutionid;
            $page='institutionlist';
            $data="Institution Accredited";

        }else{
            $institutionid=null;
            $page='addinstitution';
            $data="Institution saved";

 
        }
        $institution = new institution($institutionid);
        $institution_data=& $institution->recordObject;

        $institution_data->nameofinstitution=$institutionname;
        $institution_data->address=$address;
        $institution_data->dateregistered=$dateregistered;
        $institution_data->location=$location;
        $institution_data->homepage=$homepage;
        $institution_data->schooltype=$schooltype;
        $institution_data->status=$status;


        $institution->store();
        Redirecting::location($page,$data);
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

    public static function addPayment(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $payment = new account();
        $payment_data=& $payment->recordObject;

        $payment_data->fullname=$fullname;
        $payment_data->amountpaid=$amountpaid;
        $payment_data->amountdue=$amountdue;
        $payment_data->paymentdate=$paymentdate;
        $payment_data->recievedby=$recievedby;
        $payment_data->serialnumber=$serialnumber;
        $payment_data->professionid=$professionid;
        $payment_data->accounttype=$accounttype;
        

        $profession = new profession($professionid);
        $profession_data= & $profession->recordObject;
        $professioncode = $profession_data->professioncode;
        $payment_data->professioncode=$professioncode;
        $date=date('y');
       if( $payment->store()){
           $accountid=$payment_data->accountid;
           $count=(int)account::getcountbyyear($professioncode);
           $num_length = strlen((string)$count);
           if($num_length==1){
               $rand='000'.$count;
           }
           elseif($num_length==2){
            $rand='00'.$count;
            }
            elseif($num_length==3){
            $rand='0'.$count;
            }
             else{
            $rand=$count;
            }

        $applicantid="AHPC-".$professioncode.$rand."-".$date;

        $payment = new account($accountid);
        $payment_data=& $payment->recordObject;
        $payment_data->applicantid=$applicantid;
        $payment->store();
       }

       $data="Payment successfully made";
       Redirecting::location($location,$data);
        
    }

    public static function addBill(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $bill = new billing();
        $bill_data=& $bill->recordObject;

        $bill_data->amount=$amountdue;
        $bill_data->billdate=$billdate;
        $bill_data->professionid=$professionid;
       
        $bill->store();

        Redirecting::location('billconfig');
        

    }

    public static function deleteProfession(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $delete=profession::deleteprofession($professionid); 
       
    }
    public static function deleteBill(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $delete=billing::deletebill($billid); 
       
    }
    public static function deleteInstitution(){

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $delete=institution::deleteinstitution($institutionid); 
       
    }
}