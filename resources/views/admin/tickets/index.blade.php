@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="admin-actions">
                    <div class="btn-container">
                        <a href="{{route('admin.dashboard')}}">
                            <button class="btn btn-info" id="CityBtn">Міста</button>
                        </a>
                        <a href="{{route('admin.dashboard.transports')}}">
                            <button class="btn btn-info" id="TransportBtn">Транспорт</button>
                        </a>
                        <a href="{{route('admin.dashboard.tickets')}}">
                            <button class="btn btn-info" id="TicketsBtn" style="color: white;">Квитки</button>
                        </a>
                        <a href="{{route('ticket.create')}}">
                            <button class="btn btn-success">Створити Квиток</button>
                        </a>
                    </div>
                    <table class="table tickets text-left">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-left">Id</th>
                            <th scope="col">Тип</th>
                            <th scope="col">Ціна</th>
                            <th scope="col">Дії</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($tickets->isNotEmpty())
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td class="text-center">{{$ticket->id}}</td>
                                    <td>{{$ticket->name}}</td>
                                    <td>{{$ticket->price}}</td>
                                    <td>
                                        <a href="{{route('ticket.edit', $ticket)}}">
                                            <button class="btn btn-primary" style="color: white">
                                                Редагувати
                                            </button>
                                        </a>
                                        <form action="{{ route('ticket.destroy', $ticket) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value='Видалити'>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$tickets->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
