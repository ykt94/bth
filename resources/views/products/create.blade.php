@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-9 px-4 mt-3">
            <div class="pull-left">
                <h5>Добавить продукт</h5>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-6 px-4">
                <div class="form-group">
                    Артикул
                    <input type="text" name="article" class="form-control">
                </div>
            </div>

            <div class="col-9 px-4 mt-2">
                <div class="form-group">
                    Название
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="col-4 px-4 mt-2">
                <div class="form-group">
                    Статус
                    <select name="status" class="form-control">
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
                                <input type="text" name="color" class="form-control">
                           </td>
                            <td>
                                <select name="size" class="form-control">
                                    <option value="XL">XL</option>
                                    <option value="L">L</option>
                                    <option value="M">M</option>
                                    <option value="S">S</option>
                                    <option value="XS">XS</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-12 px-4 mt-4">
                <button type="submit" class="btn btn-primary bg-lucky px-5">Добавить</button>
            </div>
        </div>
    </form>
@endsection
