<?php
session_start();

$email = "admin@gmail.com";
$pass = "admin";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'], $_POST['pass']) && $_POST['email'] === $email && $_POST['pass'] === $pass) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black bg-opacity-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <!-- Logo Section -->
        <div class="flex justify-center mb-6">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQGMzjPb5FeLSw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1707043531898?e=1741219200&v=beta&t=8WDY0Y893tK3-IWwEMW1qeDlf3j7oOszddKPqlSn5P0" alt="Admin Logo" class="w-20 h-20 rounded-full">
        </div>
        <!-- Title -->
        <h2 class="text-2xl font-bold text-center mb-4 text-gray-700">Admin Login</h2>
        <!-- Login Form -->
        <form action="" method="post" class="space-y-4">
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-gray-600 font-medium">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    placeholder="Enter your email" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300 focus:outline-none"
                    required>
            </div>
            <!-- Password Input -->
            <div>
                <label for="pass" class="block text-gray-600 font-medium">Password</label>
                <input 
                    type="password" 
                    name="pass" 
                    id="pass" 
                    placeholder="Enter your password" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300 focus:outline-none"
                    required>
            </div>
            <!-- Submit Button -->
            <div>
                <input 
                    type="submit" 
                    value="Login" 
                    class="w-full bg-blue-500 text-white rounded-lg p-2 hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
