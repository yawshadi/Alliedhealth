<?php
require("../init.php");

$query=$_GET['term'];
$request=$_GET['request'];

$search=applicantprofile::searchUser($query,$request);

$userdata=[];
foreach($search as $get){

    $firstname = $get->firstname;
    $lastname = $get->lastname;
    $othername = $get->othername;
    $name= $firstname.' '.$lastname.' '.$othername;
    $userid = $get->id;
    $applicantid = $get->applicant_id;
    $showdata= $name.'|'.$applicantid;


    $userdata[] = array("id"=>$userid,"showdata"=>$showdata,"name"=>$name,"applicantid"=>$applicantid);
}
//  print_r($userdata);
echo json_encode($userdata);