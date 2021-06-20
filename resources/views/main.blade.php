@extends('Layouts.app')

@section('content')


<div class="d-flex justify-content-center align-items-center container mt-4">
    <div class="row">
        {{-- foreach-this --}}
        <div class="col-12 col-sm-6 col-lg-3 mt-5">
            <form action="">
                <div class="form-group">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <label for="candidato">Selecionar Candidato</label>
                            <input type="radio" name="candidato" id="candidato-id" value="candidato-value">
                        </div>
                        <div class="card-body text-dark">
                        <h5 class="card-title">Nome Candidato</h5>
                        <p class="card-text">Partido do Candidato</p>
                        </div>
                    </div>
                </div>
        </div>
        {{-- foreach this --}}
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="email" class="form-control" id="email" aria-labelledby="emailnotification">
                <small id="emailnotification" class="form-text text-muted">Um voto por e-mail</small>
            </div>
            <div class="form-group">
                <label for="name" class="control-label">Nome</label>
                <input type="text" class="form-control" id="name" aria-labelledby="namenotification">
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Votar" class="form-control" aria-labelledby="submitbutton">
            </div>
        </form>

    </div>

</div>
@endsection
