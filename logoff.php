<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
        session_start();      
        if(isset($_GET['logoff']))
        {
            $_SESSION = array();
            session_destroy();

            header("Location: ./admin.php");

            exit;
        }
        else {
            header("Location: ./admin.php");
        }
           
