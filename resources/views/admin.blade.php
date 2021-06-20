@extends('Layouts.app')

@section('content')
    @if ($candidates->count() == 0)
        <div class="alert alert-warning" role="alert">
            Não há nenhum candidato cadastrado no sistema.
        </div>
    @endif
    @foreach ($candidates as $candidate)
        <div class="d-flex justify-content-center align-items-center container mt-4">
            <div class="col-12 col-sm-6 col-lg-3 mt-5">
                    <div class="form-group">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
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
                    </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center align-items-center container mt-4">
        <form action="{{route('candidates.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name" class="control-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-labelledby="emailnotification">
            </div>
            <div class="form-group">
                <label for="party" class="control-label">Partido</label>
                <input type="text" class="form-control" id="party" name="party" aria-labelledby="passwordnotification">
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Adicionar" class="form-control" aria-labelledby="submitbutton">
            </div>
        </form>
    </div>
@endsection
