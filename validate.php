<?php

    define('INCLUDE_CHECK',true);

    require 'connect.php';
/* get the incoming ID and password hash */
$user = $_POST["username"];
$pass = sha1($_POST["password"]);

/* establish a connection with the database */
/*$server = mysql_connect("localhost", "root",
          "");*/

/* if a connection can not be established */
//if (!$server) {die(mysql_error());}
/* choosing the database */
//mysql_select_db("users", $server);
  
/* SQL statement to query the database */
$query = "SELECT id FROM users WHERE username = '$user'
         AND password = '$pass'";

/* query the database */
$result = mysql_query($query);

/* Allow access if a matching record was found, else deny access. */
if ($row = mysql_fetch_array($result)) {
  /* access granted */
  session_start();
  header("Cache-control: private");
  $_SESSION['user_is_loggedin'] = 1;

  if (isset($_POST['rememberMe']) && $_POST['rememberMe'] == '1') {
        $cookiehash = md5(sha1(username . user_ip));
        setcookie("uname",$cookiehash,time()+3600*24*365,'/','.localhost');
  }
  else {
        alert($_POST['rememberMe']);
  }

  $_SESSION["access"] = "granted";
  $_SESSION["userId"] = $row['id'];
  
  echo $row['id'];
  header("Location: ./secure.php");
} else {
  /* access denied &#8211; redirect back to login */
  header("Location: ./admin.php");
}
    
mysql_close($server);