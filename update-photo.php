<?php

    require_once './edit-photo.php';
    $photo = new photo();
    $oldPhotoName = $photo->getName();
    //This is the directory where images will be saved
    $target = "uploads/";
    $target = $target . basename( $_FILES['photo']['name']);
    $pic=($_FILES['photo']['name']);
    $name = $_FILES['photo']['name'];
    $title = $_POST['photoTitle'];
    $description = $_POST['photoDescription'];
    $date = $_POST['date'];
    $id = $_POST['id'];
    
    echo "<script>alert('$name');</script>";
    echo "<script>alert('$title');</script>";
    //For setting uploads directory
    $path = 'uploads';
    if ( !is_dir($path)) {
        mkdir($path);
    }
    //Writes the photo to the server
        require_once 'connect.php';

        
        if($oldPhotoName != $name)
        {     
            if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {   
                $query = sprintf("UPDATE sliderphotos SET name='%s', title='%s', description='%s', date='%s' WHERE id='%s'",
                    mysql_real_escape_string($name),
                    mysql_real_escape_string($title),
                    mysql_real_escape_string($description),
                    mysql_real_escape_string($date),
                    mysql_real_escape_string($id));
                mysql_query($query) or die(mysql_error());
                header("Location: ./slider.php");
                echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
            }
            else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        else {      
            $query = sprintf("UPDATE sliderphotos SET title='%s', description='%s', date='%s' WHERE id='%s'",
                                mysql_real_escape_string($title),
                                mysql_real_escape_string($description),
                                mysql_real_escape_string($date),
                                mysql_real_escape_string($id));

            //Writes the information to the database
            mysql_query($query) or die(mysql_error());
            //Tells you if its all ok
            header("Location: ./slider.php");        
        }
?>