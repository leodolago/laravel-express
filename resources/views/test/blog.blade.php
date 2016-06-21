@extends('templateblog')

@section('titulo')
    {{$notas['title']}}
@stop

@section('conteudo')
    <h1>{{ $notas['title'] }}</h1>
    <h3>{{ $notas['subtitulo'] }}</h3>
    <ul>
        @foreach ($notas['content'] as $key => $value)
            <li><h4>{{ $value['title'] }}</h4></li>
            <li>{{ $value['post'] }}</li>
            <hr>
        @endforeach
    </ul>
@stop