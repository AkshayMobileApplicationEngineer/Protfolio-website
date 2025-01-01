<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-blue-600 text-white w-64 h-screen flex flex-col">
            <div class="flex flex-col items-center space-y-2 py-6">
                <img src="https://media.licdn.com/dms/image/v2/D5603AQGMzjPb5FeLSw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1707043531898?e=1741219200&v=beta&t=8WDY0Y893tK3-IWwEMW1qeDlf3j7oOszddKPqlSn5P0" alt="Profile" class="w-16 h-16 rounded-full">
                <h2 class="text-xl font-semibold">Akshay Kumar Prajapati</h2>
                <p class="text-sm">meliveakshay@gmail.com</p>
            </div>
            <nav class="flex-1 mt-6 space-y-4">
                <a href="#" class="block text-gray-200 hover:text-white hover:bg-blue-700 rounded-lg p-2">Dashboard</a>
                <a href="#" class="block text-gray-200 hover:text-white hover:bg-blue-700 rounded-lg p-2">Profile</a>
                <a href="#" class="block text-gray-200 hover:text-white hover:bg-blue-700 rounded-lg p-2">Settings</a>
                <a href="#" class="block text-gray-200 hover:text-white hover:bg-blue-700 rounded-lg p-2 contact-list-link">Messages</a>
                <a href="logout.php" id="logout" class="block text-gray-200 hover:text-white hover:bg-blue-700 rounded-lg p-2">Logout</a>
            </nav>
            <div class="mt-6 pt-6 border-t border-gray-700 text-center">
                <p class="text-sm text-gray-400">© 2024 Panlogic Solution Team.<br> All rights reserved.</p>
            </div>

            <script>
                const logoutLink = document.getElementById('logout');
                logoutLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    <?php session_destroy(); ?>
                    window.location.href = 'index.php';
                });
            </script>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 main-content">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-700">Dashboard</h1>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Item</button>
            </header>
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold text-gray-800">Total Users</h2>
                    <p class="mt-4 text-3xl font-semibold text-blue-600">1,234</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold text-gray-800">Revenue</h2>
                    <p class="mt-4 text-3xl font-semibold text-green-600">$12,345</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold text-gray-800">Pending Orders</h2>
                    <p class="mt-4 text-3xl font-semibold text-red-600">27</p>
                </div>
            </section>
            <section class="mt-6">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Recent Activities</h2>
                <ul class="space-y-4">
                    <li class="bg-white p-4 rounded-lg shadow">
                        <p class="text-gray-700">User <strong>John Doe</strong> placed an order.</p>
                        <span class="text-sm text-gray-500">5 mins ago</span>
                    </li>
                    <li class="bg-white p-4 rounded-lg shadow">
                        <p class="text-gray-700">User <strong>Jane Smith</strong> updated their profile.</p>
                        <span class="text-sm text-gray-500">10 mins ago</span>
                    </li>
                </ul>
            </section>
        </main>
    </div>

    <script>
        const contactListLinks = document.querySelectorAll('.contact-list-link');
        const mainContent = document.querySelector('.main-content');

        function loadContactList(event) {
            event.preventDefault();
            fetch('contact_list.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Failed to load content');
                    }
                    return response.text();
                })
                .then(data => {
                    mainContent.innerHTML = data;
                })
                .catch(error => {
                    alert('Error loading content: ' + error.message);
                });
        }

        contactListLinks.forEach(link => link.addEventListener('click', loadContactList));
    </script>
</body>
</html>
