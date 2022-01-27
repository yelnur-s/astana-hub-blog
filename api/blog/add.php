<?php
    include "../../config/db.php";
    include "../../config/base_url.php";

    if(isset($_POST["title"]) && 
        strlen($_POST["title"])> 0 && 
        isset($_POST["description"]) && 
        strlen($_POST["description"])> 0) {
            $title = $_POST["title"];
            $desc = $_POST["description"];
            
            // if(isset($_FILES["image"]) && isset($_FILES["image"]["name"]) && strlen($_FILES["image"]["name"])> 0) {


            // }


            mysqli_query($con, "INSERT INTO blogs (id, title, description, date) VALUES (NULL, \"$title\", \"$desc\", NOW())");
            header("Location: $BASE_URL/profile.php");
    } else {
        header("Location: $BASE_URL/newblog.php");
    }
?>