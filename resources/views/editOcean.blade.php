@extends('layout')

@section('content')
    <div class="col-sm-6">
        <form method="post" action="/editOcean">
        @csrf
            <br>
            <h5>Edit an ocean hun:</h5>
            <input type="hidden" name="id" value="{{$data->id}}" />
            <div class="form-group">
                <label>Ocean Name</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Ocean Name">
            </div>
            <div class="form-group">
                <label>Ocean Color</label>
                <input type="text" class="form-control" name="color" value="{{$data->color}}" placeholder="Ocean Color">
            </div>
            <div class="form-group">
                <label>Artist</label>
                <input type="text" class="form-control" name="artist" value="{{$data->artist}}" placeholder="Artist">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
    <br>
@stop