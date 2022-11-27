<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Validation in Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container mt-5">

    @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{Session::get('success')}}
        </div>
    @endif

    <form  method="post" action="{{url('update')}}/{{$student->id}}" >
        @csrf
        <div class="form-group mb-2">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">

        </div>

        <div class="form-group mb-2">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}">

        </div>

        <div class="form-group mb-2">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{$student->phone}}">

        </div>

        <div class="form-group mb-2">
            <label>Address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$student->address}}">
            <input type="hidden" class="form-control" name="status" id="status" value="{{$student->status}}">


        </div>

        <div class="d-grid mt-3">
            <input type="submit"  value="Update" class="btn btn-dark btn-block">
        </div>
    </form>
</div>
</body>

</html>
