@extends('layouts.app')

@isset($transport)
    @section('title', 'Редагувати транспорт' . $transport->name)
@else
    @section('title', 'Створити транспорт')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($transport)
            <h1>Редагувати транспорт <b>{{ $transport->name }}</b></h1>
        @else
            <h1>Створити транспорт</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($transport)
              action="{{ route('transport.update', $transport) }}"
              @else
              action="{{ route('transport.store') }}"
            @endisset
        >
            <div>
                @isset($transport)
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
                               value="@isset($transport){{ $transport->name }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="city_id" class="col-sm-2 col-form-label">Місто: </label>
                    <div class="col-sm-6">
                        <select name="city_id" id="city_id">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}"
                                        @isset($transport)
                                        @if($transport->city_id == $city->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{$city->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-group row">
                    <label for="city_id" class="col-sm-2 col-form-label">Тип квитка: </label>
                    <div class="col-sm-6">
                        <select name="ticket_id" id="ticket_id">
                            @foreach($tickets as $ticket)
                                <option value="{{$ticket->id}}"
                                        @isset($transport)
                                        @if($transport->ticket_id == $ticket->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{$ticket->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
