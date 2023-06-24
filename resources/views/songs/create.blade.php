@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista utworów</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10"><h3 class="card-title">Dodaj utwór</h3></div>
                <div class="col-2 text-right">
                    <a href="{{url()->previous()}}" class="btn">
                        <i class="fas fa fa-chevron-circle-left"></i> Powrót do listy
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('songs.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nazwa utworu:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="music_key_id">Tonacja muzyczna:</label>
                    <select name="music_key_id" class="form-control">
                        <option value=""></option>
                        @foreach($musicKeys as $musicKey)
                            <option value="{{ $musicKey->id }}">{{ $musicKey->name }} ({{$musicKey->transpositionDown}} / {{$musicKey->transpositionUp}})</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="songBeginCdur">Początek utworu w C-dur:</label>
                    <input type="text" name="songBeginCdur" id="songBeginCdur" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="openSongText">Tekst utworu:</label>
                    <textarea name="openSongText" id="openSongText" class="form-control" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
