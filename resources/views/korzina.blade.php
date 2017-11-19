@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row text-center p-3">
            <div class="col-2">

            </div>
            <div class="col-4">
                Товар
            </div>
            <div class="col-2">
                Цена
            </div>
            <div class="col-1">
                Количество
            </div>
            <div class="col-2">
                Итог
            </div>
            <div class="col-1">
                Удалить
            </div>
        </div>
        <div class="row align-items-center border bg-dark text-light rounded text-center p-3">
            <div class="col-2">
                <img class="w-100 rounded-circle" src="./fiesta_img/2.jpg" alt="" >
            </div>
            <div class="col-4">
                Название товара
            </div>
            <div class="col-2">
                34000 сом
            </div>
            <div class="col-1">
                <input type="text" class="form-control text-center" size="4" maxlength="4">
            </div>
            <div class="col-2">
                34000 сом
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-outline-danger">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>

        </div>
        <div class="row">
            <div class="col d-flex justify-content-end mx-auto my-5">
                <button type="button" class="btn btn-outline-dark ali"><a href="/order">Оформление заказа</a></button>
            </div>
        </div>
    </div>

@endsection