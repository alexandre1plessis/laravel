@extends("base")
@section('contenu')
    {{ $concession->getGarage() }}<br>
@endsection
@section('title')
    Facade
@endsection
