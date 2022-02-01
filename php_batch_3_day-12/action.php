<?php
require_once 'vendor/autoload.php';
use App\classes\calculator;

//$calculator = new calculator($_POST);
////$calculator->index();
//$result = $calculator->index();
//include 'index.php';



if(isset($_POST['operator']))
{
    $calculator = new calculator($_POST);
//$calculator->index();
    $result = $calculator->index();
    include 'index.php';

}
else
{
    header('Location: index.php');
}

