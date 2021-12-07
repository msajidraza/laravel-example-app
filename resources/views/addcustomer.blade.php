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
                <h3 class="text-left">Add Customer</h3>
            </div>
            <div class="bd-highlight">
                <a href="{{ route('customers') }}">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-eye" aria-hidden="true"></i> View Customers
                    </button>
                </a>                
            </div>            
        </div>
        
        <div class="border p-3">
        <form class="row g-3" action="{{ route('store') }}" method="post">
            @csrf
            
            <div class="row mt-4">
                <div class="col-12">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                </div>
            </div> 
            <div class="row">
                <div class="col-12">
                    <label for="fullname" class="form-label">Full Name</label>            
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" maxlength="100" value="{{old('fullname')}}" />
                    <span class="text-danger">
                        @error('fullname')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>                            
            <div class="row mt-3">    
                <div class="col-6">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="" maxlength="12" value="{{old('mobile')}}" />
                    <span class="text-danger">
                        @error('mobile')
                            {{$message}}
                        @enderror
                    </span>
                </div>                    
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="" maxlength="65" value="{{old('email')}}" />
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="" value="{{ old('address') }}" } />
                    <span class="text-danger">
                        @error('address')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mt-3">    
                <div class="col-4">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="" maxlength="25" value="{{ old('city') }}" />
                    <span class="text-danger">
                        @error('city')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            
                <div class="col-4">
                    <label for="pincode" class="form-label">Pincode</label>
                    <input type="text" class="form-control" name="pincode" id="pincode" placeholder="" maxlength="6" value="{{ old('pincode') }}" />
                    <span class="text-danger">
                        @error('pincode')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            
                <div class="col-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="" maxlength="25" value="{{ old('state') }}" />
                    <span class="text-danger">
                        @error('state')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mt-3">    
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

        </form>
        </div>
          
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