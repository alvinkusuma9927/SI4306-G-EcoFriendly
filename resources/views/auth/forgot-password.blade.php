<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <style>
            body{
                font-family: 'Nunito';
            }
            .title{
                font-size:24px;
                font-weight: bold;
                color: #343A40;
            }
            ._text{
                font-size:16px;
                color: #343A40;
            }
            .logo{
                margin:auto;
                width:50%;
                padding-top:40px;
                padding-bottom:50px;
            }
        </style>
    </head>
    <body>
    <x-guest-layout>
        <x-jet-authentication-card class="p-5">
        <img class="logo" src="{{url('/image/logo.png')}}">
            <x-slot name="logo">
                <img style="display:none" src="{{ asset('image/logo.png') }}" />
            </x-slot>

            <p class="title mb-1">Forgot Password? 🔒</p>
            <p class="_text">Enter your email and we'll send you instructions to reset your password</p>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" style="margin-top:24px; font-size:16px; color:#343A40" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" placeholder="Enter your Email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center mt-4">
                        <button class="py-2" style="background-color:#28DF99; width:100%; color:white; border-radius:6px">
                            {{ __('Send Reset Link') }}
                        </button>
                </div>
                <div class="mt-5 mb-2" style="text-align:center">
                    <i class="bi-chevron-left mr-3" role="img" aria-label="back" style="color:#28DF99"></i>
                    <a style="color:#28DF99; padding-top:32px; font-family: Nunito; padding:0 auto" href="{{ route('login') }}"> Back to login</a>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
    </body>
</html>
