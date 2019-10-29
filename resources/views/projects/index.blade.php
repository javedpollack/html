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
@extends('layouts.app')
@section('content')
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                        <div class="col-sm-6">Register</div>
                        <div class="col-sm-6"><a href=" {{ route('projects.create')}}">Add Properties</a></div>
                        </div>  
                        @foreach ($projects as $project)
                        <div class="card-body">
                        <div class="row col-sm-8" style="float:left;">
                       <div class="col-sm-12"><strong>Post Created by: </strong> {{ $project->user->name}} </div>
                       <div class="col-sm-12"><strong>Title: </strong> <a href=""> {{ $project->title}}</a> </div>
                       <div class="col-sm-12"><strong>Type: </strong>   {{ $project->type->title}} </div>
                       <div class="col-sm-12"><strong>Location:  </strong> {{$project->area->title}}</div>
                       <div class="col-sm-12"><strong>Community:  </strong> {{$project->area->community}}</div>
                       <div class="col-sm-12"><strong>Price:  </strong> {{ $project->price}}</div>
                       <div class="col-sm-12"><strong>Area:  </strong> {{ $project->area}}</div>
                       <div class="col-sm-12"><strong>Bedroom:  </strong> {{ $project->bedroom}}</div>
                       <div class="col-sm-12"><strong>Description:  </strong> {{ $project->description}}</div>
                      
                      
                      <div class="col-sm-12">
                     </div>
                      <div class="col-sm-12"> <a href=" {{ route('projects.show', $project->id)}}">See More</a></div>
                        </div>
                        <div class="col-sm-4" style="float:right;">
                       <form method="post" action="{{route('projects.destroy',$project->id)}}">
                       @csrf
                       @method('DELETE')
                       <a href="{{route('projects.edit', $project->id)}}">Edit</a>
                       <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                       </form>
                       </div>
                       </div>
                        <hr />
                        @endforeach
                    </div>
                    
            </div>
        </div>
    </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>