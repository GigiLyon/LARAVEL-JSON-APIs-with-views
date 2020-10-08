@extends('layout')

@section('content')
    <h1>OCEAN RELAXATION ... CHILL VIBE!</h1>
    <br>
    <a href="chill">CHILL</a>
    <h3>{{$city ?? ''}}</h3>
    <!-- <p>{{print_r($data)}}</p> -->
    
    <!-- GET REQUEST -->
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">COLOR</th>
                <th scope="col">ARTIST</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item -> id}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> color}}</td>
                <td>{{$item -> artist}}</td>
                <td>
                    <a href="/oceans/{{$item->id}}"><i class="fa fa-trash" style="color:purple"></i></a>
                    <a href="/editOcean/{{$item->id}}"><i class="fa fa-edit" style="color:purple"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>

    <!-- POST REQUEST -->
    <div class="col-sm-6">
        <form method="post" action="">
        @csrf
            <h5>Add an ocean to the list hun:</h5>
            <div class="form-group">
                <label>Ocean Name</label>
                <input type="text" class="form-control" name="name" placeholder="Ocean Name">
            </div>
            <div class="form-group">
                <label>Ocean Color</label>
                <input type="text" class="form-control" name="color" placeholder="Ocean Color">
            </div>
            <div class="form-group">
                <label>Artist</label>
                <input type="text" class="form-control" name="artist" placeholder="Artist">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
    <br>

@stop