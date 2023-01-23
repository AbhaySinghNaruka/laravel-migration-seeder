@extends('layouts.app')
@section('content')
    <h1>Treni</h1>
    @foreach ($train)
     <ul>
        <li>{{ $train->azienda }}</li>
        <li>{{ $train->stazione_partenza }}</li>
        <li>{{ $train->stazione_arrivo }}</li>
        <li>{{ $train->orario_partenza }}</li>
        <li>{{ $train->orario_arrivo }}</li>
        <li>{{ $train->codice_treno }}</li>
        <li>{{ $train->numero_carrozze }}</li>
    </ul>
    @endforeach

@endsection
