@extends('layouts.master')
@section('content')
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>


                    <div class="card-body otp_card_body">
                        <form class="row" method="POST" action="{{ route('loginWithOtp') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" value="{{request('phone')}}" class="form-control" name="phone" readonly required autofocus>
                                </div>
                            </div>
                            <div class="form-group row otp">
                                <label for="password" class="col-md-4 col-form-label text-md-right">OTP</label>

                                <div class="col-md-6">

                                    <input id="otp" type="number" class="form-control" name="otp" >
                                </div>
                            </div>
                            <div class="form-group row send-otp">
                                <div class="col-md-6 offset-md-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="verify btn btn-primary"  type="submit">Verify OTP</button>
                                        @include('auth.time_counter')
                                    </div>
                                </div>
                                
                            </div>
                        </form>

                        <form method="POST" action="{{ route('send.otp') }}">
                            @csrf

                                <input id="phone" type="hidden" value="{{request('phone')}}" name="phone" required autofocus>
                            <div class="form-group row send-otp">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <a href=""><button class="text-white"  type="submit">Didn't get otp ?? click here</button></a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
