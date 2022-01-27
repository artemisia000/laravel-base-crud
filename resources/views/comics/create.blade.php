@extends('layouts.main')

@section('content3')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('comics.store')}}" method="POST" >
                @csrf
                <div>
                    <label for="title" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Title">
                </div>
                <div>
                    <label for="price" class="form-label"></label>
                    <input type="price" class="form-control" placeholder="price">
                </div>
                <div>
                    <label for="sale_date" class="form-label"></label>
                    <input type="date" class="form-control" placeholder="date">
                </div> 
                <button class="btn btn-primary m-4" >
                    Cerca Movie
                </button> 

            </form>
        </div>
    </div>

</div>
@endsection