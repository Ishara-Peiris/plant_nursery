<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .title_deg {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .table-container {
            margin: 0 auto;
            padding: 20px;
            max-width: 95%;
            overflow-x: auto;
        }

        .table_deg {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            overflow: hidden;
        }

        .table_deg th {
            background-color: #2a2a2a;
            color: #ffffff;
            font-weight: bold;
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #444;
        }

        .table_deg td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #444;
            color: #cccccc;
        }

        .table_deg tr:nth-child(even) {
            background-color: #1e1e1e;
        }

        .table_deg tr:nth-child(odd) {
            background-color: #292929;
        }

        .table_deg tr:hover {
            background-color: #333;
        }

        .img_size {
            width: 100px; /* Reduced width */
            height: 80px; /* Reduced height */
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
        }

        .btn-btn-primary {
            background-color: #0066cc;
            color: #ffffff;
            padding: 8px 12px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .btn-btn-primary:hover {
            background-color: #004080;
        }

        p {
            margin: 0;
        }

        .delivered-status {
            color: #4caf50;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- partial -->
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>

                <div class="table-container">
                    <table class="table_deg">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Image</th>
                            <th>Delivered</th>
                        </tr>

                        @foreach($order as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->product_title}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->delivery_status}}</td>
                            <td>
                                <img class="img_size" src="/product/{{$order->image}}">
                            </td>
                            <td>
                                @if($order->delivery_status == 'processing')
                                <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn-btn-primary">Delivered</a>
                                @else
                                <p class="delivered-status">Delivered</p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>

</html>
