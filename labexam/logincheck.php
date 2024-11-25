<?php
    session_start();
    if(isset($_POST['submit']))
    {
    header('location: registration.html');
    }
    if(isset($_POST['submit']))
    {
        $username=trim($_REQUEST['username']);
        $password=trim($_REQUEST['password']);
        if($username==null||empty($password)){
            
        }
    }
?>
