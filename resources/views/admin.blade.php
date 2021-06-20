@extends('Layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center container mt-4">
        <div class="col-12 col-sm-6 col-lg-3 mt-5">
                <div class="form-group">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Candidato</div>
                        <div class="card-body text-dark">
                        <h5 class="card-title">Nome Candidato</h5>
                        <p class="card-text">Partido do Candidato</p>
                        <p class="card-text">Votos: x</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center container mt-4">
        <form action="">
            <div class="form-group">
                <label for="name" class="control-label">Nome</label>
                <input type="name" class="form-control" id="name" aria-labelledby="emailnotification">
            </div>
            <div class="form-group">
                <label for="party" class="control-label">Partido</label>
                <input type="text" class="form-control" id="party" aria-labelledby="passwordnotification">
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Adicionar" class="form-control" aria-labelledby="submitbutton">
            </div>
        </form>
    </div>
@endsection
