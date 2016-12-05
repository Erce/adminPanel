<?php

//This is the directory where images will be saved
$target = "./";
$target = $target . basename( $_FILES['photo']['name']);
echo $target;
//This gets all the other information from the form
$name= "erce";//$_POST['nameMember'];
//$bandMember=$_POST['bandMember'];
$pic=($_FILES['photo']['name']);
//$about=$_POST['aboutMember'];
//$bands=$_POST['otherBands'];


// Connects to your Database

mysql_connect("localhost", "root", "") or die(mysql_error()) ;
mysql_select_db("users") or die(mysql_error()) ;

//Writes the information to the database
mysql_query("INSERT INTO products (name,photo)
VALUES ('$name', '$pic')") ;

//Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

//Tells you if its all ok
header("Location: ./products.php");
echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
?>