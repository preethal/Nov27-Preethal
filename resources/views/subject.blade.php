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

    <form  method="post" action="{{url('store-subject')}}" >
        @csrf
        <div class="form-group mb-2">
            <label>Student</label>
            <select class="form-control"  name ="student_id">
                @foreach($student as $students)
                <option>Select Student</option>
                    <option value ="{{$students->id}}">{{$students->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2">
            <label>Subject Name</label>
            <input type="text" class="form-control" name="name" id="name">

        </div>

        <div class="form-group mb-2">
            <label>Mark</label>
            <input type="text" class="form-control" name="mark" id="mark">

        </div>

        <div class="form-group mb-2">
            <label>Grade</label>
            <input type="text" class="form-control" name="grade" id="grade">

        </div>

        <div class="d-grid mt-3">
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </div>
    </form>
</div>
</body>

</html>
