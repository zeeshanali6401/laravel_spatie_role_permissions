<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container w-25">
        <form method="post" action="{{route('post.store')}}">
          @csrf
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title Name">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" placeholder="Text here..." name="description" cols="40" rows="5"></textarea>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>