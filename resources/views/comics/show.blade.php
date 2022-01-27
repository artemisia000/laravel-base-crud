@extends('layouts.main')

@section('content2')
    <section class="container" >
        <h1> {{$comic->title}} </h1>
        <h3>Series: {{$comic->series}}</h3>
        <span>Price:{{$comic->price}}</span>
        <div class="row m-5">
            <div class="col-md-6">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col-md-6">
                {{$comic->description}}
            </div>
        </div>
        <button class="btn btn-ptimary">
            <a href="{{route('comics.index')}}">BACK TO TABLE</a>
        </button>


    </section>
@endsection