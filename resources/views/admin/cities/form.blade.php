@extends('layouts.app')

@isset($city)
    @section('title', 'Редагувати місто' . $city->name)
@else
    @section('title', 'Створити місто')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($city)
            <h1>Редагувати місто <b>{{ $city->name }}</b></h1>
        @else
            <h1>Створити місто</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($city)
              action="{{ route('cities.update', $city) }}"
              @else
              action="{{ route('cities.store') }}"
            @endisset
        >
            <div>
                @isset($city)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Назва: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($city){{ $city->name }}@endisset">
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
