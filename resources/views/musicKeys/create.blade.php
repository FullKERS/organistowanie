@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tworzenie tonacji</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dodaj tonację</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('musicKey.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nazwa:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="transpositionDown">Transpozycja w dół:</label>
                    <input type="number" name="transpositionDown" id="transpositionDown" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="transpositionUp">Transpozycja w górę:</label>
                    <input type="number" name="transpositionUp" id="transpositionUp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="chord1">Akord I:</label>
                    <select name="chord1" id="chord1" class="form-control" required>
                        <option value="C-dur">C-dur</option>
                        <option value="Cis-dur">Cis-dur</option>
                        <option value="D-dur">D-dur</option>
                        <option value="Dis-dur">Dis-dur</option>
                        <option value="E-dur">E-dur</option>
                        <option value="F-dur">F-dur</option>
                        <option value="Fis-dur">Fis-dur</option>
                        <option value="G-dur">G-dur</option>
                        <option value="Gis-dur">Gis-dur</option>
                        <option value="A-dur">A-dur</option>
                        <option value="B-dur">B-dur</option>
                        <option value="H-dur">H-dur</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chord2">Akord II:</label>
                    <select name="chord2" id="chord2" class="form-control" required>
                        <option value="C-mol">C-mol</option>
                        <option value="Cis-mol">Cis-mol</option>
                        <option value="D-mol">D-mol</option>
                        <option value="Dis-mol">Dis-mol</option>
                        <option value="E-mol">E-mol</option>
                        <option value="F-mol">F-mol</option>
                        <option value="Fis-mol">Fis-mol</option>
                        <option value="G-mol">G-mol</option>
                        <option value="Gis-mol">Gis-mol</option>
                        <option value="A-mol">A-mol</option>
                        <option value="B-mol">B-mol</option>
                        <option value="H-mol">H-mol</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chord3">Akord III:</label>
                    <select name="chord3" id="chord3" class="form-control" required>
                        <option value="C-mol">C-mol</option>
                        <option value="Cis-mol">Cis-mol</option>
                        <option value="D-mol">D-mol</option>
                        <option value="Dis-mol">Dis-mol</option>
                        <option value="E-mol">E-mol</option>
                        <option value="F-mol">F-mol</option>
                        <option value="Fis-mol">Fis-mol</option>
                        <option value="G-mol">G-mol</option>
                        <option value="Gis-mol">Gis-mol</option>
                        <option value="A-mol">A-mol</option>
                        <option value="B-mol">B-mol</option>
                        <option value="H-mol">H-mol</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chord4">Akord IV:</label>
                    <select name="chord4" id="chord4" class="form-control" required>
                        <option value="C-dur">C-dur</option>
                        <option value="Cis-dur">Cis-dur</option>
                        <option value="D-dur">D-dur</option>
                        <option value="Dis-dur">Dis-dur</option>
                        <option value="E-dur">E-dur</option>
                        <option value="F-dur">F-dur</option>
                        <option value="Fis-dur">Fis-dur</option>
                        <option value="G-dur">G-dur</option>
                        <option value="Gis-dur">Gis-dur</option>
                        <option value="A-dur">A-dur</option>
                        <option value="B-dur">B-dur</option>
                        <option value="H-dur">H-dur</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chord5">Akord V:</label>
                    <select name="chord5" id="chord5" class="form-control" required>
                        <option value="C-dur">C-dur</option>
                        <option value="Cis-dur">Cis-dur</option>
                        <option value="D-dur">D-dur</option>
                        <option value="Dis-dur">Dis-dur</option>
                        <option value="E-dur">E-dur</option>
                        <option value="F-dur">F-dur</option>
                        <option value="Fis-dur">Fis-dur</option>
                        <option value="G-dur">G-dur</option>
                        <option value="Gis-dur">Gis-dur</option>
                        <option value="A-dur">A-dur</option>
                        <option value="B-dur">B-dur</option>
                        <option value="H-dur">H-dur</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chord6">Akord VI:</label>
                    <select name="chord6" id="chord6" class="form-control" required>
                        <option value="C-mol">C-mol</option>
                        <option value="Cis-mol">Cis-mol</option>
                        <option value="D-mol">D-mol</option>
                        <option value="Dis-mol">Dis-mol</option>
                        <option value="E-mol">E-mol</option>
                        <option value="F-mol">F-mol</option>
                        <option value="Fis-mol">Fis-mol</option>
                        <option value="G-mol">G-mol</option>
                        <option value="Gis-mol">Gis-mol</option>
                        <option value="A-mol">A-mol</option>
                        <option value="B-mol">B-mol</option>
                        <option value="H-mol">H-mol</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chord7">Akord VII:</label>
                    <select name="chord7" id="chord7" class="form-control" required>
                        <option value="C-zm">C-zm</option>
                        <option value="Cis-zm">Cis-zm</option>
                        <option value="D-zm">D-zm</option>
                        <option value="Dis-zm">Dis-zm</option>
                        <option value="E-zm">E-zm</option>
                        <option value="F-zm">F-zm</option>
                        <option value="Fis-zm">Fis-zm</option>
                        <option value="G-zm">G-zm</option>
                        <option value="Gis-zm">Gis-zm</option>
                        <option value="A-zm">A-zm</option>
                        <option value="B-zm">B-zm</option>
                        <option value="H-zm">H-zm</option>
                    </select>
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
