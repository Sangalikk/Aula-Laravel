<!-- keep/create.blade.php -->
@extends('keep/_base')
@section('conteudo')
    <form method="post">   
        <textarea name="nota"></textarea>
        <br>
        <input type="submit" value="Gravar">
    </form>
    <p><a href="{{ @route('keep.index') }}">Voltar</a></p>
@endsection