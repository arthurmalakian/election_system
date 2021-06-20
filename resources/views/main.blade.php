@extends('Layouts.app')

@section('content')

@isset($message)
<div class="alert alert-warning" role="alert">
    {{$message}}
</div>
@endisset
<div class="d-flex justify-content-center align-items-center container mt-4">
    <div class="row">
        @if ($candidates->count() == 0)
            <div class="alert alert-warning" role="alert">
                Não há nenhum candidato cadastrado no sistema.
            </div>
        @endif
        @foreach ($candidates as $candidate)
            <div class="col-12 col-sm-6 col-lg-3 mt-5">
                <form action="{{route('votes.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <label for="candidato">Selecionar Candidato</label>
                                <input type="radio" name="candidate_id" id="candidate_id" value="{{$candidate->id}}">
                            </div>
                            <div class="card-body text-dark">
                            <h5 class="card-title">{{$candidate->name}}</h5>
                            <p class="card-text">{{$candidate->party}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-labelledby="emailnotification">
                <small id="emailnotification" class="form-text text-muted">Um voto por e-mail</small>
            </div>
            <div class="form-group">
                <label for="name" class="control-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-labelledby="namenotification">
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Votar" class="form-control" aria-labelledby="submitbutton">
            </div>
        </form>

    </div>

</div>
@endsection
