@extends('products.layout')

@section('content')
 <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Перечень товаров</h2>
            </div>
            <div class="pull-right" style="float: right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Добавить</a>
            </div>
        </div>
    </div>
<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<br>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th width="400px">Действие</th>
        </tr>
        
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Показать</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Изменить</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}



@endsection
