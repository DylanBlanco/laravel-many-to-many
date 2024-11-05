@extends('layouts.app')

@section('page-title', 'Technology')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Technology | {{ $technology->name }}
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
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Data Creazione</th>
                        <th scope="col">Descrizione</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ $technology->id }} </th>
                        <td> {{ $technology->name }} </td>
                        <td> {{ $technology->type }} </td>
                        <td> {{ $technology->date_create }} </td>
                        <td> {{ $technology->description }} </td>
                    </tr>    
                </tbody>
            </table>
        </div>
    </div>
@endsection
