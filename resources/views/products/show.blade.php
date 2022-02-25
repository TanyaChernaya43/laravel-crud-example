@extends('products.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Показать описание продукта</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="float: right; background-color:green; border: none;" href="{{ route('products.index') }}"> Назад</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Описание:</strong>
                {{$product->detail }}
            </div>
        </div>
    </div>
@endsection
