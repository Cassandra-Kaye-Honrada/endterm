
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar .navbar-brand {
            color: white;
            font-size: 20px;
        }
        .navbar .nav-item .nav-link {
            color: white;
        }
        .navbar .nav-item .nav-link:hover {
            color: #0056b3;
        }
        .content {
            max-width: 800px;
            margin: 60px auto;
            padding: 40px;
        }
        h1 {
            font-size: 28px;
            color: #333;
            text-align: center;
        }
        .logout-btn {
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            display: block;
            text-decoration: none;
            width: 100%;
        }
        .logout-btn:hover {
            background-color: #0056b3;
        }
        .navbar .container {
            display: flex;
            justify-content: space-between;
        }
        .navbar .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a  href="#">Dashboard</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-link text-white">
                Logout
            </a>
        </div>
    </nav>

    <div class="content">
        <h1>Welcome, {{ Auth::user()->name }}!</h1>
    </div>

    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
        @csrf
    </form>

</body>
</html