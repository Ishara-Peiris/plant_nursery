<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Register Page</title>
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

        /* Register Container */
        .register-container {
            background: rgba(255, 255, 255, 0.3); /* Semi-transparent white */
            backdrop-filter: blur(15px); /* Apply a blur effect */
            -webkit-backdrop-filter: blur(15px); /* Safari compatibility */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            padding: 60px 50px; /* Inner spacing */
            width: 650px;
            height: 800px; /* Form dimensions */
            max-width: 90%; /* Responsive width */
            margin: 5% auto; /* Center alignment */
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5); /* Optional: subtle border */
        }

        /* Logo Styling */
        .register-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }

        /* Register Title */
        .register-title {
            font-size: 2.2rem; /* Increased size */
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        /* Form Fields */
        .register-form .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            background: #f9f9f9;
        }

        .register-form .form-group label {
            background: #ddd;
            padding: 15px 20px;
            color: #555;
            font-size: 1.3rem; /* Increased size */
            border-right: 1px solid #ccc;
        }

        .register-form .form-group input {
            border: none;
            outline: none;
            padding: 15px;
            flex: 1;
            font-size: 1.2rem; /* Increased size */
            color: #333;
        }

        .register-form .form-group input::placeholder {
            color: #999;
        }

        /* Terms Checkbox */
        .terms {
            margin-bottom: 20px;
            font-size: 1.1rem; /* Increased size */
        }

        .terms a {
            color: #007bff;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        /* Buttons */
        .register-button {
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

        .register-button:hover {
            background: #218838;
        }

        .login-text {
            margin-top: 20px;
            font-size: 1.1rem; /* Increased size */
            color: #333;
        }

        .login-text a {
            color: #007bff;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="background">
        <img src="{{ asset('img/core-img/homebg.jpg') }}" alt="Background Image" class="bg-img">
    </div>
    <div class="register-container">
        <img src="{{ asset('img/core-img/b3.png') }}" alt="Logo" class="register-logo">
        <h2 class="register-title">Register</h2>
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <div class="form-group">
                <label for="name"><i class="fa fa-user"></i></label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter your name" />
            </div>

            <div class="form-group">
                <label for="phone"><i class="fa fa-phone"></i></label>
                <input id="phone" type="number" name="phone" :value="old('phone')" required placeholder="Enter your phone number" />
            </div>

            <div class="form-group">
                <label for="address"><i class="fa fa-home"></i></label>
                <input id="address" type="text" name="address" :value="old('address')" required placeholder="Enter your address" />
            </div>

            <div class="form-group">
                <label for="email"><i class="fa fa-envelope"></i></label>
                <input id="email" type="email" name="email" :value="old('email')" required placeholder="Enter your email" />
            </div>

            <div class="form-group">
                <label for="password"><i class="fa fa-lock"></i></label>
                <input id="password" type="password" name="password" required placeholder="Enter your password" />
            </div>

            <div class="form-group">
                <label for="password_confirmation"><i class="fa fa-lock"></i></label>
                <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm your password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="terms">
                    <x-checkbox name="terms" id="terms" required />
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                    ]) !!}
                </div>
            @endif

            <button type="submit" class="register-button">Register</button>

            <p class="login-text">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
        </form>
    </div>
</body>
</html>
