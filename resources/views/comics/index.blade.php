@extends('layouts.main')

@section('content')
   <div class="container"> 

    <h1>My cOmics</h1>
       <table>
          <thead>
             <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>THUMB</th>
                <th>PRICE</th>
                <th>SERIES</th>
                <th>DATE</th>
                <th>TYPE</th>
             </tr>
          </thead>
          <tbody>
             @foreach ($comics as $comic)
               <tr>
                  <td>{{ $comic->id }}</td>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->description }}</td>
                  <td>{{ $comic->price }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ $comic->date}}</td>
                  <td>{{ $comic->type }}</td>
               </tr>
              @endforeach
          </tbody>
       </table>

   </div>

@endsection