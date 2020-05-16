@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>
        Adicionar um novo usuário
    </h1>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <h4><i class="icon fa fa-ban"></i>Ops! Ocorreu um erro.</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
            <div class="row">
            <label class="col-sm-4 control-label">Nome Completo</label>
                <div class="col-sm-8">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <label class="col-sm-4 control-label">Senha</label>
                <div class="col-sm-8">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <label class="col-sm-4 control-label">Confirmação da senha</label>
                <div class="col-sm-8">
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <label class="col-sm-4 control-label"></label>
                <div class="col-sm-8">
                    <input type="submit" value="Cadastrar" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
@endsection
