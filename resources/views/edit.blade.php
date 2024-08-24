<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Post</title>
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs mt-5">
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('posts.show')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('posts.details')}}">Show All details</a>
        </li>
    </ul>
</div>
<div class="container mt-5 shadow">
    <form action="{{ route('posts.update', $post['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post['title']}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{$post['description']}}</textarea>
        </div>
        <div class="mb-3">
            <label for="creator" class="form-label">Creator</label>
            <input type="text" class="form-control" id="creator" name="creator" value="{{$post['creator']}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
