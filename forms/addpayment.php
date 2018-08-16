<?php
require("../init.php");

$pay= Post::addPayment();

print_r($pay);