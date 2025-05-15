<?php
require_once 'Models/HomeModel.php';
require_once 'BaseController.php';
class SignInController extends BaseController
{
    function index(){
        // echo "1";
        require_once "Views/Authentication/signin.php";
    }
   
}
