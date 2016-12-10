<?php

    require_once 'connect.php';


    $query = sprintf("SELECT * FROM sliderphotos");

    //Writes the information to the database
    $retval = mysql_query($query) or die(mysql_error());

    while($row = mysql_fetch_array($retval)) {
        echo "<div class='col-lg-2 col-md-2 col-xs-4 col-xsl-5 sliderphotobox' id='sliderphoto".$row['id']."'>".
             "<img class='' height='100%' width='100%' src='uploads/".$row['name']."'>".
             "</div>";          
    }