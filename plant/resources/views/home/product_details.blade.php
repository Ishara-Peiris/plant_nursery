<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="image/png">
      <title>Vijtha Plant Nursery</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
         .add-to-cart-btn {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-left: 10px;


         }

         .add-to-cart-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
         }

         .quantity-input {
            width: 100%;
            padding: 10px;
            border: 2px solid #bbf3b9;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
         }

         .quantity-input:focus {
            border-color: #28a745;
            outline: none;
         }

         .card-title {
            font-size: 28px;
         }

         .card-body h4,
         .card-body h5,
         .card-body p {
            font-size: 18px;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section starts -->
         @include('home.header')
         <!-- end header section -->

         <div class="container" style="margin-top: 30px;">
            <div class="row">
               <!-- Product Image -->
               <div class="col-md-6">
                  <div class="card" style="border: none;">
                     <img src="product/{{$product->image}}" class="card-img-top" alt="{{$product->title}}" style="border-radius: 10px; max-height: 500px; object-fit: contain;">
                  </div>
               </div>

               <!-- Product Details -->
               <div class="col-md-6">
                  <div class="card" style="border: none;">
                     <div class="card-body">
                        <h3 class="card-title" style="font-weight: bold;">{{$product->title}}</h3>

                        @if($product->discount_price != null)
                        <h4 style="color: red; font-weight: bold;">Rs.{{$product->discount_price}}</h4>
                        <h5 style="text-decoration: line-through; color: gray;">Rs.{{$product->price}}</h5>
                        @else
                        <h4 style="color: blue; font-weight: bold;">Rs.{{$product->price}}</h4>
                        @endif

                        <p class="mt-4"><strong>Category:</strong> {{$product->catagory}}</p>
                        <p><strong>Description:</strong> {{$product->description}}</p>
                        <p><strong>Available Quantity:</strong> {{$product->quantity}}</p>

                        <!-- Add to Cart Form -->
                        <form action="{{url('add_cart',$product->id)}}" method="Post" class="mt-4">
                           @csrf
                           <div class="input-group" style="max-width: 300px;">
                              <input type="number" name="quantity" value="1" min="1" class="form-control quantity-input" style="border-radius: 5px 0 0 5px;">
                              <div class="input-group-append">
                                 <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- footer start -->
         @include('home.footer')
         <!-- footer end -->
         <div class="cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Vijitha Plant Nursery</a><br>
               Distributed By <a href="https://themewagon.com/" target="_blank">Vijitha Plants</a>
            </p>
         </div>
         <!-- jQery -->
         <script src="home/js/jquery-3.4.1.min.js"></script>
         <!-- popper js -->
         <script src="home/js/popper.min.js"></script>
         <!-- bootstrap js -->
         <script src="home/js/bootstrap.js"></script>
         <!-- custom js -->
         <script src="home/js/custom.js"></script>
      </div>
   </body>
</html>
