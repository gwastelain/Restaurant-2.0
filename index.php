<?php 

require('library/header.php'); 

$page = $_GET['page']; 
require('controller/'. $page .'Controller.php');

require('library/footer.php');