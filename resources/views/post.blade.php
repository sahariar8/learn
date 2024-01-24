<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">See All Posts Here</h1>
   
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 border mx-auto">
                    <table class="table table-border">
                        <thead>All Posts</thead>
                        <tbody>
                           <tr>
                             <th>Id</th>
                             <th>Title</th>
                             <th>Description</th>
                             <th>Action</th>
                           </tr>
                        
                            @foreach ($posts as $post )
                                <tr>
                                    <th>{{ $post->Id}}</th>
                                    <th>{{ $post->Title}}</th>
                                    <th>{{ $post->Description}}</th>
                                    <th>
                                        <button class="btn btn-warning">Edit</button>
                                        <button class="btn btn-danger"  >Delete</button>
                                    </th>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous">
    </script>
</body>
</html>