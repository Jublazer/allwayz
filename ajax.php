<?php

if(isset($_POST['display'])){
    $mail = htmlspecialchars($_POST["username"]);
    $passwor = htmlspecialchars($_POST["password"]);
    $session_start();
    include('config.php');
    $sql = "SELECT email, password FROM users WHERE email = '$mail' AND password = '$passwor' LIMIT 1";
    $result = mysqli_query($con, $sql);

    // Associative array
    //$row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
        $_SESSION["user"] = $row["username"];
        $userId = $row["id"];
        jason_encode($raw);
    } else {
        echo "Invalid user please confirm your information. ";
    };

    mysqli_close($con);
};

if(isset($_POST["done"])){
    echo "it works oooh";
}

?>