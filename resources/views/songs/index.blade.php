@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista utworów</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-10"><h3 class="card-title">Lista utworów</h3></div>
            <div class="col-2 text-right">
                <a href="{{route('songs.create')}}" class="btn">
                    <i class="fas fa-plus"></i> Dodaj
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nazwa</th>
                    <!-- Dodaj inne kolumny, jeśli są dostępne -->
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song)
                    <tr>
                        <td>{{ $song->name }}</td>

                        <!-- Wyświetl inne dane dla każdego utworu -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
