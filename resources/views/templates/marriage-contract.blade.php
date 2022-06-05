@extends('layouts/app')

@section('title', 'Создать документ')

@section('header')
    @parent
@endsection

@section('content')
    <div class="container pb-5">
        <h1 class="text-center">Брачный договор</h1>
        <form method="post" action="{{ route('addMarriageContract') }}">
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
                <label for="date" class="form-label">Дата составления</label>
                <input type="date" class="form-control" id="date" name="date" value="{{@old('date')}}">
            </div>
            <div class="mb-3">
                <label for="husband" class="form-label">ФИО мужа</label>
                <input type="text" class="form-control" id="husband" name="husband" value="{{@old('husband')}}">
            </div>
            <div class="mb-3">
                <label for="wife" class="form-label">ФИО Жены</label>
                <input type="text" class="form-control" id="wife" name="wife" value="{{@old('wife')}}">
            </div>
            <div class="mb-3">
                <label for="husband_name" class="form-label">Фамилия мужа</label>
                <input type="text" class="form-control" id="husband_name" name="husband_name"
                       value="{{@old('husband_name')}}">
            </div>
            <div class="mb-3">
                <label for="husband_flat" class="form-label">Площадь квартиры мужа</label>
                <input type="number" class="form-control" id="husband_flat" name="husband_flat"
                       value="{{@old('husband_flat')}}">
            </div>
            <div class="mb-3">
                <label for="husband" class="form-label">Адрес квартиры мужа</label>
                <input type="text" class="form-control" id="husband_flat_address" name="husband_flat_address"
                       value="{{@old('husband_flat_address')}}">
            </div>
            <div class="mb-3">
                <label for="husband_car_model" class="form-label">Модель машины мужа</label>
                <input type="text" class="form-control" id="husband_car_model" name="husband_car_model"
                       value="{{@old('husband_car_model')}}">
            </div>
            <div class="mb-3">
                <label for="husband_car_engine_number" class="form-label">Номер двигателя автомобиля</label>
                <input type="text" class="form-control" id="husband_car_engine_number" name="husband_car_engine_number"
                       value="{{@old('husband_car_engine_number')}}">
            </div>
            <div class="mb-3">
                <label for="husband_car_engine_body" class="form-label">Номер кузова автомобиля</label>
                <input type="number" class="form-control" id="husband_car_engine_body" name="husband_car_engine_body"
                       value="{{@old('husband_car_engine_body')}}">
            </div>
            <div class="mb-3">
                <label for="husband_car_register" class="form-label">Регистрация автомобиля мужа</label>
                <input type="text" class="form-control" id="husband_car_register" name="husband_car_register"
                       value="{{@old('husband_car_register')}}">
            </div>
            <div class="mb-3">
                <label for="husband_garage" class="form-label">Адрес гаража мужа</label>
                <input type="text" class="form-control" id="husband_garage" name="husband_garage"
                       value="{{@old('husband_garage')}}">
            </div>
            <div class="mb-3">
                <label for="wife_name" class="form-label">Фамилия жены</label>
                <input type="text" class="form-control" id="wife_name" name="wife_name" value="{{@old('wife_name')}}">
            </div>
            <div class="mb-3">
                <label for="wife_property_1" class="form-label">Собственность жены 1</label>
                <input type="text" class="form-control" id="wife_property_1" name="wife_property_1"
                       value="{{@old('wife_property_1')}}">
            </div>
            <div class="mb-3">
                <label for="wife_property_2" class="form-label">Собственность жены 2</label>
                <input type="text" class="form-control" id="wife_property_2" name="wife_property_2"
                       value="{{@old('wife_property_2')}}">
            </div>
            <div class="mb-3">
                <label for="wife_property_3" class="form-label">Собственность жены 3</label>
                <input type="text" class="form-control" id="wife_property_3" name="wife_property_3"
                       value="{{@old('wife_property_3')}}">
            </div>
            <div class="mb-3">
                <label for="wife_property_4" class="form-label">Собственность жены 4</label>
                <input type="text" class="form-control" id="wife_property_4" name="wife_property_4"
                       value="{{@old('wife_property_4')}}">
            </div>
            <div class="mb-3">
                <label for="sum" class="form-label">Предварительное письменное согласие другого супруга необходимо при
                    отчуждении и приобретении имущества, если сумма сделки превышает</label>
                <input type="number" class="form-control" id="sum" name="sum" value="{{@old('sum')}}" step="0.01">
            </div>
            <div class="row mb-3">
                <div class="col-auto">
                    <label for="husband_passport_series" class="form-label">Серия паспорта мужа</label>
                    <input type="text" class="form-control" id="husband_passport_series" name="husband_passport_series"
                           value="{{@old('husband_passport_series')}}">
                </div>
                <div class="col-auto">
                    <label for="husband_passport_number" class="form-label">Номер паспорта мужа</label>
                    <input type="text" class="form-control" id="husband_passport_number" name="husband_passport_number"
                           value="{{@old('husband_passport_number')}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="husband_issued" class="form-label">Выдан</label>
                <input type="text" class="form-control" id="husband_issued" name="husband_issued"
                       value="{{@old('husband_issued')}}">
            </div>
            <div class="mb-3">
                <label for="husband_issued_address" class="form-label">Адрес</label>
                <input type="text" class="form-control" id="husband_issued_address" name="husband_issued_address"
                       value="{{@old('husband_issued_address')}}">
            </div>
            <div class="row mb-3">
                <div class="col-auto">
                    <label for="wife_passport_series" class="form-label">Серия паспорта жены</label>
                    <input type="text" class="form-control" id="wife_passport_series" name="wife_passport_series"
                           value="{{@old('wife_passport_series')}}">
                </div>
                <div class="col-auto">
                    <label for="wife_passport_number" class="form-label">Номер паспорта жены</label>
                    <input type="text" class="form-control" id="wife_passport_number" name="wife_passport_number"
                           value="{{@old('wife_passport_number')}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="wife_issued" class="form-label">Выдан</label>
                <input type="text" class="form-control" id="wife_issued" name="wife_issued"
                       value="{{@old('wife_issued')}}">
            </div>
            <div class="mb-3">
                <label for="wife_issued_address" class="form-label">Адрес</label>
                <input type="text" class="form-control" id="wife_issued_address" name="wife_issued_address"
                       value="{{@old('wife_issued_address')}}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
