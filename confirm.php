<!--Joseph Clark
October 25, 2026!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <h1>Building a Dynamic Form with PHP</h1>
    <p>Joseph Clark</p>
    <p>October 25, 2026</p>

<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Remove extra spaces from the beginning and end of the form values
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    // Check for and remove illegal characters in the email address
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Checks to see if any required fields are empty
if (empty($name) || empty($email) || empty($message)) {
    $feedback = "Error: All fields are required.";
    $messageClass = "error";

    } else {
        $feedback = "Thank you, ".$name."! Submission success.";
        $messageClass = "success";
    }
// Displays feedback message(s)
echo "<div class='".$messageClass."'>";
echo "<p>".$feedback."</p>";
echo "</div>";
// Displays submitted form values
echo "<p>Name: ".$name."</p>";
echo "<p>Email: ".$email."</p>";
echo "<p>Message: ".$message."</p>";

}

?>
    
</body>
</html>