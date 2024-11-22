<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('storage/images/log.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    @include('layouts.header')

    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="bg-white w-full md:w-64 h-screen p-4 shadow-lg">
            <h2 class="text-2xl font-bold text-green-700 mb-6">Dashboard</h2>
            <nav class="space-y-4">
                <a href="{{ route('dashboard.overview') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Overview</a>
                <a href="{{ route('dashboard.students') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Students</a>
                <a href="{{ route('dashboard.professors') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Professors</a>
                <a href="{{ route('dashboard.classes') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Classes & Groups</a>
                <a href="{{ route('dashboard.subjects') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Subjects</a>
                <a href="{{ route('dashboard.reports') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Reports</a>
                <a href="{{ route('dashboard.settings') }}" class="block py-2 px-4 text-gray-700 hover:bg-green-100 rounded">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-green-700 mb-4">Admin Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Stats Cards -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-700">Total Students</h3>
                    <p class="text-3xl font-bold text-green-700">1,234</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-700">Total Professors</h3>
                    <p class="text-3xl font-bold text-green-700">56</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-700">Classes</h3>
                    <p class="text-3xl font-bold text-green-700">23</p>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="mt-8 bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Recent Activity</h2>
                <ul class="space-y-4">
                    <li class="flex justify-between">
                        <span>New student registered</span>
                        <span class="text-gray-500 text-sm">10 mins ago</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Professor assignment updated</span>
                        <span class="text-gray-500 text-sm">30 mins ago</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Group details modified</span>
                        <span class="text-gray-500 text-sm">1 hour ago</span>
                    </li>
                </ul>
            </div>
        </main>
    </div>

    @include('layouts.footer')

</body>
</html>
