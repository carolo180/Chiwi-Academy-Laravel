<x-header/>

@extends('layouts.app')

@section('content')

<div class="w-full text-center my-9">
    <h1 class="font-bold text-5xl ">¿Qué esperas para unirte a la banda?</h1>
</div>

<div class="w-full h-5/6 flex justify-center relative ">
    <div class="row justify-content-center mx-0 px-0">
        <div class="col">
            <div class="">
                

                <div class="card-body bg-[#1F464F] w-[29rem] pt-10 rounded-xl" >
                    <form method="POST" action="{{ route('register') }}" class="bg-[#1F464F] ">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-white">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-white">{{ __('correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-white">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end text-white">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-[#FF8A36] w-[8.3rem] h-[1.5rem] rounded-md ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute right-0 bottom-[-3.3rem]     md:w-[25rem] ">
        <img src="/images/chiwis.png" class="W- md:h-[25rem]" />
    </div>
</div>


<x-footer/>
@endsection
