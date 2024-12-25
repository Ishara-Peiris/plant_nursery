<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #121212; /* Dark background */
        color: #e0e0e0; /* Light text */
      }

      .form-card {
        max-width: 700px;
        margin: 40px auto;
        padding: 20px;
        background-color: #1f1f1f; /* Darker card background */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      }

      .form-card h1 {
        text-align: center;
        font-size: 24px;
        color: #ffffff;
        margin-bottom: 20px;
      }

      .form-card label {
        font-size: 14px;
        font-weight: bold;
        color: #b3b3b3;
      }

      .form-card .form-group {
        margin-bottom: 20px;
      }

      .form-card input,
      .form-card select {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #333;
        border-radius: 5px;
        background-color: #2c2c2c;
        color: #e0e0e0;
      }

      .form-card input:focus,
      .form-card select:focus {
        outline: none;
        border-color: #5dade2;
        box-shadow: 0 0 5px rgba(93, 173, 226, 0.5);
      }

      .form-card input[type="submit"] {
        width: 100%;
        background-color: #8a969e;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .form-card input[type="submit"]:hover {
        background-color: #2874a6;
      }
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
          @if (session()->has('message'))
            <div class="alert alert-success">
              <button
                type="button"
                class="close"
                data-dismiss="alert"
                aria-hidden="true"
              >
                x
              </button>
              {{ session()->get('message') }}
            </div>
          @endif

          <div class="form-container">
            <div class="form-card">
              <h1>Add a New Product</h1>
              <form action="{{ '/add_product' }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="title">Product Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter product title" required>
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" placeholder="Enter product price" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="description">Product Description</label>
                    <input type="text" name="description" id="description" placeholder="Enter product description" required>
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" min="0" name="quantity" id="quantity" placeholder="Enter product quantity" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="discount_price">Discount Price</label>
                    <input type="number" name="discount_price" id="discount_price" placeholder="Enter discount price">
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="category">Category</label>
                    <select name="catagory" id="category">
                      <option value="" selected>Add a Category here</option>
                      @foreach ($catagory as $catagory)
                        <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" id="image" required>
                </div>

                <input type="submit" value="Add Product">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('admin.script')
  </body>
</html>
