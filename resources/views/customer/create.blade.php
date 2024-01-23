<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="card-title text-center mb-4">Add Customer</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="true" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/add">Add customer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/customer" tabindex="-1" aria-disabled="true">Customer details</a>
                  </li>
                </ul>
              </div>
        <div class="card-body">
        {{-- <div class="card bg-info text-white"> --}}
            <div class="card-body bg-secondary text-white">
                <form action="/post" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label for="customer_name" class="form-label">Customer Name:</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="cell_no" class="form-label">Cell No:</label>
                        <input type="text" class="form-control" id="cell_no" name="cell_no" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="box_no" class="form-label">Box No:</label>
                        <input type="text" class="form-control" id="box_no" name="box_no" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        <input type="text" class="form-control" id="amount" name="amount" required>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>