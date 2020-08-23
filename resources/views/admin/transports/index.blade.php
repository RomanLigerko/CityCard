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
                            <button class="btn btn-info" id="TransportBtn" style="color: white;">Транспорт</button>
                        </a>
                        <a href="{{route('admin.dashboard.tickets')}}">
                            <button class="btn btn-info" id="TicketsBtn">Квитки</button>
                        </a>
                        <a href="{{route('transport.create')}}">
                            <button class="btn btn-success">Створити Транспорт</button>
                        </a>
                    </div>
                    <table class="table transports text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-left">Id</th>
                            <th scope="col">Назва</th>
                            <th scope="col">Місто</th>
                            <th scope="col">Тип квитка</th>
                            <th scope="col">Дії</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($transports->isNotEmpty())
                            @foreach($transports as $transport)
                                <tr>
                                    <td class="text-left">{{$transport->id}}</td>
                                    <td>{{$transport->name}}</td>
                                    @isset($transport->city)
                                        <td>{{$transport->city->name}}</td>
                                    @else
                                        <td></td>
                                    @endisset
                                    @isset($transport->ticket)
                                        <td>{{$transport->ticket->name}}</td>
                                    @else
                                        <td></td>
                                    @endisset
                                    <td>
                                        <a href="{{route('transport.edit', $transport)}}">
                                            <button class="btn btn-primary" style="color: white">
                                                Редагувати
                                            </button>
                                        </a>
                                        <form action="{{ route('transport.destroy', $transport) }}" method="POST">
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
                    {{$transports->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
