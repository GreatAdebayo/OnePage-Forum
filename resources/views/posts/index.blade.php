@extends('layout.app')

@section('content')
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col W-100 text center mx-5 bg-light mt-3 pt-2 rounded">
        <p><strong>Posts</strong></p>
        @if($posts->count())
        <ul class="list-group">
          @foreach ($posts as $post)
            <li class="list-group-item mb-2">
              <a href="" class="text-dark" style="text-decoration:none"><strong>{{$post->User->lastname}}</strong></a>
              <small class="text-grey">{{$post->created_at->diffForHumans()}}</small>
              <p class="mb-2">{{$post->body}}</p>
            </li>
            <div class="d-flex justify-content-center">
               <form>
                 @csrf
                 <button class="btn btn-sm btn-primary">Like</button>
               </form>
               <form>
                 @csrf
                <button class="btn btn-sm btn-danger">DisLike</button>
              </form>
            </div> 
        @endforeach
        </ul>
        {{$posts->links()}}
        @else
        <p>There are no posts</p> 
        @endif
        
        <form method="post" action="/post" class="mt-5">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Make a Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="post something!" name='body'></textarea>
            @error('body')
            <p class="text-danger">{{$message}}</p>  
            @enderror
          </div><br/>
          <button class="btn btn-primary btn-sm px-3 mb-3" type="submit">Post</button>
        </form>
      </div>  
    </div>
  </div> 
@endsection