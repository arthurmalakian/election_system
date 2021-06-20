@extends('Layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center container mt-4">
        <div class="row">
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-labelledby="emailnotification">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Senha</label>
                    <input type="password" class="form-control" id="password" aria-labelledby="passwordnotification">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" value="Login" class="form-control" aria-labelledby="submitbutton">
                </div>
            </form>
        </div>
    </div>
@endsection
