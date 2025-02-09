<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white flex flex-col p-4">
        <h2 class="text-xl font-bold mb-4">User Panel</h2>
        <nav class="space-y-2">
            <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Dashboard</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Users</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Settings</a>
        </nav>
        <div class="mt-auto">
            <a href="/logout" class="block px-4 py-2 mt-6 bg-red-600 text-center rounded hover:bg-red-500">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Top Bar -->
        <div class="bg-white shadow-md p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">User Dashboard</h1>
            <span class="text-gray-600">Welcome, User</span>
        </div>

        <!-- Content -->
        <div class="flex-1 flex items-center justify-center">
            <h1 class="text-3xl">This is the <span class="text-red-500">User's</span> home</h1>
        </div>
    </div>
</body>

</html>