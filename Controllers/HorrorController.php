<?php
require_once 'Models/HomeModel.php';
require_once 'BaseController.php';
class HorrorController extends BaseController
{
    function index(){
        // echo "1";
        require_once "Views/Categories/horror.php";
    }
   
}
