<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up!</title>
  </head>
<body>

    <div class="container">
    <form class="row g-3" action="{{ route('save') }}" method="post">
        @csrf
        <div style="margin-top: 50px;"></div>
        <h1 class="text-center">Sign Up Page</h1>
        <h4 class="text-center text-muted">My First Bootstrap 5 Sign Up Page</h4>

        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="border p-4 m-4">
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
                    <div class="row mt-4">
                        <div class="col-12">
                            <label for="fullname" class="form-label">Full Name</label>            
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" value="{{old('fullname')}}" />
                            <span class="text-danger">
                                @error('fullname')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="" value="{{old('email')}}" />
                            <span class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">    
                        <div class="col-12">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="" value="{{old('mobile')}}" />
                            <span class="text-danger">
                                @error('mobile')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="" />
                            <span class="text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">    
                        <div class="col-12">
                            <label for="conf_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="" />
                            <span class="text-danger">
                                @error('conf_password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                        </div>        
                    </div>
                </div> 
                <div class="text-center p-2">Already a member? <a href="{{ route('signin') }}">Sign In</a></div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
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