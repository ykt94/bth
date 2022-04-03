@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-9 px-4 mt-3">
            <div class="pull-left">
                <h5>Редактировать продукт</h5>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger px-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6 px-4">
                <div class="form-group">
                    Артикул {{$admin}}
                    @if($admin)
                        <input type="text" name="article" value="{{ $product->article }}" class="form-control">
                    @else
                        {{ $product->article }}
                    @endif
                </div>
            </div>

            <div class="col-9 px-4 mt-2">
                <div class="form-group">
                    Название
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                </div>
            </div>

            <div class="col-4 px-4 mt-2">
                <div class="form-group">
                    Статус
                    <select name="status" selected="{{ $product->status }}" class="form-control">
                        <option value="available">Доступен</option>
                        <option value="unavailable">Не доступен</option>
                    </select>
                </div>
            </div>

            <div class="col-9 px-4 mt-2">
                <div class="form-group">
                    <table class="border-0">
                        <tr>
                            <td class="pe-3">Цвет</td>
                            <td>Размер</td>
                        </tr>
                        <tr>
                            <td class="pe-3">
                                <input type="text" name="color" value="{{ $product->data['Color'] }} "class="form-control">
                            </td>
                            <td>
                                <select name="size" class="form-control">
                                    <option value="XL" @selected ($product->data['Size'] == 'XL')>XL</option>
                                    <option value="L" @selected ($product->data['Size'] == 'L')>L</option>
                                    <option value="M" @selected ($product->data['Size'] == 'M')>M</option>
                                    <option value="S" @selected ($product->data['Size'] == 'S')>S</option>
                                    <option value="XS" @selected ($product->data['Size'] == 'XS')>XS</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-12 px-4 mt-4">
                <button type="submit" class="btn btn-primary bg-lucky px-5">Сохранить</button>
            </div>
        </div>
    </form>
@endsection
