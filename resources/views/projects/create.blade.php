<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Laravel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        @if (Auth::check())
                        <div class="card-header">
                        <div class="col-sm-6">Register</div>
                        <div class="col-sm-6"><a href="{{route('projects.index')}}">Go Back to Project</a></div>
                        </div>
                        <div class="card-body">
                            <form name="my-form" enctype="multipart/form-data" method="POST" action="{{ route('projects.store') }}">
                          @csrf
                               </div>
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                                    <div class="col-md-6">
                                        <input type="text" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" required autofocus>
                                        @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Types</label>
                                    <div class="col-md-6"> 
                                <select name="type">
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}">{{ $type->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                                <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Area</label>
                                    <div class="col-md-6"> 
                                <select name="location">
                                <option value="">Select Area</option>
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{ $area->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                                <div class="form-group row">
                                <label for="Community" class="col-md-4 col-form-label text-md-right">Community</label>
                                    <div class="col-md-6"> 
                                <select name="community" class="dynamic">
                                <option value="">Select Community</option>
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{ $area->community}}</option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                              
                             
                             
                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">price</label>
                                    <div class="col-md-6">
                                        <input type="text" id="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="area" class="col-md-4 col-form-label text-md-right">Area</label>
                                    <div class="col-md-6">
                                        <input type="text" id="area" class="form-control{{ $errors->has('area') ? ' is-invalid' : '' }}" name="area" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Bedroom</label>
                                    <div class="col-md-6">
                                        <input type="text" id="bedroom" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="bedroom" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                       <textarea rows="4" cols="65" name="description"></textarea>
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="submit">
                                        Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @else
please login first
@endif
                    </div>
            </div>
            <div class="col-md-8">
        

        </div>
    </div>

</main>
<!-- <script>
$(document).ready(function()){
    $('.dynamic').chnage(function()){
        if($(this).val() != ''){
            var select = $(this).attr("id");
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{route('projects.create')}}",
                method:"POST",
                data:{slect:select,value:value, _token:_token, dependent:dependent},
                success:function(result){
                    $('#'+dependent).html(result);
                }
            })
        }
    });

});
</script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>