<?php
require("init.php");

$params=array('institutionname'=>'abuakwa','address'=>'kasoa','postcode'=>'520');
$output=mis::saveinstitution($params);

echo $output;