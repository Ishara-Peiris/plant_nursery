<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;  /* Dark background color for body */
            margin: 0;
            padding: 0;
            color: #fff;  /* White text color for readability */
        }

        .center {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
            margin-top: 40px;
            background: #333;  /* Dark background color for the table */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .font_size {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;  /* White text for title */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .th_color {
            background-color: #2C2C2C;  /* Darker background for header */
            color: #fff;  /* White text color for header */
        }

        .th_deg {
            text-align: left;
            padding: 15px;
            text-transform: uppercase;
            font-size: 14px;
            border-right: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #2C2C2C;  /* Dark background for even rows */
        }

        tr:nth-child(odd) {
            background-color: #212121;  /* Slightly darker background for odd rows */
        }

        tr:hover {
            background-color: #444;  /* Lighter background when hovering over rows */
        }

        td {
            padding: 15px;
            text-align: left;
            font-size: 14px;
            color: #ccc;  /* Light text color for table cells */
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        td:last-child,
        th:last-child {
            border-right: none;
        }

        th {
            border-bottom: 2px solid #ddd;
        }

        td img {
            display: block;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            max-width: 100px;  /* Reduced image size */
            max-height: 100px;
        }

        /* Style for hover effect on images */
        td img:hover {
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }

        /* Styling for success and danger alerts */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               {{session()->get('message')}}
            </div>
            @endif
          <h2 class="font_size">All Products</h2>
          <table class="center">
            <thead>
              <tr class="th_color">
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Category</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Discount Price</th>
                <th class="th_deg">Product Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach($product as $product)
              <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->catagory}}</td>
                <td>Rs.{{$product->price}}</td>
                <td>Rs.{{$product->discount_price}}</td>
                <td>
                  <img class="img_size" src="/product/{{$product->image}}" alt="Product Image">
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete product')"href="{{url('delete_product',$product->id)}}">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.script')
      <!-- End custom js for this page -->
  </body>
</html>
