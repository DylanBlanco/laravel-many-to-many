@extends('layouts.app')

@section('page-title', 'Tutte le Technologies')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tutte le Technologies
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
                            <a href="{{ route('technologies.create') }}" class="btn btn-success  w-100">Crea Nuova Technology</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Data Creazione</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($technologies as $technology)
                        <tr>
                            <th scope="row"> {{ $technology->id }} </th>
                            <td> {{ $technology->name }} </td>
                            <td> {{ $technology->type }} </td>
                            <td> {{ $technology->date_create }} </td>
                            <td> {{ $technology->description }} </td>
                            <td>
                                <a href="{{ route('technologies.show', $technology->id) }}" class="btn btn-primary my-1  w-100">Visualizza</a>
                                <a href="{{ route('technologies.edit', $technology->id) }}" class="btn btn-primary my-1  w-100">Modifica</a>
                                <form action="{{ route('technologies.destroy', $technology->id) }}" method="post">
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
                            <a href="{{ route('technologies.create') }}" class="btn btn-success  w-100">Crea Nuova Technology</a>
                        </td>
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
