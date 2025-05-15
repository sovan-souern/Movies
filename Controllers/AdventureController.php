<?php
require_once 'Models/HomeModel.php';
require_once 'BaseController.php';
class AdventureController extends BaseController
{
    function index(){
        // echo "1";
        require_once "Views/categories/adventure.php";
    }
   
}
