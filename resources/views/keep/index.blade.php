@extends('keep/_base')

@section('conteudo')
    <p>Bem-vindo ao Little Keep!</p>
    <a href="{{ @route('keep.create') }}">Adicionar nota</a>
    <hr>
    @if (session('mensagem'))
    <div>{{ session('mensagem') }}</div>
    @endif
    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding: 2px; "> 
            {{ $nota['nota'] }}&MediumSpace;|&MediumSpace;{{ \Carbon\Carbon::parse($nota['created_at'])->diffForHumans() }}
            <br>
            <a href="{{ route('keep.edit', $nota['id']) }}">Editar</a>
            <a href="{{ route('keep.delete', $nota['id']) }}">Excluir</a>
        </div>
    @endforeach
@endsection