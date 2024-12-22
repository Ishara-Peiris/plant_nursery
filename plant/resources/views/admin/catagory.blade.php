<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
        }

        .form-card {
            max-width: 800px;
            margin: 30px auto;
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
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .form-card .form-area {
            position: relative;
            z-index: 2;
        }

        .form-card h2 {
            text-align: center;
            font-size: 40px;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 30px;
            padding-bottom: 30px;
            font-weight: bold;
            color: #333;
        }

        .input_color {
            color: black;
            padding: 12px;
            font-size: 14px;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .input_color:focus {
            outline: none;
            border-color: #5dade2;
            box-shadow: 0 0 6px rgba(93, 173, 226, 0.5);
        }

        .btn-submit {
            display: inline-block;
            background-color: #06402b; /* Dark green */
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
            background-color: #1b5e20;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        .btn-submit:active {
            background-color: #43a047;
            transform: translateY(1px);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 1000px;
            margin-top: 30px;
            margin-left: 250px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #06402b;
            color: white;
            padding: 12px;
            font-size: 18px;
        }

        td {
            padding: 12px;
            text-align: center;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .alert {
            margin-top: 20px;
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
          @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
          @endif

          <div class="div_center">
            <h2 class="h2_font">Add Category</h2>

            <div class="form-card">
              <div class="card-background">
                <div class="form-area">
                  <form action="{{url('./add_catagory')}}" method="POST">
                    @csrf
                    <input class="input_color" type="text" name="catagory" placeholder="Write category name" required>
                    <input type="submit" class="btn-submit" name="submit" value="Add Category">
                  </form>
                </div>
              </div>
            </div>

            <table>
              <tr>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
              @foreach($data as $data)
                <tr>
                  <td>{{$data->catagory_name}}</td>
                  <td>
                    <a onclick="return confirm('Are You Sure To Delete This?')" class="btn btn-danger" href="{{url('delete_catagory', $data->id)}}">Delete</a>
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
