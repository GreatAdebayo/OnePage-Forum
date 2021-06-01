<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/" style='font-family: "Poppins", sans-serif'>One Page</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active"  style='font-family: "Poppins", sans-serif' aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style='font-family: "Poppins", sans-serif' href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style='font-family: "Poppins", sans-serif' href="/post">Post</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
               <li class="nav-item">
                  <a class="nav-link active"  style='font-family: "Poppins", sans-serif' aria-current="page">{{auth()->user()->firstname}}</a>  
               </li>
              
                 @csrf
                 <li class="nav-item">
                   <form method="post" action="/logout">
                     @csrf
                     <button type='submit' class="btn btn-sm btn-light mt-1"  style='font-family: "Poppins", sans-serif' aria-current="page">Logout</button>  
                   </form>
                    </li> 
               
                @endauth


                @guest
                <li class="nav-item">
                  <a class="nav-link active"  style='font-family: "Poppins", sans-serif' aria-current="page" href="/login">Login</a>  
               </li>
               <li class="nav-item">
                  <a class="nav-link active"  style='font-family: "Poppins", sans-serif' aria-current="page" href="/register">Register</a>  
               </li>    
               @endguest 
            </ul>
          </div>
        </div>
      </nav>
 @yield('content')   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>