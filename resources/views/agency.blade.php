{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5">
    
    <h1 class="text-center">Viaggi</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Destinazione</th>
            <th scope="col">Giorno di partenza</th>
            <th scope="col">Giorno di ritorno</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Cancellazione gratuita</th>
            <th scope="col">Pranzi e cene incluse</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($travels as $travel)
          <tr>
                <td>{{ $travel->destination }}</td>
                <td>{{ \Carbon\Carbon::parse($travel->departure_day)->format('d-m-Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($travel->return_day)->format('d-m-Y') }}</td>
                <td>{{ $travel->price }} euro</td>
                <td>{{ $travel->cancellable ? 'Si' : 'No'}}</td>
                <td>{{ $travel->food_included ? 'Si' : 'No' }}</td>
          </tr>
          @endforeach  
        </tbody>
      </table>
</div>
@endsection