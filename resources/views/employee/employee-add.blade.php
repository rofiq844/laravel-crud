<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container">
    <br>
    <center><h3>Add Employee Information | <a href="{{ route('employee.view') }}">View Employee</a></h3></center>
    @include('inc.message')
    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"  placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation" class="form-control"  placeholder="Enter Designation">

        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>














    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
