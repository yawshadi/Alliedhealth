<?php
require("../init.php");

$username= $_POST['username'];
$password= $_POST['password'];

$login=new users();
$login->login($username,$password);
