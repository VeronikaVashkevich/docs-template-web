@extends('layouts/app')

@section('title', 'Создать документ')

@section('header')
@parent
@endsection

@section('content')
<div class="container pb-5">
    <h1 class="text-center">Приказ о распределении обязанностей между руководством</h1>
    <form method="post" action="{{ route('addOrderDistributionResponsibilities') }}">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="mb-3">
            <label for="OKUD" class="form-label">Код по ОКУД</label>
            <input type="text" class="form-control" id="OKUD" name="OKUD" value="{{@old('OKUD')}}">
        </div>
        <div class="mb-3">
            <label for="order_date" class="form-label">Дата приказа</label>
            <input type="date" class="form-control" id="order_date" name="order_date" value="{{@old('order_date')}}">
        </div>
        <div class="mb-3">
            <label for="order_number" class="form-label">Номер приказа</label>
            <input type="text" class="form-control" id="order_number" name="order_number" value="{{@old('order_number')}}">
        </div>
        <div class="mb-3">
            <label for="reason" class="form-label">Основание</label>
            <input type="text" class="form-control" id="reason" name="reason" value="{{@old('reason')}}">
        </div>
        <div class="mb-3">
            <label for="responsibility1" class="form-label">Обязанность 1</label>
            <input type="text" class="form-control" id="responsibility1" name="responsibility1" value="{{@old('responsibility1')}}">
        </div>
        <div class="mb-3">
            <label for="responsibility2" class="form-label">Обязанность 2</label>
            <input type="text" class="form-control" id="responsibility2" name="responsibility2" value="{{@old('responsibility2')}}">
        </div>
        <div class="mb-3">
            <label for="responsibility3" class="form-label">Обязанность 3</label>
            <input type="text" class="form-control" id="responsibility3" name="responsibility3" value="{{@old('responsibility3')}}">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
