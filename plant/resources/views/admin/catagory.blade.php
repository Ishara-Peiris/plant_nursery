<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #121212;
            color: #ffffff;
        }

        .form-card {
            max-width: 800px;
            margin: 30px auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            background: #1e1e1e;
            padding: 20px;
        }

        .form-card h2 {
            text-align: center;
            font-size: 30px;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        .input_color {
            color: black;
            padding: 12px;
            font-size: 14px;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #444;
            border-radius: 5px;
            background: #333;
            color: #fff;
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

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            background-color: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-collapse: collapse;
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
            color: #ccc;
            border-bottom: 1px solid #444;
        }

        tr:nth-child(even) {
            background-color: #292929;
        }

        tr:hover {
            background-color: #333;
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

          <div class="form-card">
            <h2>Add Category</h2>
            <form action="{{url('./add_catagory')}}" method="POST">
              @csrf
              <input class="input_color" type="text" name="catagory" placeholder="Write category name" required>
              <input type="submit" class="btn-submit" name="submit" value="Add Category">
            </form>
          </div>

          <div class="table-container">
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
