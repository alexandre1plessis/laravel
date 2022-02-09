@extends("base")
@section('contenu')
    {{ $a->increment() }}<br>
    {{ $b->increment() }}<br>
    {{ $a->increment() }}
@endsection
@section('title')
    Singleton
@endsection
