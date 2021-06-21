@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-stretch container mt-4">
        @if ($candidates->count() == 0)
            <div class="alert alert-warning" role="alert">
                Não há nenhum candidato cadastrado no sistema.
            </div>
        @endif
    </div>
    <div class="d-flex justify-content-center align-items-center container mt-4">
        <form action="{{route('candidates.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label text-white">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-labelledby="emailnotification">
            </div>
            <div class="form-group">
                <label for="party" class="control-label text-white">Partido</label>
                <input type="text" class="form-control" id="party" name="party" aria-labelledby="passwordnotification">
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Adicionar" class="form-control btn btn-light" aria-labelledby="submitbutton">
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-center align-items-stretch container mt-4">
        <div class="card-deck">
        @foreach ($candidates as $candidate)
            <div class="card border-dark" style="display: inline-block">
                <div class="card-header">Candidato</div>
                <div class="card-body text-dark">
                <h5 class="card-title">{{$candidate->name}}</h5>
                <p class="card-text">{{$candidate->party}}</p>
                <p class="card-text">Votos: {{$candidate->vote_count}}</p>
                <form action="{{route('candidates.destroy',$candidate->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
