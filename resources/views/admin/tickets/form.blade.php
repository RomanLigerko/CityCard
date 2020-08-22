@extends('layouts.app')

@isset($ticket)
    @section('title', 'Редагувати квиток' . $ticket->name)
@else
    @section('title', 'Створити квиток')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($ticket)
            <h1>Редагувати квиток <b>{{ $ticket->name }}</b></h1>
        @else
            <h1>Створити квиток</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($ticket)
              action="{{ route('ticket.update', $ticket) }}"
              @else
              action="{{ route('ticket.store') }}"
            @endisset
        >
            <div>
                @isset($ticket)
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
                               value="@isset($ticket){{ $ticket->name }}@endisset">
                    </div>
                </div>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Ціна: </label>
                    <div class="col-sm-6">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="price" id="price"
                               value="@isset($ticket){{ $ticket->price }}@endisset">
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
