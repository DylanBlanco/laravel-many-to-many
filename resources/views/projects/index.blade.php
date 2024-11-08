@extends('layouts.app')

@section('page-title', 'Tutti i project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tutti i Project
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>
                            <a href="{{ route('projects.create') }}" class="btn btn-success  w-100">Crea Nuovo Project</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Data Creazione</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row"> {{ $project->id }} </th>
                            <td>
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 250px">
                            </td>
                            <td> {{ $project->title }} </td>
                            <td> {{ $project->author }} </td>
                            <td> {{ $project->date_create }} </td>
                            <td> {{ $project->description }} </td>
                            <td>
                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary my-1  w-100">Visualizza</a>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary my-1  w-100">Modifica</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit">Elimina</button> --}}
                                    {{-- <button type="submit" value="Cancella" class="btn btn-danger">Cancella</button> --}}
                                    <input type="submit" value="Cancella" class="btn btn-danger my-1 w-100">
                                </form>
                            </td>
                        </tr>    
                    @endforeach
                    <tr>
                        <td></td>
                        <td>
                            <a href="{{ route('projects.create') }}" class="btn btn-success  w-100">Crea Nuovo Project</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
