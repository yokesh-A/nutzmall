<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<?php 
$page = preg_split('#/#', $_SERVER['REQUEST_URI'], -1, PREG_SPLIT_NO_EMPTY);
$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/';
if(isset($page[0])){
    switch($page[0]){
        case 'floor': include "floor.php";
        break;
        case 'stall': include "stall.php";
        break;
    }
}else{
    include "city.php";
}
?>