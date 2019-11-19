<?php

$title = 'Photo';
if ($_GET['n']==1){
    require('library/header.php'); 
    require('view/photos01View.php');
    require('library/footer.php');
} else if ($_GET['n']==2){
    require('library/header.php'); 
    require('view/photos02View.php');
    require('library/footer.php');
} else if ($_GET['n']==3){
    require('library/header.php'); 
    require('view/photos03View.php');
    require('library/footer.php');
} else if ($_GET['n']==4){
    require('library/header.php'); 
    require('view/photos04View.php');
    require('library/footer.php');
}