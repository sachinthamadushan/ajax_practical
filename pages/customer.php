<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Customer</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Customer</h5>
                        <form method="POST" id="cForm">
                            <input type="text" id="cnic" placeholder="NIC" class="form-control p-2 mt-3">
                            <input type="text" id="cname" placeholder="Name" class="form-control p-2 mt-3">
                            <input type="password" id="cpwd" placeholder="Password" class="form-control p-2 mt-3">
                            <button type="submit" onclick="saveCustomer();" class="btn btn-success mt-3">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Customer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/customer.js"></script>
</body>
</html>