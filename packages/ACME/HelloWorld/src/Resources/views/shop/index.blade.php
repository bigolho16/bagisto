@extends('shop::layouts.master')

@section('page_title')
    Hello World (exemplo de supermarket)

@endsection

@section('content-wrapper')
    <h2>Hello World (exemplo de supermarket) Shop</h2>

    {{-- {{ $meuPrimeiroCampo }} --}}

    @if(isset($meuPrimeiroCampo))
        <span>Os dados trazidos do Config do Admin usando método core() são: </span>{{ $meuPrimeiroCampo}}
    @endif

@endsection
