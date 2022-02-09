@extends("base")
@section('contenu')
    {{ $v1->getText() }}<br>
    {{ $v2->getText() }}
@endsection
@section('title')
    Template
@endsection
