@extends('admin::layouts.content')

@section('page_title')
    Meu Supermercado de Exemplo
@endsection

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>Meu Supermercado de Exemplo</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('meusupexp.admin.create') }}" class="btn btn-lg btn-primary">Nova Loja (sup)</a>
            </div>
        </div>

        {{-- Formulário do DataGrid: --}}
        {!! app(ACME\HelloWorld\DataGrid\MeusEstabelecimentosDataGrid::class)->render() !!}
        {{-- Formulário do DataGrid. --}}

    </div>
@endsection