<?php
    class authController extends Controller {

    public static function handleLogin(){
        
        if (!isset($_SESSION['id'])) {

            header("location: " . BASE_URL."login");
            exit();
        }
    }
}