<?php
    include "../../config/db.php";
    include "../../config/base_url.php";
    session_start();

    if(isset($_GET["id"])) {
        mysqli_query($con, "DELETE FROM blogs WHERE id=".$_GET["id"]. " AND author_id=".$_SESSION["user_id"]);
        header("Location: $BASE_URL/profile.php?nickname=".$_SESSION["nickname"]);
    } else {
        header("Location: $BASE_URL/profile.php?error=1&nickname=".$_SESSION["nickname"]);
    }
?>