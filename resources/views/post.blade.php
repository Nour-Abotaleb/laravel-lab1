<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Get Post</title>
</head>
<body>
<div class='container'>
<ul class="nav nav-tabs mt-5">
  <li class="nav-item">
    <a class="nav-link text-dark" aria-current="page" href="{{route('posts.show')}}">ITI Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{route('posts.details')}}">All Posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('posts.show')}}">Posted by {{$post['creator']}}</a>
  </li>
</ul>
</div>

<div class='container'>
    <div class="card mt-5 shadow" >
        
  
        <h5 class="card-header">{{$post['title']}}</h5>
  <div class="card-body">
    <h5 class="card-title">Creator: {{$post['creator']}}</h5>
    <p class="card-text">{{$post['description']}}</p>
  
        
  </div>
  </div>




    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>