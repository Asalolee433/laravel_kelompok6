<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin-container {
            display: flex;
            min-height: 100vh;
            background-color: #ebd89b;
        }

        .admin-sidebar {
            width: 250px;
            background-color: #d4af37;
            padding: 20px;
        }

        .admin-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .admin-nav a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }

        .admin-nav a:hover {
            background-color: #e2e6ea;
        }

        .admin-content {
            flex-grow: 1;
            padding: 20px;
        }

        .admin-dashboard {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .admin-dashboard-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .dashboard-content {
            margin-top: 20px;
        }
        .dashboard-item {
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .dashboard-title {
            display: flex;
            flex-direction: column;
            font-size: 1.25rem;
            font-weight: bold;
        }
        .dashboard-title a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #b3b3b3;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .dashboard-title a:hover {
            background-color: #d4af37;
        }
    </style>

</head>
<body>
    
<x-app-layout>
    <div class="admin-container flex">

        <aside class="admin-sidebar">
            <div class="admin-header">
                Admin
            </div>

            <nav class="admin-nav mt-4">
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg bg-gray-200 font-semibold text-gray-900">
                    Dashboard
                </a>

                <hr class="my-4">

                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100">
                    Settings
                </a>
            </nav>
        </aside>
        
        <div class="admin-content">
            <div class="admin-dashboard">
                <div class="admin-dashboard-header mb-6">
                    <div class="admin-dashboard-title">
                        {{ __("You're log in as admin") }}
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-content">
                <div class="dashboard-content">
                    <div class="dashboard-item">
                            <div class="dashboard-title">
                                @foreach($jadwal as $item)
                                <p>{{ $item->nama_hari }}</p>
                                <p>{{ $item->status }}</p>
                                <p>
                                    {{ $item->tanggal }} <br>
                                    {{ $item->jam_mulai }} - {{ $item->jam_selesai }}
                                </p>
                                <a href="{{ route('dashboard.edit', $item->id) }}">Edit</a>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
    </x-app-layout>

    </body>
</html>

