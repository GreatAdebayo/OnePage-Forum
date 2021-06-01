@extends('layout.app')

@section('content')
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col text center mx-5 bg-light mt-3 pt-2 rounded">
        <p class="font-weight-bold"><strong>Register</strong></p> 
        <form class="W-100 p-2" method="post" action="/register">
            @csrf
            <div class="form-group pb-2">
              <label>First Name</label>
                <input type="text" class="form-control"  placeholder="Enter First name" name="firstname" value='{{old('firstname')}}'>
                 @error('firstname')
                  <p class="text-danger">{{$message}}</p>  
                 @enderror
            </div>  
            <div class="form-group pb-2">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter last name"  value='{{old('lastname')}}'>
                @error('lastname')
                <p class="text-danger">{{$message}}</p>  
                @enderror
            </div> 
            <div class="form-group pb-2">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email"  value='{{old('email')}}'>
                @error('email')
                <p class="text-danger">{{$message}}</p>  
                @enderror
            </div> 
            <div class="form-group pb-2">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                @error('password')
                <p class="text-danger">{{$message}}</p>  
                @enderror
            </div>
            <div class="form-group pb-2">
                <label>Password again</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password again">
                @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>  
                @enderror
            </div> 
            <button class="btn btn-primary btn-sm px-3">Submit</button>
        </form>
      </div>  
    </div>
  </div> 
@endsection