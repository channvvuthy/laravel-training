<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #575757;
        }

        /* Main content styling */
        .main-content {
            margin-left: 250px;
            /* Width of the sidebar */
            padding: 20px;
            width: calc(100% - 250px);
            display: flex;
            flex-direction: column;
        }

        /* Header styling */
        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px 0;
        }

        /* Logout button styling */
        .logout-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        /* Content styling */
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex-grow: 1;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>{{auth()->user()->email}}</h2>
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li><a href="#">Author</a></li>
            <li><a href="#">Editor</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <a href="/logout" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <h1>Welcome to the Dashboard</h1>
            <p>This is your dashboard. You can put your main content here.</p>
        </div>
    </div>
</body>
</html>
