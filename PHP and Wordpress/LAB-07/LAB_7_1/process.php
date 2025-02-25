<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);

    $errors = [];

    // Name validation: only letters and spaces
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
    {
        $errors[] = "Name can only contain letters and spaces.";
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $errors[] = "Invalid email format.";
    }

    // Mobile number validation: exactly 10 digits
    if (!preg_match("/^[0-9]{10}$/", $mobile)) 
    {
        $errors[] = "Mobile number must be exactly 10 digits.";
    }

    // Display results
    if (empty($errors)) 
    {
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Mobile: $mobile</p>";
    } 
    else 
    {
        echo "<h3>Validation Errors:</h3><ul>";
        foreach ($errors as $error) 
        {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<br><a href='form.html'>Go Back</a>";
    }
}
?>
