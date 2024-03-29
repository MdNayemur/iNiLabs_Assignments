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
            <div class="col-md-8 offset-md-2">
            <div class="head bg-body-secondary p-2">
                <h3 class="float-start m-4">Edit Student Information</h3>
                <a href="{{ Route('manage') }}" class="btn btn-info float-end m-4">View Students</a>        
            </div>
            <form action="{{ Route('update',$edtinf->id) }}" method="post">
                @csrf
                
          	 <div class="form-group">
              <label for="stdid">Student ID</label> 
              <input type="number" name="stdid" id="stdid" placeholder="Enter Student Id Here" class="form-control" value="{{ $edtinf->studentID }}">
              <span class="text-danger">
                @error('stdid')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="name">Student Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter Student Name Here" class="form-control" value="{{ $edtinf->sname }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="email">Student Email</label> 
              <input type="email" name="email" id="email" placeholder="Enter Student Email Here" class="form-control" value="{{ $edtinf->email }}">
              <span class="text-danger">
                @error('email')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="phone">Student Phone</label> 
              <input type="number" name="phone" id="phone" placeholder="Enter Student Phone number Here" class="form-control" value="{{ $edtinf->Phone }}">
              <span class="text-danger">
                @error('email')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Information</button>
             </div>

            

            </form>

            </div>
        </div>
    </div>
 


    


<!-- script cdn for bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>