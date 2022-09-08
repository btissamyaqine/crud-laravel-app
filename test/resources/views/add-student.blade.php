<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top:20px"></div>
    <div class="form-group row">
      <div class="col-md-12">
        <h2>Add Student</h2>
        <form method="POST" action="{{url('save-student')}}">
          @csrf
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
          </div>
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
          </div>
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone">
          </div>
          <div class="md-3">
            <label class="col-sm-2 col-form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>