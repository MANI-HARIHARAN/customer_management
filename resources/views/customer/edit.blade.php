<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Edit customer</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card bg-info text-white">
            <div class="card-body">
            <h1 class="card-title text-center mb-4">Edit Customer</h1>

            <form action="/update/{{ $customer->id }}" method="POST">
                @csrf
                @method('PUT') <!-- Use PUT method for updates -->

                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name:</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $customer->customer_name }}" required>
                </div>

                <div class="mb-3">
                    <label for="cell_no" class="form-label">Cell No:</label>
                    <input type="text" class="form-control" id="cell_no" name="cell_no" value="{{ $customer->cell_no }}" required>
                </div>

                <div class="mb-3">
                    <label for="box_no" class="form-label">Box No:</label>
                    <input type="text" class="form-control" id="box_no" name="box_no" value="{{ $customer->box_no }}" required>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="{{ $customer->amount }}" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Customer</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>