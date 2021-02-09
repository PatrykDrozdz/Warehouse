<?php 

    session_start(); 

    if((isset($_SESSION['skladowisko'])) && 
            ($_SESSION['skladowisko']==true)){
        header('Location: mainpanel.php');
        exit();//opuszczanie skryptu
    }

    include 'classes/componentsClassMainPage.php';
    
    $getComponents = new componentsClassMainPage();
    
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    $getComponents->getHead();
    $getComponents->getMainPage();
    $getComponents->getFooter();