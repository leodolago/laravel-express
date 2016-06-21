@extends('template')

@section('title')
    Minhas Anotações
@stop

@section('content')
    <h1> Anotações</h1>
    <ul>
        @foreach($notas as $nota)
        <li>{{$nota}}</li>
        @endforeach

        <?php /** foreach($notas as $nota): ?>
        <li><?=$nota;?> </li>
       <?php endforeach; */?>
    </ul>
@stop
