<?php
require("../init.php");

$pay= Post::approvePayment();

print_r($pay);