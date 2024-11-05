@extends('layouts.app')

@section('page-title', 'Modifica Technology')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Modifica Technology
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <form method="post" action="{{ route('technologies.store') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                  <label for="name" class="form-label">Nome</label>
                  <input value="{{ $technology->name }}" type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input value="{{ $technology->type }}" type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="mb-3">
                    <label for="date_create" class="form-label">Data di Creazione</label>
                    <input value="{{ $technology->date_create }}" type="date" class="form-control" id="date_create" name="date_create">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input value="{{ $technology->description }}" type="text" class="form-control" id="description" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
              </form>
        </div>
    </div>
@endsection
