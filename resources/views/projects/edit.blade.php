@extends('layouts.app')

@section('page-title', 'Modifica Project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Modifica Project
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <form method="post" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="imnage" class="form-label">Carica Immagine</label>
                  <input type="file" class="form-control" id="imnage" name="imnage" value="{{ $project->image }}">
                </div>
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input value="{{ $project->title }}" type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input value="{{ $project->author }}" type="text" class="form-control" id="author" name="author" value="{{ $project->author }}">
                </div>
                <div class="mb-3">
                    <label for="date_create" class="form-label">Data di Creazione</label>
                    <input value="{{ $project->date_create }}" type="date" class="form-control" id="date_create" name="date_create" value="{{ $project->date_create }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input value="{{ $project->description }}" type="text" class="form-control" id="description" name="description" value="{{ $project->description }}">
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
@endsection
