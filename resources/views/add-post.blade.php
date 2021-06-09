<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="card-body">
                    @if(Session::has('post-created'))
                        <h3 style="color:green">
                            {{Session::get('post_created')}}
                        </h3>
                    @endif
                    <form action="{{route('post.create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                        </div>
                        <div class="form-group">
                            <label for="">Text Description</label>
                            <input type="textarea" name="body" class="form-control" placeholder="Enter Post Title">
                        </div>
                        <button type="submit">Add Post</button>

                    </form>
                    <a href="{{route('posts')}}">Voir les postes</a>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>