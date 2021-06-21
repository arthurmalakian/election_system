@extends('layouts.app')

@section('title')
Sistema de Eleição - Vote Já!
@endsection

@section('content')

@if (session('danger'))
<div class="alert alert-danger align-items-center" role="alert">
    {{session('danger')}}
</div>
@endif
@if (session('success'))
<div class="alert alert-success align-items-center" role="alert">
    {{session('success')}}
</div>
@endif
<div class="d-flex justify-content-center align-items-stretch container mt-4">
    @if ($candidates->count() == 0)
        <div class="alert alert-warning" role="alert">
            Não há nenhum candidato cadastrado no sistema.
        </div>
    @endif
    @foreach ($candidates as $candidate)
        <div class="p-2 bd-highlight">
            <form action="{{route('votes.store')}}" method="post">
                @csrf
                <div class="card border-dark mb-3 text-center">
                    <div class="card-header">
                        <label class="form-check-label" for="candidate">Selecionar Candidato
                        <input class="form-check-input" type="radio" name="candidate_id" id="candidate" value="{{$candidate->id}}">
                    </div>
                    <div class="card-body text-dark">
                    <h5 class="card-title">{{$candidate->name}}</h5>
                    <p class="card-text">{{$candidate->party}}</p>
                    </div>
                </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center align-items-center container mt-4">
    <div class="p-2 bd-highlight mt-4">
        <label for="email" class="control-label text-white">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-labelledby="emailnotification">
        <small id="emailnotification" class="form-text {{session('danger') ? 'text-danger' : 'text-muted'}}"> * Um voto por e-mail</small>
    </div>
    <div class="p-2 bd-highlight">
        <label for="name" class="control-label text-white">Nome</label>
        <input type="text" class="form-control" id="name" name="name" aria-labelledby="namenotification">
    </div>
    <div class="p-2 bd-highlight mt-4">
            <input type="submit" value="Votar" class="form-control btn btn-success" aria-labelledby="submitbutton">
        </form>
    </div>
</div>
@endsection
