<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $username = trim( $_REQUEST['username']);
        $password = trim($_REQUEST['password']);
        $Email = trim($_REQUEST['email']);
        $phone = trim($_REQUEST['phone']);
        if($username == null || empty($password)|| $Email==null|| empty($phone))
        {
                echo"Null data found!";
                header('location: regstration.html');
        }
        else
            {echo"registration complete";
                $_SESSION["user"]=array($username,$password,$Email,$phone);
            }

    }

?>