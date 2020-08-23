@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="admin-actions">
                    <div class="btn-container">
                        <a href="{{route('admin.dashboard')}}">
                            <button class="btn btn-info" id="CityBtn" style="color: white;">Міста</button>
                        </a>
                        <a href="{{route('admin.dashboard.transports')}}">
                            <button class="btn btn-info" id="TransportBtn">Транспорт</button>
                        </a>
                        <a href="{{route('admin.dashboard.tickets')}}">
                            <button class="btn btn-info" id="TicketsBtn">Квитки</button>
                        </a>
                        <a href="{{route('cities.create')}}">
                            <button class="btn btn-success">Створити Місто</button>
                        </a>
                    </div>
                    <table class="table cities text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-left">Id</th>
                            <th scope="col">Назва</th>
                            <th scope="col">Дії</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        @if($cities->isNotEmpty())
                            @foreach($cities as $city)
                                <tr>
                                    <td class="text-left">{{$city->id}}</td>
                                    <td>{{$city->name}}</td>
                                    <td>
                                        <a href="{{route('cities.edit', $city)}}">
                                            <button class="btn btn-primary" style="color: white">
                                                Редагувати
                                            </button>
                                        </a>
                                        <form action="{{ route('cities.destroy', $city) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"  class="btn btn-danger" value='Видалити'>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$cities->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
