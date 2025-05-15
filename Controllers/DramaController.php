<?php
require_once 'Models/HomeModel.php';
require_once 'BaseController.php';
class DramaController extends BaseController
{
    function index(){
        // echo "1";
        require_once "Views/Categories/drama.php";
    }
   
}
