<!-- keep/delete.blade.php -->
@extends('keep/_base')

@section('conteudo')
<p>Apagar nota</p>
<br>
<p>Tens certeza que desejas apagar a tua nota?</p>
<p style="border:1px solid green">{{ Str::limit($nota['nota'], 50) }}</p>

<form action="{{ route('keep.delete', $nota['id']) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Sim, Apagar!"> 
</form>

<a href="{{ route('keep.index') }}">Não, voltar</a>
@endsection