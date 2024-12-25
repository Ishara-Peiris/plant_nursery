

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discussion Forum</title>
    <style>

        body {
            background-image: url("{{ asset('img/bg-img/forumbg.jpg') }}");

            background-repeat: no-repeat;
            background-position: center 2%;
            background-size: cover;
            height: 100%;
            width: 100%;
        }
        .header-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .header-container h1 {
            font-size: 50px;
            color:#02B875;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="row">

    </div>
    <div class="container">
        <div class="header-container">
            <img src="{{ asset('Assets/images/icon.jpeg') }}" width="75px" alt="">
            <h1>Green Talk: Your Gardening Community</h1>
        </div>
        <hr style="margin-top: 20px; border-color: #02B875; border-width:10px">

        <!-- Add a button to navigate to the create post page -->
       {{--<a href="{{ route('discussion.create') }}" class="btn btn-primary">Create New Post</a>
        </div>
--}} <div class="mb-4">

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title" style="color: #02B875">{{ $post->title }}</h2>
                    <p class="card-text" style="color: #02B875">{{ $post->description }}</p>
                    <livewire:comments :model="$post"/>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
