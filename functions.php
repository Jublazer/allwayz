<?php

// function to redirect

function redirect(string $uri) {
    header('Location: ' . $uri);
    exit();
}
// include("config.php");
// function for control of orders database

// functions for control of users database
$errors = [];
if(isset($_POST['register'])){
    $firstname = htmlspecialchars($_POST['fname']);
    $lasname = htmlspecialchars($_POST['lname']);
    $mail = htmlspecialchars($_POST['email']);
    $uname = htmlspecialchars($_POST['username']);
    $ads = htmlspecialchars($_POST['address']);
    $phn = htmlspecialchars($_POST['phone']);
    $passw = htmlspecialchars($_POST['psw']);
    $passw1 = htmlspecialchars($_POST['psw1']);
    $utype = htmlspecialchars($_POST['usertype']);

if(!empty($firstname) && !empty($lasname) && !empty($mail) && !empty($uname) && !empty($ads) && !empty($phn) && !empty($passw) && !empty($passw1)){
   $_SESSION['success'] =  "Login Successful!";
        if($passw !== $passw1){
            // function to redirect
            redirect("login.php"); 
            array_push($errors,"Password do not match");
        }

        $reg_active = true;
        include("config.php");
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO users (fname, lname, username, email, phone, address, password, usertype)
            VALUES ('$firstname', '$lasname', '$uname', '$mail', '$phn', '$ads', '$passw', '$utype')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['success'] =  "New record created successfully";
            } else {
                array_push($errors,"Error: " . $sql . "<br>" . mysqli_error($conn));
            }

            mysqli_close($conn);

    }
    else{
    
        array_push($errors,"Sorry filed cant be empty");
        $reg_active = false;
    }
}




// functions for control of subscribers database




// functions for control of login
if(isset($_POST['login'])){
        $user = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);
        $errors = [];
    if(!empty($user) && !empty($pass)){
       $_SESSION['success'] =  "Login Successful!";
    }
    else{
        array_push($errors,"Sorry filed cant be empty");
    };
}


// Functions for Tracking ID Form
if(isset($_POST['track'])){
    $trackSuccess = [];
    $trackD = $_POST['trackID'];
    array_push($trackSuccess,$trackD);
}




























// to display error
// function errors_view(){
    
//     if(!empty($errors)){
//         foreach($errors as $error){
//             echo "<div class='alert alert-danger alert-dismissible fade show w-50'>.$error.</div>";
//         }
//     }
// }

// to display Success Messages
// function success_view(){
    
//     if(isset($_SESSION['success'])){
                
//         echo "<div class='alert alert-success alert-dismissible fade show'>".$_SESSION['success']."</div>";
//         session_destroy($_SESSION['success']);
//     }
// }
?>