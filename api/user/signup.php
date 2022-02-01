<?php
    include "../../config/db.php";
    include "../../config/base_url.php";
    if(isset($_POST["email"], 
             $_POST["full_name"], 
             $_POST["nickname"], 
             $_POST["password"], 
             $_POST["password2"]) && 
        strlen($_POST["email"]) > 0 && 
        strlen($_POST["full_name"]) > 0 && 
        strlen($_POST["nickname"]) > 0 && 
        strlen($_POST["password"]) > 0 && 
        strlen($_POST["password2"]) > 0
      ) {
          $email = $_POST["email"];
          $full_name = $_POST["full_name"];
          $nickname = $_POST["nickname"];
          $password = $_POST["password"];

        if($_POST["password"] != $_POST["password2"]) {
            header("Location: $BASE_URL/register.php?error=5");
            exit();
        }

        $prep = mysqli_prepare($con, "SELECT id FROM users WHERE email=? OR nickname=?");
        mysqli_stmt_bind_param($prep, "ss", $email, $nickname);
        mysqli_stmt_execute($prep);
        $query = mysqli_stmt_get_result($prep);

        if(mysqli_num_rows($query) > 0) {
            header("Location: $BASE_URL/register.php?error=6");
            exit();
        }


        $hash = sha1($password);
        $prep1 = mysqli_prepare($con, "INSERT INTO users (email, full_name, nickname, password) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($prep1, "ssss", $email, $full_name, $nickname, $hash);
        mysqli_stmt_execute($prep1);

        header("Location: $BASE_URL/login.php");

      } else {

        header("Location: $BASE_URL/register.php?error=4");

      }

?>