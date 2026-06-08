@extends('keep/_base')

@section('conteudo')
    <p>Lixeira 🗑️</p>
    <a href="{{ @route('keep.index') }}">Voltar</a>
    <hr>

    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding: 2px; width:200px;display:inline-block;margin:5px; "> 
            {{ $nota['nota'] }}&MediumSpace;|&MediumSpace; Apagado: {{ \Carbon\Carbon::parse($nota['deleted_at'])->diffForHumans() }}
            <br>
            <a href="{{ @route('keep.trash.restore', $nota['id']) }}">Restaurar</a>
        </div>
    @endforeach
@endsection