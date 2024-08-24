<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs mt-5">
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('posts.show')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('posts.details')}}">Show All details</a>
        </li>
    </ul>
</div>
<div class="container">
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['creator']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>
                        <a href="{{route('posts.get',$post['id'])}}" class="btn btn-primary m-3">
                            View
                        </a>
                        <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-warning m-3">
                            Edit
                        </a>
                        <a href="{{route('posts.delete',$post['id'])}}" class="btn btn-danger m-3">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
