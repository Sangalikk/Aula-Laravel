@extends('keep/_base')

@section('conteudo')
    <p>Bem-vindo ao Little Keep!</p>
    <a href="{{ @route('keep.create') }}">Adicionar nota</a>
    <hr>
    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding: 2px; ">
        {{ $nota['nota'] }}</div>
    @endforeach
@endsection