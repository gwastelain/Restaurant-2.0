<?php
if ($_GET['n']==1){
    require('view/photos01View.php');
} else if ($_GET['n']==2){
    require('view/photos02View.php');
} else if ($_GET['n']==3){
    require('view/photos03View.php');
} else if ($_GET['n']==4){
    require('view/photos04View.php');
}