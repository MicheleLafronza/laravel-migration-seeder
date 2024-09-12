{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
    
    <h1 class="text-center">Titolo</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Azienda</th>
            <th scope="col">Parte da</th>
            <th scope="col">Arriva a</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice del treno</th>
            <th scope="col">Carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
            <th scope="col">Data di partenza</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
            
          <tr>
            <th scope="row">{{$train->id}}</th>
            <td>{{$train->Company}}</td>
            <td>{{$train->From}}</td>
            <td>{{$train->To}}</td>
            <td>{{$train->Departure_time}}</td>
            <td>{{$train->Arrive_time}}</td>
            <td>{{$train->Train_code}}</td>
            <td>{{$train->Vagons}}</td>
            <td>
                @if ($train->In_time === 1)
                    Si
                @else
                    No
                @endif
            </td>
            <td>
                @if ($train->Cancelled === 1)
                    Si
                @else
                    No
                @endif
            </td>
            <td>{{$train->created_at->format('d/m/Y')}}</td>
          </tr>
              
          @endforeach  
          
        </tbody>
      </table>


   
</div>

@endsection
