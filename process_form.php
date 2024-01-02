<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        echo "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        echo "Name: $name<br>";
    }

    // Validate email
    if (empty($_POST["email"])) {
        echo "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        echo "Email: $email<br>";
    }

    // Validate gender
    if (empty($_POST["gender"])) {
        echo "Please select a gender";
    } else {
        $selectedGenders = $_POST["gender"];
        echo "Gender: " . implode(", ", $selectedGenders) . "<br>";
    }

    // Validate comments
    $comments = htmlspecialchars($_POST["comments"]);
    echo "Comments: $comments<br>";

    // If all validations pass, you can proceed with further processing
    if (isset($name, $email, $selectedGenders, $comments)) {
        // Process the data, store in a database, send emails, etc.
        // Additional processing code can be added here
    }
}
?>
