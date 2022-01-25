<?php
    include "../../config/db.php";
    include "../../config/base_url.php";

    if(isset($_POST["title"]) && 
        strlen($_POST["title"])> 0 && 
        isset($_POST["description"]) && 
        strlen($_POST["description"])> 0 && 
        isset($_GET["id"])&& 
        strlen($_GET["id"])> 0) {
            $title = $_POST["title"];
            $desc = $_POST["description"];
            $id = $_GET["id"];
            $prep = mysqli_prepare($con, "UPDATE blogs SET title=?, description=? WHERE id=?");
            mysqli_stmt_bind_param($prep, "ssi", $title, $desc, $id);
            mysqi_stmt_execute($prep);

            header("Location: $BASE_URL/profile.php");
    } else {
        header("Location: $BASE_URL/update.php?id=$id&error=2");
    }
?>