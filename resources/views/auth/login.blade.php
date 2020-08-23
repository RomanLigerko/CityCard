@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вхід у особистий кабінет</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">
                                    Телефон</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="tel"
                                           class="form-control @error('phone_number') is-invalid @enderror"
                                           name="phone_number" value="{{ old('phone_number') }}" required
                                           autocomplete="phone_number" autofocus>

                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="card_number" class="col-md-4 col-form-label text-md-right">Номер
                                    картки</label>
                                <div class="col-md-6">
                                    <input id="card_number" type="tel"
                                           class="form-control @error('card_number') is-invalid @enderror"
                                           name="card_number" value="{{ old('card_number') }}" required
                                           autocomplete="card_number" autofocus>

                                    @error('card_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Запам'ятати мене
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Увійти
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
