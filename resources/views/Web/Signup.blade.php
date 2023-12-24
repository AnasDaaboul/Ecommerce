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

    <p class="text-muted mt-2 mb-5"><h4>Enter your information to join us.</h4></p>



    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" name="name">
    </div>

    <div class="form-group">
        <label for="exampleInputPhone">Mobile Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
    </div>

    <div class="form-group">
        <label for="exampleInputPhone">Profile Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" name="image">
    </div>
    <select class="form-group" name="gender" id="gender">
        <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <div class="form-group">
        <label for="exampleInputPhone">Age:</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="age">
    </div>

    <label for="city" class="form-group">City</label>
    <select name="city_id" id="city_id">
        <option value=""selected disabled>Select your city</option>
        @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
    </div>


    <div class="form-group mb-5">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
    </div>

    <input type="hidden" name="userable_type" value="client">
    <button type="submit" class="btn btn-theme">Register</button>
    </form>
