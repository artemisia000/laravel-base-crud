@extends('layouts.main')

@section('content1')
   <div class="container"> 

    <h1>My cOmics</h1>
       <table>
          <thead>
             <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DATE</th>
                <th>TYPE</th>
             </tr>
          </thead>
          <tbody>
             @foreach ($comics as $comic)
               <tr>
                  <td>{{ $comic->id }}</td>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->sale_date}}</td>
                  <td>{{ $comic->type }}</td>
                  <td>
                     <a href="{{ route ('comics.show', $comic->id) }}">SHOW</a>
                  </td>
               </tr>
              @endforeach
          </tbody>
       </table>
       <button class="btn btn-primary">
          <a href="{{ route ('comics.create')}} ">Crea il tuo comics</a>
       </button>

   </div>

@endsection