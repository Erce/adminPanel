<?php

    //This is the directory where images will be saved
    $id = $_POST['id'];

    require_once 'connect.php';
    echo "<script>alert('.$id.');</script>";
    $query = sprintf("DELETE FROM sliderphotos WHERE id=%s",
            mysql_real_escape_string($id));

    //Writes the information to the database
    mysql_query($query) or die(mysql_error());
    //Tells you if its all ok
    //header("Location: ./slider.php");
