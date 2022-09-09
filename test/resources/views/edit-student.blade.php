<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <div class="container" style="margin-top:20px"></div>
    <div class="form-group row">
      <div class="col-md-12">
        <h2>Edit Student</h2>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert" >
              {{Session::get('success')}}
            </div>
        @endif
        <form method="POST" action="{{url('update-student')}}">
          <input type="hidden" name="id" value="{{$data->id}}">
          @csrf
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{$data->name}}">
            @error('name')
              <div class="alert alert-danger" role="alert" >
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="{{$data->email}}">
            @error('email')
              <div class="alert alert-danger" role="alert" >
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone" value="{{$data->phone}}">
            @error('phone')
              <div class="alert alert-danger" role="alert" >
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter Your Address" value="{{$data->address}}"></textarea>
            @error('address')
              <div class="alert alert-danger" role="alert" >
                {{$message}}
              </div>
            @enderror
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{url('student-list')}}" class="btn btn-danger">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>