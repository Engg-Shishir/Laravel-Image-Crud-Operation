<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
 <title>All Student</title>
</head>
<body>
 

<section class="py-3">
 <div class="container">
  <div class="row">
   <div class="col-md-10 m-auto">
    <div class="card">
     <div class="card-header text-center">
      All students
      <a class="btn btn-primary" href="/addStudent">Add Student</a>
     </div>
     <div class="card-body">
      
      @if(Session::has('student_deleted'))
      <div class="alert alert-success" role="alert">
       {{Session::get('student_deleted')}}
     </div>
     @endif
      <table class="table table-dark">
       <thead>
         <tr class="text-center">
           <th scope="col">Name</th>
           <th scope="col">Image</th>
           <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
        
        @foreach ($students as $student)
         <tr class="text-center" >
           <td>{{$student->name}}</td>
           <td>
            <img src="{{asset('images')}}/{{$student->profileimage}}" style="max-width: 100px;"/>
           </td>

           <td>
            <a  class="btn btn-warning btn-sm" href="/editStudent/{{$student->id}}">Edit</a>
           </td>

           <td>
            <a  class="btn btn-danger btn-sm" href="/delete/{{$student->id}}">Delete</a>
           </td>
         </tr>  
        @endforeach
       </tbody>
     </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

@if(Session::has('student_deleted'))
<script>
  toastr.error("{!! Session::get('student_deleted') !!}");
</script>
@endif


</body>
</html>