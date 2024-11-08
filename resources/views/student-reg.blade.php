<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <section class="h-100 h-custom " style="background-color: #8fc4b7; display:flex;">


  <form action="/add-student" method="post" class="container py-5">
  <div class="">
  @if(session('message' || 'deleted')){
 <div class="alert alert-success">
  {{session('message') || session('deleted')}} 
 </div>
    }
    @endif

                   <label for="name">Name</label>
                   <input type="text" name="name" id="name">
               </div>
               <div class="">
                   <label for="email">Email</label>
                   <input type="text" name="email" id="email">
               </div>
               <div class="">
                   <label for="phone">Phone</label>
                   <input type="text" name="phone" id="phone">
               </div>
               <div class="">
                   <label for="address">address</label>
                   <textarea name="address" id="address"></textarea>
               </div>
               <select name="gender" id="">
                <option value="male">Male</option>
                <option value="female">Female</option>
               </select>
               <div class="">
                   <label for="department">department</label>
                   <input type="text" name="department" id="department">
               </div>
               <div class="">
                   <label for="joined_date">joined date</label>
                   <input type="date" name="joined_date" id="joined_date">
               </div>
               <button type="submit">Submit</button>
               @csrf
  </form>
  <div class="container py-5 h-100">
        <div class="row">
            <div class="">
                <div class="card">
              <div class="card-header">
                <h1>Student reg</h1>
              </div>
              <div class="card-body">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
     
      <th scope="col">Department</th>
      <th scope="col">Gender</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
   
      @foreach($students as $student)
      <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      
      <td>{{$student->department}}</td>
      <td>{{$student->gender}}</td>
      <td><a href="/remove-student/{{$student->id}}" class="btn btn-danger">Delete</a></td>
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
</body>
</html>