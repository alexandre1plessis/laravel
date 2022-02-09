@extends("base")
@section('contenu')
    {{ $v1->getMarque() }}<br>
    {{ $v2->getMarque() }}
@endsection
@section('title')
    Factory
@endsection
