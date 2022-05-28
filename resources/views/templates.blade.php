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
                <th scope="col">Название шаблона</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Форма 1</td>
                <td><a href="{{ route('createForm1') }}">Создать</a></td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection
