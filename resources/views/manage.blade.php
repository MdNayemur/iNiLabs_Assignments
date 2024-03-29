<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="{{ asset('info.css') }}" rel="stylesheet">

    <!-- cdn for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Student Information</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="head bg-body-secondary p-2">
                <h3 class="float-start m-4"> Student Infrormation</h3>
                <a href="{{ Route('addstudent') }}" class="btn btn-info float-end m-4">Add Student</a>        

        </div>
    <table class="table border">
        <thead>
            <tr">
            <th>Serial</th>
            <th>Student Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @php $sl=1 @endphp
            @foreach ($inf as $data)
            <tr class="m-3">
            <td>{{ $sl }}</td>
            <td>{{ $data->studentID }}</td>
            <td>{{ $data->sname }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->Phone }}</td>
            <td><button class="btn btn-warning btn-sm"><a href="{{ Route('edit', $data->id) }}" class="text-white">Edit</a></button></td>
            <td><button class="btn btn-danger btn-sm"><a href="{{  Route('delete', $data->id) }}" class="text-white">Delete</a></button></td>
            </tr>
            @php $sl++ @endphp
            @endforeach
        </tbody>

    </table>

            </div>
        </div>
    </div>
 


    


<!-- script cdn for bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>