@extends('layout')

@section('content')
    <h1>JUST FEEL AT HOME </h1> 
    <br>
    <h3>Chill Vibez!</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CITY</th>
                <th scope="col">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item -> name}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> city}}</td>
                <td>
                    <a href="#"><i class="fa fa-trash" style="color:purple"></i></a>
                    <a href="#"><i class="fa fa-edit" style="color:purple"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
     
@stop
