@extends('login.master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h4 class="text-dark mb-4">Create an Account!</h4>
    </div>
    <form class="user">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name"></div>
            <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="last_name"></div>
        </div>
        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
            <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat"></div>
        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account</button>
        <hr>
    </form>
    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
    <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
</div>
@stop