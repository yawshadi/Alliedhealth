<?php
require("../init.php");

$professionid=$_GET['professionid'];

echo billing::searchamount($professionid);