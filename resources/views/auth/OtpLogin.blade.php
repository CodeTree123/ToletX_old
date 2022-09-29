@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-header ">{{ __('Login') }}</div>
                @if ($message = Session::get('Failed'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="card-body otp_card_body">
                    <form method="POST" action="{{ route('send.otp') }}">
                        @csrf
                        <div class="form-group d-flex justify-content-center align-items-center">
                           
                            <div class="d-flex justify-content-around align-items-center">
                                <label for="phone" class=" me-3">{{ __('Mobile ') }}</label>  
                                <input id="phone" type="number" class="form-control msform" name="phone" required autofocus>
                            </div>
                            <div class="ms-4">
                            <button class="btn btn-primary verify" type="submit">Send OTP</button>

                            </div>
                        </div>
        
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection