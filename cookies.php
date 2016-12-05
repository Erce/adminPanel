<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function CheckCookieLogin() {
    $uname = $_COOKIE['uname']; 
    if (!empty($uname)) {   
        $sql = "SELECT * FROM `users` WHERE `login_session`='$uname'";
        $_SESSION['user_is_loggedin'] = 1;
        $_SESSION['cookie'] = $uname;
        // reset expiry date
        setcookie("uname",$uname,time()+3600*24*365,'/','.yoursite.com');
    }
}

if(!isset($_SESSION['cookie']) && empty($_SESSION['user_is_loggedin'])) {
    CheckCookieLogin();
}