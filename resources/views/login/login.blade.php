@extends('login.master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h4 class="text-dark mb-4">Welcome Back!</h4>
    </div>
    <form class="user">
        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
            </div>
        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
        <hr>
        <hr>
    </form>
    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
    <div class="text-center"><a class="small" href="register.html">Create an Account!</a></div>
</div>
@stop