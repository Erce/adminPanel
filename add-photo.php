<?php

    //This is the directory where images will be saved
    $target = "uploads/";
    $target = $target . basename( $_FILES['photo']['name']);
    $pic=($_FILES['photo']['name']);
    $name = $_FILES['photo']['name'];
    $title = $_POST['photoTitle'];
    $description = $_POST['photoDescription'];
    $date = $_POST['date'];

    //For setting uploads directory
    $path = 'uploads';
    if ( !is_dir($path)) {
        mkdir($path);
    }
    //Writes the photo to the server
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
    {     
        require_once 'connect.php';

        $query = sprintf("INSERT INTO sliderphotos (name,title,description,date) VALUES ('%s', '%s', '%s', '%s')",
                mysql_real_escape_string($name),
                mysql_real_escape_string($title),
                mysql_real_escape_string($description),
                mysql_real_escape_string($date));

        //Writes the information to the database
        mysql_query($query) or die(mysql_error());
        //Tells you if its all ok
        header("Location: ./slider.php");
        echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
    }
    else {
        //Gives and error if its not
        echo "Sorry, there was a problem uploading your file.";
    }


?>