@extends('layouts/app')

@section('title', 'Создать документ')

@section('header')
@parent
@endsection

@section('content')
<div class="container pb-5">
    <h1 class="text-center">Авторский договор с дизайнером</h1>
    <form method="post" action="{{ route('addAuthorContractDesigner') }}">
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
            <label for="number" class="form-label">Номер договора</label>
            <input type="text" class="form-control" id="number" name="number" value="{{@old('number')}}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Дата составления договора</label>
            <input type="date" class="form-control" id="date" name="date" value="{{@old('date')}}">
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Заказчик</label>
            <input type="text" class="form-control" id="customer" name="customer" value="{{@old('customer')}}">
        </div>
        <div class="mb-3">
            <label for="customer_repr" class="form-label">В лице</label>
            <input type="text" class="form-control" id="customer_repr" name="customer_repr" value="{{@old('customer_repr')}}">
        </div>
        <div class="mb-3">
            <label for="designer" class="form-label">Исполнитель</label>
            <input type="text" class="form-control" id="designer" name="designer" value="{{@old('designer')}}">
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Изображения</label>
            <input type="text" class="form-control" id="images" name="images" value="{{@old('images')}}">
        </div>
        <div class="mb-3">
            <label for="territory" class="form-label">Распространение на территории</label>
            <input type="text" class="form-control" id="territory" name="territory" value="{{@old('territory')}}">
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Срок оплаты</label>
            <input type="number" class="form-control" id="time" name="time" value="{{@old('time')}}">
        </div>
        <div class="mb-3">
            <label for="reward" class="form-label">Размер вознаграждения</label>
            <input type="number" class="form-control" id="reward" name="reward" value="{{@old('reward')}}" step="0.01">
        </div>
        <div class="mb-3">
            <label for="contract_days" class="form-label">Дни действия договора</label>
            <input type="number" class="form-control" id="contract_days" name="contract_days" value="{{@old('contract_days')}}">
        </div>
        <div class="mb-3">
            <label for="customer_address" class="form-label">Адрес заказчика</label>
            <input type="text" class="form-control" id="customer_address" name="customer_address" value="{{@old('customer_address')}}">
        </div>
        <div class="mb-3">
            <label for="customer_pay" class="form-label">Банковские реквизиты заказчика</label>
            <input type="text" class="form-control" id="customer_pay" name="customer_pay" value="{{@old('customer_pay')}}">
        </div>
        <div class="mb-3">
            <label for="customer_tel" class="form-label">Телефон (факс) заказчика</label>
            <input type="text" class="form-control" id="customer_tel" name="customer_tel" value="{{@old('customer_tel')}}">
        </div>
        <div class="mb-3">
            <label for="designer_address" class="form-label">Домашний адрес исполнителя</label>
            <input type="text" class="form-control" id="designer_address" name="designer_address" value="{{@old('designer_address')}}">
        </div>
        <div class="mb-3">
            <label for="designer_passport" class="form-label">Пасспорт исполнителя</label>
            <input type="text" class="form-control" id="designer_passport" name="designer_passport" value="{{@old('designer_passport')}}">
        </div>
        <div class="mb-3">
            <label for="designer_phone" class="form-label">Телефог исполнителя</label>
            <input type="text" class="form-control" id="designer_phone" name="designer_phone" value="{{@old('designer_phone')}}">
        </div>
        <div class="mb-3">
            <label for="tax_data" class="form-label">Особые данные для налогообложения</label>
            <input type="text" class="form-control" id="tax_data" name="tax_data" value="{{@old('tax_data')}}">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
