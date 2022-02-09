@extends("base")
@section('contenu')

    {{ $obs1->display() }}<br>
    {{ $obs2->display() }}

@endsection
@section('title')
    Observateur
@endsection