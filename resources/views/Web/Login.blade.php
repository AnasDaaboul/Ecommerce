<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>login with overlay image - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    background: #f6f9fc;
}
.account-block {
    padding: 0;
    background-image: url(https://bootdey.com/img/Content/bg1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: relative;
}
.account-block .overlay {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
}
.account-block .account-testimonial {
    text-align: center;
    color: #fff;
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0;
}

.text-theme {
    color: #5369f8 !important;
}

.btn-theme {
    background-color: #5369f8;
    border-color: #5369f8;
    color: #fff;
}
    </style>
</head>
<body>
<div id="main-wrapper" class="container">
<div class="row justify-content-center">
<div class="col-xl-10">
<div class="card border-0">
<div class="card-body p-0">
<div class="row no-gutters">
<div class="col-lg-6">
<div class="p-5">
<div class="mb-5">
<h3 class="h4 font-weight-bold text-theme">Login</h3>
</div>
<h6 class="h5 mb-0">Welcome back!</h6>
<p class="text-muted mt-2 mb-5">Enter your email address and password to Login.</p>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif




<form method="POST" action="{{ route('checklogin') }}">
    @csrf
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" name="email">
</div>
<div class="form-group mb-5">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" name="password">
</div>
<button type="submit" class="btn btn-theme">Login</button>
<a href="#l" class="forgot-link float-right text-primary">Forgot password?</a>
</form>



</div>
</div>
<div class="col-lg-6 d-none d-lg-inline-block">

<div class="account-testimonial">
<h4 class="text-white mb-4">This beautiful theme yours!</h4>
<p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other users."</p>
</div>
</div>
</div>
</div>
</div>

</div>

<p class="text-muted text-center mt-3 mb-0">Don't have an account?
     <a href="{{ route('signup') }}" class="text-primary ml-1">register</a></p>

</div>

</div>

</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
