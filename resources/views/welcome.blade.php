<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Weather App</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #F0F4F8;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .link {
            color: #1E40AF;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Welcome to Weather App</h1>
        <p>Click <a href="{{ route('weather') }}" class="link">here</a> to check the weather.</p>
    </div>
</body>
</html>
