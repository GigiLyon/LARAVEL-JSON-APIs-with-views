@extends('layout')

@section('content')
    <br>
    <div class="col-sm-6">
        <form method="post" action="/login">
        @csrf
            <br>
            <h2>Login</h2>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div> 
    <br>
@stop