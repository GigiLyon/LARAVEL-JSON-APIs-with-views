@extends('layout')

@section('content')
    <br>
    <div class="col-sm-6">
        <form method="post" action="/register">
        @csrf
            <br>
            <h2>Register an Ocean Swimmer</h2>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter City">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div> 
    <br>
@stop