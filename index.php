<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = strip_tags(trim($_POST["name"]));
    $email = strip_tags(trim($_POST["email"]));
    $message = strip_tags(trim($_POST["message"]));

    // Prepare the data string to write to the file
    $data = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "\n---\n";

    // File to write
    $file = "contacts.txt";

    // Write data to file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect or inform the user
    echo "Thank you for your submission!";
} else {
    // Not a POST request, redirect to form
    header("Location: contact.html");
}

?>
