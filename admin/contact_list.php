<?php
// Database Configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profile";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Search
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Fetch Contacts
$sql = "SELECT * FROM contacts WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR message LIKE '%$search%' ORDER BY created_at DESC";
$result = $conn->query($sql);

// Handle CRUD Operations
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'delete') {
        $id = $_POST['id'];
        $conn->query("DELETE FROM contacts WHERE id = $id");
    } elseif ($action === 'edit') {
        $id = $_POST['id'];
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $message = $conn->real_escape_string($_POST['message']);
        $conn->query("UPDATE contacts SET name = '$name', email = '$email', message = '$message' WHERE id = $id");
    } elseif ($action === 'add') {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $message = $conn->real_escape_string($_POST['message']);
        $conn->query("INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')");
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<?php
// Simulated placeholder data for $result (Replace with your actual database query result)
$search = $_POST['search'] ?? '';
$action = $_POST['action'] ?? '';
$result = (object)[
    'num_rows' => 0,
    'fetch_assoc' => fn() => null
]; // Replace this with actual database query results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans min-h-screen">

<div class="max-w-4xl mx-auto p-6 space-y-8">
    <h1 class="text-3xl font-bold text-indigo-600 text-center">Contact List</h1>

    <!-- Search Bar -->
    <form method="POST" class="flex gap-4">
        <input type="text" name="search" value="<?= htmlspecialchars($search); ?>" placeholder="Search contacts"
               class="w-full p-3 border border-gray-300 rounded focus:ring-indigo-500">
        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">Search</button>
    </form>

    <!-- Add Contact Form -->
    <form method="POST" class="bg-white p-6 shadow rounded space-y-4">
        <h2 class="text-xl font-semibold">Add Contact</h2>
        <input type="hidden" name="action" value="add">
        <input type="text" name="name" placeholder="Name" class="w-full p-3 border border-gray-300 rounded" required>
        <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded" required>
        <textarea name="message" placeholder="Message" class="w-full p-3 border border-gray-300 rounded" required></textarea>
        <button type="submit" class="w-full py-2 bg-green-500 text-white rounded">Add</button>
    </form>

    <!-- Contact Table -->
    <div class="bg-white shadow rounded">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Message</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="border-t">
                        <td class="p-3"><?= htmlspecialchars($row['name']); ?></td>
                        <td class="p-3"><?= htmlspecialchars($row['email']); ?></td>
                        <td class="p-3"><?= htmlspecialchars($row['message']); ?></td>
                        <td class="p-3 flex gap-2">
                            <!-- Edit Form -->
                            <form method="POST" class="inline">
                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</button>
                            </form>

                            <!-- Delete Form -->
                            <form method="POST" class="inline" onsubmit="return confirm('Delete this contact?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center p-4">No contacts found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
