<?php

session_start();
$email = $_POST["email"];
$password = $_POST["password"];

include 'db.php';

$query = "select * from accounts where email = '$email';";
$run = mysqli_query($connect, $query);
$runCount = mysqli_num_rows($run);

if ($runCount > 0) {
    while ($row = mysqli_fetch_assoc($run)) {
        $dbpassword = $row["password"];
    }
    if (password_verify($password, $dbpassword)) {
        $_SESSION["session_id"] = $email;
        header("location: dashboard.php?key=$dbpassword");
    } else {
?>
        <script>
            alert("Incorrect Password. Please try again with another password.");
            window.location = "login.php";
        </script>
    <?php
    }
    
    
} else {
?>
    <script>
        alert("You are not registered. Please create an account.");
        window.location = "signup.php";
    </script>
<?php
}



?>