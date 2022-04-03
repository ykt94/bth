@extends('layouts.app')
@section('content')

    <table class="table table-bordered text-sadness">
        <tr>
            <th>АРТИКУЛ</th>
            <th>НАЗВАНИЕ</th>
            <th>СТАТУС</th>
            <th>АТРИБУТЫ</th>
            <th><a class="btn btn-primary bg-lucky px-4" href="{{ route('products.create') }}">Добавить</a></th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->article }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->status }}</td>
                <td>Цвет: {{ $product->data['Color'] }} <br>Размер: {{ $product->data['Size'] }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
