<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <base href="/public">
    <style>

        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .font_size{
            font-size: 30px;
        }

        <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: #f4f4f4; /* Neutral background for the page */
    }

    .form-card {
        max-width: 600px;
        margin: 10px auto;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .form-card .card-background {
        background: url('img/bg-img/h24.jpg') no-repeat center center;
        background-size: cover;
        position: relative;
        padding: 20px;
    }

    .form-card .card-background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Dark overlay for better contrast */
        z-index: 1;
    }

    .form-card .form-area {
        position: relative;
        z-index: 2; /* Place content above the overlay */
    }

    .form-card h1 {
        text-align: center;
        font-size: 26px;
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
    }

    .form-card label {
        display: block;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #eaeaea;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
    }

    .form-card input,
    .form-card select {
        width: 100%;
        padding: 12px;
        font-size: 14px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: rgba(255, 255, 255, 0.9);
        color: #2c3e50;
    }

    .form-card input:focus,
    .form-card select:focus {
        outline: none;
        border-color: #5dade2;
        box-shadow: 0 0 6px rgba(93, 173, 226, 0.5);
    }

    .form-card input[type="submit"] {
        width: 100%;
        background: #3498db;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border: none;
        padding: 12px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .form-card input[type="submit"]:hover {
        background: #2980b9;
    }


    .btn-submit {
        display: inline-block;
        background-color: #2e7d32; /* Dark green */
        color: white;
        font-size: 16px;
        font-weight: bold;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        text-transform: uppercase;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .btn-submit:hover {
        background-color: #1b5e20; /* Darker green */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }

    .btn-submit:active {
        background-color: #43a047; /* Lighter green */
        transform: translateY(1px);
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
    }



        /* Center alignment */






        </style>
    @include('admin.css')


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

      <div class="main-panel">
        <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
   
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               {{session()->get('message')}}
            </div>
            @endif

            <div class="div_center">

                <div class="form-container">
                    <div class="form-card">
                        <div class="card-background">
                            <div class="form-area">
                                <h1>Update Product Here</h1>
                                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Product Title</label>
                                    <input type="text" name="title" placeholder="Enter product title" required="" value="{{$product->title}}">

                                    <label>Product Description</label>
                                    <input type="text" name="description" placeholder="Enter product description" required="" value="{{$product->description}}">

                                    <label>Price</label>
                                    <input type="number" name="price" placeholder="Enter product price" required="" value="{{$product->price}}">

                                    <label>Quantity</label>
                                    <input type="number" min="0" name="quantity" placeholder="Enter product quantity" required="" value="{{$product->quantity}}">

                                    <label>Discount Price</label>
                                    <input type="number" name="discount_price" placeholder="Enter discount price" value="{{$product->discount_price}}">

                                    <label>Category</label>
                                    <select name="catagory">
                                        <option value="" selected="">Add a Category here</option>
                                        @foreach($catagory as $catagory)
                                        <option value=" {{$catagory -> catagory_name}}"> {{$catagory -> catagory_name}}</option>
                                        @endforeach
                                    </select>

                                    <label>Image</label>
                                    <input type="file" name="image" required="">

                                    <input type="submit" value="Update Product" class="btn-submit">

                </div>
            </div>



    </div>
</div>

        <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>