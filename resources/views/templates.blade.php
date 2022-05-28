@extends('layouts/app')

@section('title', 'Меню')

@section('header')
    @parent
@endsection

@section('content')
    <div class="container pb-5">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Номер документа</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($docs as $doc)
                <tr>
                    <th scope="row">{{ $doc->id }}</th>
                    <td>{{ $doc->number }}</td>
{{--                    <td><a href="{{ route('createForm1') }}">Создать</a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
