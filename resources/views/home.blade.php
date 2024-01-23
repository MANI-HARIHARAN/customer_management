@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
    <title>customer management</title>
</head>
<body>
    @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <center ><h2>DASHBOARD </h2></center></div>
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="/home">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/add">Add customer</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="/customer" tabindex="-1" aria-disabled="true">Customer details</a>
                          </li>
                        </ul>
                      </div>
                    <div class="card-body">
                      <h5 class="card-title">Customer detials</h5>
                      <p class="card-text">Making the work easier and manage your data & time .</p>
                      <a href="/customer" class="btn btn-primary">Get detials  </a>
                    </div>
                  </div>
                <div class="card-body"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>

