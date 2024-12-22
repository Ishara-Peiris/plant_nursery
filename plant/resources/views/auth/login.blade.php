<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Login Page</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Background Image */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .bg-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Login Container */
        .login-container {
            background: rgba(255, 255, 255, 0.3); /* Semi-transparent white */
            backdrop-filter: blur(15px); /* Apply a blur effect */
            -webkit-backdrop-filter: blur(15px); /* Safari compatibility */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            padding: 60px 50px; /* Inner spacing */
            width: 650px;
            height: 700px; /* Form dimensions */
            max-width: 90%; /* Responsive width */
            margin: 5% auto; /* Center alignment */
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5); /* Optional: subtle border */
        }

        /* Logo Styling */
        .login-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }

        /* Login Title */
        .login-title {
            font-size: 2.2rem; /* Increased size */
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        /* Login Form */
        .login-form .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            background: #f9f9f9;
        }

        .login-form .form-group label {
            background: #ddd;
            padding: 15px 20px;
            color: #555;
            font-size: 1.3rem; /* Increased size */
            border-right: 1px solid #ccc;
        }

        .login-form .form-group input {
            border: none;
            outline: none;
            padding: 15px;
            flex: 1;
            font-size: 1.2rem; /* Increased size */
            color: #333;
        }

        .login-form .form-group input::placeholder {
            color: #999;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.1rem; /* Increased size */
        }

        .options .forgot-password {
            color: #007bff;
            text-decoration: none;
        }

        .options .forgot-password:hover {
            text-decoration: underline;
        }

        /* Buttons */
        .login-button {
            width: 100%;
            padding: 15px;
            background: #06402B; /* Green color */
            color: white;
            font-size: 1.3rem; /* Increased size */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-button:hover {
            background: #218838;
        }

        .register-text {
            margin-top: 20px;
            font-size: 1.1rem; /* Increased size */
            color: #333;
        }

        .register-text a {
            color: #007bff;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="background">
        <img src="{{ asset('img/core-img/homebg.jpg') }}" alt="Background Image" class="bg-img">
    </div>
    <div class="login-container">
        <img src="{{ asset('img/core-img/b3.png') }}" alt="Logo" class="login-logo">
        <h2 class="login-title">Login</h2>
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email"><i class="fa fa-user"></i></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fa fa-lock"></i></label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="options">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot password?</a>
            </div>
            <button type="submit" class="login-button">Login</button>
            <p class="register-text">
                Don't have an account? <a href="{{ route('register') }}">Register</a>
            </p>
        </form>
    </div>
</body>
</html>
