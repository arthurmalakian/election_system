@extends('layouts.app')
@section('title')
Autenticação - Sistema de Eleição
@endsection
@section('content')
    <div class="d-flex justify-content-center align-items-center container mt-4">
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('danger'))
        <div class="alert alert-danger align-items-center" role="alert">
            {{session('danger')}}
        </div>
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center container mt-4">
        <div class="row">
            <form action="{{route('auth.user')}}" method="post">
                @csrf
                <div class="text-center text-white">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-labelledby="emailnotification">
                </div>
                <div class="text-center text-white">
                    <label for="password" class="control-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" aria-labelledby="passwordnotification">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" value="Acessar painel" class="form-control btn btn-light" aria-labelledby="submitbutton">
                </div>
            </form>
        </div>
    </div>
@endsection
