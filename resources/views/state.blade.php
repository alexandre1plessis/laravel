@extends("base")
@section('contenu')
    {{ $etat->getEtat() }}<br>
    {{ $etat->modifEtat('Peindre') }}<br>
    {{ $etat->getEtat() }}
@endsection
@section('title')
    State
@endsection
