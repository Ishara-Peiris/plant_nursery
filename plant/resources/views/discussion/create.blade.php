<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Discussion Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url("{{ asset('img/bg-img/formbg.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card-container {
            display: flex;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 1200px;
            width: 90%;
            height: 70vh;
            position: relative;
        }
        .image-container {
            flex: 1;
            background: url("{{ asset('img/core-img/aa1.png') }}") no-repeat center center;
            background-size: cover;
            background-size: contain;

        }
        .form-container {
            flex: 2;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-container h1 {
            color: yellow;
            font-size: 38px;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: bold;
            color: white;
        }
        .form-control {
            border: none;
            border-radius: 10px;
            background: rgba(239, 245, 165, 0.8);
            padding: 12px;
            font-size: 1rem;
        }
        .form-control:focus {
            border-color: #66bb6a;
            box-shadow: 0 0 0 0.2rem rgba(102, 187, 106, 0.25);
            outline: none;
        }
        textarea.form-control {
            resize: vertical;
        }
        .btn-color {
            color: #0e0d0d;
            background-color: #e4f128;
            border-color: #a3f8a7;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-weight: bold;
            width: 300px;
        }
        .btn-color:hover {
            background-color: #43a047;
            border-color: #43a047;
            transform: scale(1.05);
        }
        .nav-bar {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 15px;
            border-radius: 10px;
            padding: 10px 50px;
        }
        .nav-bar a {
            color: white;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
            margin-left: 30px;
        }
        .nav-bar a:hover {
            color: #66bb6a;
        }
    </style>
</head>
<body>
    <div class="card-container">
        <div class="image-container"></div>
        <div class="form-container">
            <!-- Transparent Navbar -->
            <div class="nav-bar">
                <a href="{{ route('forum') }}">View Forum</a>
                <a href="{{ route('discussion.create') }}">Create Post</a>
                <a href="{{ route('dashboard') }}">Go to Dashboard</a>
            </div>

            <h1>Create a New Discussion Post</h1>

            <!-- Display success message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form to create a new discussion post -->
            <form action="{{ route('discussion.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Enter the title of your discussion">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Enter the description of your discussion"></textarea>
                </div>
                <button type="submit" class="btn btn-color">Create Post</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
