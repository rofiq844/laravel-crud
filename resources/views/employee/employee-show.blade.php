<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container">
    <br>
    <center><h3>All Employee Information | <a href="{{ route('employee.add') }}">Add Employee</a></h3></center>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">designtaion</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($getEmployee as $key=>$value)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{ $value->name }}</td>
          <td>{{ $value->designtaion }}</td>
          <td>{{ $value->address }}</td>
          <td>
              <button class="btn btn-sm btn-success">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>














    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
