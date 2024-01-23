@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-dtGc8JYTnW5p7LMd3e4EMeG2ShdsbIvB+HdhGFt4SDnA6a1UeolhjN+OQPE8+XrP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    @section('content')
    <div class="container mt-5">            
        <h1 class="text-center mb-4">Customers</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="true" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/add">Add customer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/customer" tabindex="-1" aria-disabled="true">Customer details</a>
                  </li>
                </ul>
              </div>
        <div class="card-body">
        {{-- <div class="row justify-content-end mb-4">
            <div class="col-auto">
                <a href="/add" class="btn btn-primary">Add Customer</a>
            </div>
        </div> --}}
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>SO.NO</th>
                    <th>Customer Name</th>
                    <th>Cell No</th>
                    <th>Box No</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $key=>$customer)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->cell_no }}</td>
                    <td>{{ $customer->box_no }}</td>
                    <td>{{ $customer->amount }}</td>
                    <td>
                        <a href="/edit{{$customer->id}}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/delete{{$customer->id}}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                   </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div> --}}
        </div>
    </div>
</body>
</html>
@endsection