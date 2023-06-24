@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista utworów</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h3 class="card-title">Lista utworów</h3>
                </div>
                <div class="col-2 text-right">
                    <a href="{{ route('songs.create') }}" class="btn">
                        <i class="fas fa-plus"></i> Dodaj
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            {{-- Setup data for datatables --}}
            @php
                $heads = ['Nazwa', 'Tonacja', ['label' => 'Akcje', 'no-export' => true, 'width' => 5]];

                $config = [
                    'data' => $Songs,
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, ['orderable' => false]],
                ];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads">
                @foreach ($config['data'] as $row)
                    @php
                        $btnEdit = '<a href="'.route('songs.edit', $row->id).'" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edytuj">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </a>';
                        $btnDelete = '<a onclick="event.preventDefault(); if (confirm(\'Czy na pewno chcesz usunąć utwór '.$row->name.'?\')) document.getElementById(\'delete-song-'.$row->id.'\').submit();" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Usuń">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </a>';
                        $btnDetails = '<a class="btn btn-xs btn-default text-teal mx-1 shadow" title="Szczegóły">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a>';
                    @endphp
                    <tr>
                        <td>{!! $row['name'] !!}</td>
                        <td></td>
                        <td>
                            {!! '<nobr>' . $btnEdit . $btnDelete . $btnDetails . '</nobr>' !!}
                            <form id="delete-song-{{ $row->id }}" action="{{ route('songs.destroy', $row->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
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
