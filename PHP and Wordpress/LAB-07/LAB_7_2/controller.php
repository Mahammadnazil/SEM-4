<?php
// Determine the request method
$method = $_SERVER['REQUEST_METHOD'];

// If the form was submitted with the GET button
if (isset($_GET['method']) && $_GET['method'] == 'GET') {
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $course = isset($_GET['course']) ? $_GET['course'] : '';
    $age = isset($_GET['age']) ? $_GET['age'] : '';

    echo "<h2>Data Retrieved Using GET Method:</h2>";
} 
// If the form was submitted with the POST button
elseif ($method == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';

    echo "<h2>Data Retrieved Using POST Method:</h2>";
}

// Using REQUEST (works for both GET and POST)
if (!empty($_REQUEST)) {
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : $name;
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : $email;
    $course = isset($_REQUEST['course']) ? $_REQUEST['course'] : $course;
    $age = isset($_REQUEST['age']) ? $_REQUEST['age'] : $age;
}

if (!empty($name) && !empty($email) && !empty($course) && !empty($age)) {
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Age:</strong> $age</p>";
} else {
    echo "<p>No data submitted.</p>";
}

echo "<br><a href='student_form.html'>Go Back to Form</a>";
?>
