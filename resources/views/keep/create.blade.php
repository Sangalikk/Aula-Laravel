<!-- keep/create.blade.php -->
@extends('keep/_base')
@section('conteudo')
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form enctype="multipart/form-data" method="post" action="{{ isset($nota) ?
    route('keep.edit', $nota['id']) : route('keep.create') }}">   
        @csrf
        @if (isset($nota))
            @method('put')
        @endif 
        <textarea name="nota">{{ old('nota', $nota['nota'] ?? '') }}</textarea>
        <br>
        <input type="color" name="cor" value= "{{ old('cor', $nota['cor'] ?? '') }}">
        <br>
        <br>
        Imagem: <input type="file" name="imagem">
        <br>
        <br>
        <input type="submit" value="Gravar">
    </form>
    <iframe width="110" height="200" src="https://www.myinstants.com/instant/fahhhhhhhhhhhhhh-3525/embed/" frameborder="0" scrolling="no"></iframe>
    <p><a href="{{ route('keep.index') }}">Cancelar</a></p>
@endsection