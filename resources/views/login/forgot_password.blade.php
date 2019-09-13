@extends('login.master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h4 class="text-dark mb-2">Forgot Your Password?</h4>
        <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
    </div>
    <form class="user">
        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div><button class="btn btn-primary btn-block text-white btn-user"
            type="submit">Reset Password</button></form>
    <div class="text-center">
        <hr><a class="small" href="register.html">Create an Account!</a></div>
    <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
</div>
@stop