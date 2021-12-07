<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Customers</title>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #acb5bd;">
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LARA EXAMPLE-APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('customers') }}">Customers</a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                </ul>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get('userFullName') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Change Password</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>                
            </div>
        </div>

    </nav>
    
    <div class="container">
        <div style="margin-top: 50px;"></div>
        <div class="d-flex bd-highlight mb-2">
            <div class="flex-grow-1 bd-highlight">
                <h3 class="text-left">Customers</h3>
            </div>
            <div class="bd-highlight">
                <a href="{{ route('customer.form') }}">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i> New Customer
                </button>   
                </a>             
            </div>            
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th width="5%">#</th>
                <th>Full Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Pincode</th>
                <th>State</th>
                <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                
                
                @foreach($customers as $customer)
                
                <tr>
                    <th>{{ $customer->id }}</th>
                    <td>{{ $customer->fullname }}</td>
                    <td>{{ $customer->mobile }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->pincode }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">
                            <i class="fa fa-edit" aria-hidden="true"></i> Edit
                        </a>

                        <a name="" id="" class="btn btn-danger" href="#" role="button">
                            <i class="fa fa-trash" aria-hidden="true"></i> Trash
                        </a>
                    </td>
                </tr>
                
                @endforeach
                
            </tbody>
        </table>
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html> 