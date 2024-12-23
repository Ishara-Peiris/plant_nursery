<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Vijitha Plants - Shopping Cart</title>

    <!-- Bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- Font Awesome -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- Responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cart-container {
            margin: 50px auto;
            width: 80%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .cart-table th,
        .cart-table td {
            text-align: center;
            padding: 15px;
        }

        .cart-table th {
            background-color: #3df536;
            color: white;
            font-size: 16px;
        }

        .cart-table td {
            font-size: 14px;
        }

        .cart-image {
            height: 150px;
            width: 150px;
            object-fit: cover;
        }

        .product-title {
            font-size: 16px;
            font-weight: bold;
            color: #343a40;
        }

        .price {
            color: #28a745;
            font-size: 18px;
        }

        .action-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .action-btn:hover {
            background-color: #c82333;
        }

        .total-price-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            font-size: 18px;
            font-weight: bold;
        }

        .checkout-btn {
            background-color: #fbff00;
            color: BLACK;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 18px;
            text-decoration: none;
            width: 100%;
            text-align: center;
            margin: 10PX
        }

        .checkout-btn:hover {
            background-color: #f8ad3b;
        }

        .alert-success {
            padding: 15px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')

        <!-- Display Success Message -->
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="cart-container">
            <h1 class="text-center mb-4">Your Shopping Cart</h2>

            <!-- Cart Table -->
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totalprice = 0; ?>
                    @foreach($cart as $cartItem)
                    <tr>
                        <td>
                            <span class="product-title">{{ $cartItem->product_title }}</span>
                        </td>
                        <td>{{ $cartItem->quantity }}</td>
                        <td class="price">Rs. {{ $cartItem->price }}</td>
                        <td>
                            <img class="cart-image" src="/product/{{ $cartItem->image }}" alt="{{ $cartItem->product_title }}">
                        </td>
                        <td>
                            <a class="action-btn" onclick="return confirm('Are you sure to remove this product?')" href="{{ url('remove_cart', $cartItem->id) }}">
                                Remove Product
                            </a>
                        </td>
                    </tr>
                    <?php $totalprice += $cartItem->price; ?>
                    @endforeach
                </tbody>
            </table>

            <!-- Total Price -->
            <div class="total-price-container">
                <span>Total Price</span>
                <span>Rs. {{ $totalprice }}</span>
            </div>

            <!-- Checkout Section -->
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ url('cash_order') }}" class="btn checkout-btn">Cash On Delivery</a>
                <a href="{{ url('stripe', $totalprice) }}" class="btn checkout-btn">Pay using Card</a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="home/js/bootstrap.js"></script>
    <!-- Custom JS -->
    <script src="home/js/custom.js"></script>
</body>
</html>
