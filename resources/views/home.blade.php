@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if($cards->isNotEmpty())
                    Картки:
                    <div class="cards">
                        @foreach($cards as $card)
                            <div class="card">
                                <p><b>Номер:</b> {{$card->number}}</p>
                                <p><b>Баланс:</b> {{$card->balance}} грн.</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    У вас немає жодної картки
                @endif
                @if($balanceRecords->isNotEmpty())
                    Історія поповнень:
                    <table class="table cities">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Номер картки</th>
                            <th scope="col">Сума</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($balanceRecords as $count => $record)
                            <tr>
                                <td>{{ ++$count }}</td>
                                <td>{{ $record->card_number }}</td>
                                <td>{{ $record->sum }}</td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$balanceRecords->links()}}
                    @if($journeyRecords->isNotEmpty())
                        Історія поїздок:
                        <table class="table cities">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Номер квитка</th>
                                <th scope="col">Транспорт</th>
                                <th scope="col">Місто</th>
                                <th scope="col">Ціна</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($journeyRecords as $count => $record)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $record->card_number }}</td>
                                    <td>{{ $record->transport_name }}</td>
                                    <td>{{ $record->city_name }}</td>
                                    <td>{{ $record->price }}</td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                        {{$journeyRecords->links()}}
            </div>
        </div>
    </div>
@endsection
