<?php
    session_start();

    if(isset($_POST['submit']))
    {

        $username  =  $_REQUEST['username'];
        if($username == null ){
            echo "Null data found!";
        }
        else{
            echo "valid input";
        }
    }else
    {
        //echo "Invalid request!";
        header('location: lab4.html');
    }


    //print_r($_GET);
    //echo "Test";
?>