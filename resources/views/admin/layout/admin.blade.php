<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Travel Point</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #1a5fb4;
            --secondary: #e95420;
            --accent: #2ec27e;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Sidebar Layout */
        .sidebar {
            background: linear-gradient(180deg, #2c3e50, #1a252f);
            color: white;
            width: 250px;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
        }

        .sidebar .logo {
            text-align: center;
            padding: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--accent);
        }

        .sidebar .nav-link {
            color: #ecf0f1;
            padding: 15px 20px;
            margin: 5px 0;
            border-left: 3px solid transparent;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.1);
            border-left-color: var(--accent);
            color: white;
        }

        /* Main Content Area */
        .main-wrapper {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .top-bar {
            background: white;
            padding: 15px 30px;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content {
            padding: 30px;
            min-height: calc(100vh - 80px);
        }

        /* Common Styles */
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            border: none;
        }

        .card-header {
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 15px 20px;
        }

        .btn-admin {
            background: linear-gradient(135deg, var(--primary), #0d4a9c);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-admin:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: white;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .badge-admin {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
<!-- Sidebar Layout -->
<div class="sidebar" >
    <div class="logo" onclick="">
        <i class="fas fa-plane" ></i>Travel Point
    </div>

    <nav class="nav flex-column">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>

        <a class="nav-link" href="{{route('trips.index')}}">
            <i class="fas fa-suitcase-rolling"></i> Trips Management
        </a>

        <a class="nav-link" href="{{route('destinations.index')}}">
            <i class="fas fa-suitcase-rolling"></i> destinations
        </a>


        <a class="nav-link" href="{{route('bookings')}}">
            <i class="fas fa-receipt"></i> Bookings Management
        </a>

        <a class="nav-link" href="">
            <i class="fas fa-users"></i> Users Management
        </a>

        <div class="mt-auto p-3">
            <a href="../frontend/home.html" class="btn btn-outline-light w-100 mb-2">
                <i class="fas fa-home"></i> Back to Website
            </a>
            <a href="../frontend/auth/login.html" class="btn btn-danger w-100">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </nav>
</div>

<!-- Main Content Wrapper -->
<div class="main-wrapper">
    <div class="top-bar">
        <h4 class="mb-0" style=" user-select: none">@yield('page-title')</h4>
        <div class="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    @yield('breadcrumb')
                </ol>
            </nav>
        </div>
    </div>

    <!-- Content Section -->
    <section class="content">
        @yield('content')
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Highlight active link
    document.addEventListener('DOMContentLoaded', function() {
        const currentPage = window.location.pathname.split('/').pop();
        const links = document.querySelectorAll('.nav-link');

        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href && href.includes(currentPage)) {
                link.classList.add('active');
            }
        });
    });
</script>
</body>
</html>
