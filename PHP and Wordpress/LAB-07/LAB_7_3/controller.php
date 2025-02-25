<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name   = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $course = trim($_POST['course']);
    $age    = trim($_POST['age']);
    $mobile = trim($_POST['mobile']);

    $errors = []; // Array to store validation errors

    // Name Validation: Only letters and spaces allowed
    if (empty($name) || !preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Name can only contain letters and spaces.";
    }

    // Email Validation: Must be a valid email format
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Course Validation: Should not be empty
    if (empty($course)) {
        $errors[] = "Course field cannot be empty.";
    }

    // Age Validation: Must be between 17 and 60
    if (empty($age) || $age < 17 || $age > 60) {
        $errors[] = "Age must be between 17 and 60.";
    }

    // Mobile Number Validation: Exactly 10 digits
    if (empty($mobile) || !preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors[] = "Mobile number must be exactly 10 digits.";
    }

    // If there are validation errors, redirect back to the form with errors
    if (!empty($errors)) {
        $errorString = urlencode(json_encode($errors));
        header("Location: student_form.html?errors=$errorString");
        exit();
    }

    // If validation passes, display the submitted data
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Mobile Number:</strong> $mobile</p>";

    echo "<br><a href='student_form.html'>Back to Form</a>";
} else {
    // Redirect to form if accessed directly
    header("Location: student_form.html");
    exit();
}
?>
