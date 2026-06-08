@extends('keep/_base')

@section('conteudo')
    <p>Bem-vindo ao Little Keep!</p>
    <a href="{{ @route('keep.create') }}">Adicionar nota</a>
    <p><a href="{{  @route('keep.trash') }}">Lixeira</a></p>
    <hr>
    @if (session('mensagem'))
    <div>{{ session('mensagem') }}</div>
    @endif
    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding: 2px; width:200px;display:inline-block;margin:5px; "> 
            {{ $nota['nota'] }}&MediumSpace;|&MediumSpace; Criada: {{ \Carbon\Carbon::parse($nota['created_at'])->diffForHumans() }}
            @if ($nota['created_at'] != $nota['updated_at'])
            <br>
            Editada: {{ \Carbon\Carbon::parse($nota['updated_at'])->diffForHumans() }}
            @endif

            <br>
            <a href="{{ route('keep.edit', $nota['id']) }}">Editar</a>
            <a href="{{ route('keep.delete', $nota['id']) }}">Excluir</a>
        </div>
    @endforeach
@endsection