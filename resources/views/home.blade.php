@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                Картки:
                @if($cards->isNotEmpty())
                    @foreach($cards as $card)
                        <div class="div" style="border: 1px solid red; margin: 5px">
                            <p>Номер: {{$card->number}}</p>
                            <p>Баланс: {{$card->balance}}</p>
                        </div>
                    @endforeach
                @else
                    У вас немає жодної картки
                @endif
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
                    @if($balanceRecords->isNotEmpty())
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
                    @if($journeyRecords->isNotEmpty())
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
            </div>
        </div>
    </div>
@endsection
