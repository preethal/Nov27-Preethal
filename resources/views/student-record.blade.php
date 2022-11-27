<!DOCTYPE html>
<html>
<head>
    <title>How to Active and Inactive Status in Laravel 6? - Nicesnippets.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body class="bg-info">
<div class="container">
    <div class="panel panel-default" style="margin-top: 40px">
        <div class="panel-heading">
            <h2>Student Record</h2>
            <a href="{{url('/form')}}" class="btn btn-danger">Add Student</a>
            <a href="{{url('/subject-form')}}" class="btn btn-danger">Add Subject</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th> Student Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>subject</th>
                    <th> Mark</th>
                    <th>Grade</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($student as $students)
                    <tr>
                        <td> {{$students->name}} </td>
                        <td> {{$students->email}} </td>
                        <td> {{$students->phone}} </td>
                        <td> {{$students->address}} </td>
                    @foreach($students->subject as $subject)
                        <td> {{$subject->name}}</td>
                        <td> {{$subject->mark}}</td>
                        <td> {{$subject->grade}}</td>
                            @endforeach
{{--                        <td> {{$students->subject[0]->name}}</td>--}}
{{--                        <td> {{$students->subject[0]->mark}}</td>--}}
{{--                        <td> {{$students->subject[0]->grade}}</td>--}}
                        <td><a href="{{url('/edit')}}/{{$subject->id}}" class="btn btn-default">Edit</a></td>
                        <td><a href="{{url('/delete')}}/{{$subject->id}}" class="btn btn-default">Delete</a></td>
                        <td><input data-id="{{$students->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $students->status ? 'checked' : '' }}>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            console.log(status);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {'status': status, 'id': id},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
</html>
