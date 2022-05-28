@extends('layouts/app')

@section('title', 'Меню')

@section('header')
    @parent
@endsection

@section('content')
    <div class="container pb-5">
        <form method="post" action="{{ route('addForm1') }}">
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
                <label for="place" class="form-label">Место составления договора</label>
                <input type="text" class="form-control" id="place" name="place" value="{{@old('place')}}">
            </div>
            {{-- Поставщик --}}
            <div class="mb-3">
                <label for="provider_org_full_name" class="form-label">Полное название организации</label>
                <input type="text" class="form-control" id="provider_org_full_name" name="provider_org_full_name" value="{{@old('provider_org_full_name')}}">
            </div>
            <div class="mb-3">
                <label for="provider_org_employee_fio" class="form-label">ФИО</label>
                <input type="text" class="form-control" id="provider_org_employee_fio" name="provider_org_employee_fio" value="{{@old('provider_org_employee_fio')}}">
            </div>
            <div class="mb-3">
                <label for="provider_org_employee_position" class="form-label">Должность</label>
                <input type="text" class="form-control" id="provider_org_employee_position"
                       name="provider_org_employee_position" value="{{@old('provider_org_employee_position')}}">
            </div>
            <div class="mb-3">
                <label for="provider_doc_name" class="form-label">Наименование документа</label>
                <input type="text" class="form-control" id="provider_doc_name" name="provider_doc_name" value="{{@old('provider_doc_name')}}">
            </div>
            {{-- Покупатель --}}
            <div class="mb-3">
                <label for="customer_org_full_name" class="form-label">Полное название организации</label>
                <input type="text" class="form-control" id="customer_org_full_name" name="customer_org_full_name" value="{{@old('customer_org_full_name')}}">
            </div>
            <div class="mb-3">
                <label for="customer_org_employee_fio" class="form-label">ФИО</label>
                <input type="text" class="form-control" id="customer_org_employee_fio" name="customer_org_employee_fio" value="{{@old('customer_org_employee_fio')}}">
            </div>
            <div class="mb-3">
                <label for="customer_org_employee_position" class="form-label">Должность</label>
                <input type="text" class="form-control" id="customer_org_employee_position"
                       name="customer_org_employee_position" value="{{@old('customer_org_employee_position')}}">
            </div>
            <div class="mb-3">
                <label for="customer_doc_name" class="form-label">Наименование документа</label>
                <input type="text" class="form-control" id="customer_doc_name" name="customer_doc_name" value="{{@old('customer_doc_name')}}">
            </div>
            {{-- Товар --}}
            <div class="mb-3">
                <label for="product" class="form-label">Наименование товара</label>
                <input type="text" class="form-control" id="product" name="product" value="{{@old('product')}}">
            </div>
            {{-- Цель приобретения --}}
            <div class="mb-3">
                <label for="purpose_acquisition" class="form-label">Цель приобретения</label>
                <input type="text" class="form-control" id="purpose_acquisition" name="purpose_acquisition" value="{{@old('purpose_acquisition')}}">
            </div>
            {{-- Полная сумма приобретения --}}
            <div class="row mb-3">
                <div class="col-auto">
                    <label for="full_price_rub" class="form-label">Полная цена (рублей)</label>
                    <input type="text" class="form-control" id="full_price_rub" name="full_price_rub" value="{{@old('full_price_rub')}}">
                </div>
                <div class="col-auto">
                    <label for="full_price_kop" class="form-label">Полная цена (коп)</label>
                    <input type="text" class="form-control" id="full_price_kop" name="full_price_kop" value="{{@old('full_price_kop')}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-auto">
                    <label for="vat" class="form-label">В том числе НДС (%)</label>
                    <input type="text" class="form-control" id="vat" name="vat" value="{{@old('vat')}}">
                </div>
                <div class="col-auto">
                    <label for="vat_price_rub" class="form-label">НДС (рублей)</label>
                    <input type="text" class="form-control" id="vat_price_rub" name="vat_price_rub" value="{{@old('vat_price_rub')}}">
                </div>
                <div class="col-auto">
                    <label for="vat_price_kop" class="form-label">НДС (коп)</label>
                    <input type="text" class="form-control" id="vat_price_kop" name="vat_price_kop" value="{{@old('vat_price_kop')}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="fin_source" class="form-label">Источник финансирования</label>
                <input type="text" class="form-control" id="fin_source" name="fin_source" value="{{@old('fin_source')}}">
            </div>
            <div class="mb-3">
                <label for="delivery" class="form-label">Поставка Товара осуществляется транспортом</label>
                <input type="text" class="form-control" id="delivery" name="delivery" value="{{@old('delivery')}}">
            </div>
            <div class="mb-3">
                <label for="fix_days" class="form-label">Устранение дефектов или замена Товара производится в течение</label>
                <input type="text" class="form-control" id="fix_days" name="fix_days" value="{{@old('fix_days')}}">
            </div>
            <div class="mb-3">
                <label for="force_majeure_days" class="form-label">Дни для уведомления о форс мажоре</label>
                <input type="text" class="form-control" id="force_majeure_days" name="force_majeure_days" value="{{@old('force_majeure_days')}}">
            </div>
            <div class="mb-3">
                <label for="change_days" class="form-label">Дни для уведомления об изменениях в договоре</label>
                <input type="text" class="form-control" id="change_days" name="change_days" value="{{@old('change_days')}}">
            </div>
            <div class="mb-3">
                <label for="additional_info" class="form-label">Дополнительная информация</label>
                <textarea name="additional_info" id="additional_info" cols="30" rows="5" class="form-control">{{@old('additional_info')}}</textarea>
            </div>
            {{-- Юридическая информация --}}
            <div class="row mb-3">
                <div class="col-auto">
                    <label for="provider_tel" class="form-label">Телефон поставщика</label>
                    <input type="tel" class="form-control" id="provider_tel" name="provider_tel" value="{{@old('provider_tel')}}">
                </div>
                <div class="col-auto">
                    <label for="provider_fax" class="form-label">Факс поставщика</label>
                    <input type="text" class="form-control" id="provider_fax" name="provider_fax" value="{{@old('provider_fax')}}">
                </div>
                <div class="col-auto">
                    <label for="provider_date" class="form-label">Дата</label>
                    <input type="date" class="form-control" id="provider_date" name="provider_date" value="{{@old('provider_date')}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-auto">
                    <label for="customer_tel" class="form-label">Телефон покупателя</label>
                    <input type="tel" class="form-control" id="customer_tel" name="customer_tel" value="{{@old('customer_tel')}}">
                </div>
                <div class="col-auto">
                    <label for="customer_fax" class="form-label">Факс покупателя</label>
                    <input type="text" class="form-control" id="customer_fax" name="customer_fax" value="{{@old('customer_fax')}}">
                </div>
                <div class="col-auto">
                    <label for="customer_date" class="form-label">Дата</label>
                    <input type="date" class="form-control" id="customer_date" name="customer_date" value="{{@old('customer_date')}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
