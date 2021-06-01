@extends('layout.app')

@section('content')
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col text center mx-5 bg-light mt-3 pt-2 rounded">
        <p class="font-weight-bold"><strong>Login</strong></p>
        <small class="text-danger">
          @if (session('status'))
            {{session('status')}} 
          @endif 
        </small> 
        <form class="W-100 p-2" method="post" action="/login">
            @csrf
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
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name='remember' id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Remember Me
                </label>
              </div>
            <button class="btn btn-primary btn-sm px-3">Login</button>
        </form>
      </div>  
    </div>
  </div> 
@endsection