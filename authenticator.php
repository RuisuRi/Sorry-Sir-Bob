<?php
session_start(); // Start session before accessing session variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $errorMessage = "";

    // Users
    $validUsers = [
        ['username' => 'adminHexel', 'password' => 'Hexel123'],
        ['username' => 'adminJarrod', 'password' => 'TipaklongGaming'],
        ['username' => 'adminAeon', 'password' => 'Relevancesyndrome96']
    ];

    $validUser = false;
    foreach ($validUsers as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $validUser = true;
            break;
        }
    }

    if ($validUser) {
        // On successful login
        $_SESSION['username'] = $username; // Store username in session
        $errorMessage = 'Login Success!';
        // Redirect to the home page
        header("Location: front-page.html");
        exit();
    } else {
        // On fail
        $errorMessage = 'Invalid username or password.';
    }

    echo $errorMessage; // Output error message
}

// Content based on username
function resume_check(){
$storedUsername = isset($_SESSION['username']) ? $_SESSION['username'] : "";

$content = "";
if ($storedUsername === 'adminJarrod') {
    header("Location: Resumes/Jarrod/jarrod_resume.html");
} else if ($storedUsername === 'adminAeon') {
    header("Location: Resumes/Aeon/Aeon_Resume.html");
} else if ($storedUsername === 'adminHexel') {
    header("Location: Resumes/Hexel/hexel_resume.html");
}

echo $content; // Output content
}
?>