@extends('layouts.app')

@section('page-title', 'Project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Project | {{ $project->title }}
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
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Data Creazione</th>
                        <th scope="col">Descrizione</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ $project->id }} </th>
                        <td>
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 250px">
                        </td>
                        <td> {{ $project->title }} </td>
                        <td> {{ $project->author }} </td>
                        <td> {{ $project->date_create }} </td>
                        <td> {{ $project->description }} </td>
                    </tr>    
                </tbody>
            </table>
        </div>
    </div>
@endsection
