<?php

include 'includedfiles.php';

 if(!isset($_SESSION['skladowisko'])){
        header('Location: index.php');
        exit();
    }

